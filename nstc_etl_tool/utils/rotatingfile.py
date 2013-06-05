#coding=utf-8
import sys, os
import time, datetime
import re
printf = lambda s:sys.stderr.write('%s\n' % s)

class RotatingFile(object):
	DEFAULT_OFFSET_FILE = '%(perfix)soffset'

	def __init__(self, pattern):
		self.pattern = pattern
		self._pattern = self.parse_pattern(pattern)
		self._file = None

	def __enter__(self):
		return self
	
	def __exit__(self, *exc_info):
		if self._file and not isinstance(self._file, str):
			self._file.close()

	@property
	def file(self):
		if not hasattr(self._file, 'readlines'):
			if self._file is None:
				raise LookupError, "Do seek before read files" 
			printf("open file %s" % self._file)
			self._file = open(self._file, 'rb')
		return self._file
	
	def tell(self):
		return self._file.name, self.offset

	@property
	def offset(self):
		return self._file.tell()

	def seek(self, filename, offset):
		#补齐路径
		path, basename = os.path.split(filename)
		if not path:
			filename = os.path.join(self._pattern['path'], filename)
		
		pattern = self._split_pattern(filename)
		if self._check_pattern(pattern):
			self._file = filename
			self.file.seek(offset)
			self._nextfile = None
	
	def seek_first_match(self):
		pass
	
	@property
	def default_offsetfile(self):
		return os.path.join(self._pattern['path'], self.DEFAULT_OFFSET_FILE % self._pattern)

	def seek_fromfile(self, offsetfile = None):
		offsetfile = offsetfile or self.default_offsetfile
		#printf(offsetfile)
		if not os.path.exists(offsetfile):
			return False
	
		with open(offsetfile) as f:
			s = f.readline()
		#todo: check s
		filename, _, offset = s.strip().partition(' ')
		if not offset.isalnum():
			printf('Invalid offset' + repr(s))
			return False
		
		printf("Seek from file %s (%s %s)" % (offsetfile, filename, int(offset)))
		self.seek(filename, int(offset))
		return True

	def save_offset(self, offsetfile = None):
		offsetfile = offsetfile or self.default_offsetfile
		current = self.file.name
		if not is_thesame_path(current, offsetfile):
			current = os.path.abspath(current)
		else:
			current = os.path.basename(current)

		printf("Offset saved into %s (%s %s)" % (offsetfile, current, self.offset))
		open(offsetfile, 'w').write("%s %s" % (current, self.offset))

	def readline(self):
		l = self.file.readline()
		if not l:
			self.rollover()
			l = self.file.readline()
		return l

	def __iter__(self):
		f = self.file
		while 1:
			l = f.readline()
			if l:
				yield l
			elif self.rollover():
				f = self.file
			else:
				break	
	
	def outputlines(self, lines, output = sys.stdout.write):
		f = self.file
		linecount = 0
		while linecount < lines:
			l = f.readline()
			if l:
				output(l)
				linecount += 1
			elif self.rollover():
				f = self.file
			else:
				break
	
	def output(self, output = sys.stdout.write):
		f = self.file
		while 1:
			l = f.readline()
			if l:
				output(l)
			elif self.rollover():
				f = self.file
			else:
				break

	def rollover(self):
		if not self._nextfile:
			self._nextfile = os.path.join(self._pattern['path'], self.compute_rollover())
		
		if os.path.exists(self._nextfile):
			self._file.close()
			self._file = self._nextfile
			self._nextfile = None
			return True
		else:
			printf("Failed in rolling over, exit now")
			return False

	def compute_rollover(self):
		"""To be overrided"""
		raise NotImplementedError

	def _check_pattern(self, pattern):
		if not pattern:
			return False

		if not is_thesame_path(pattern['path'], self._pattern['path']):
			raise IOError, "'%s' must in the same directory with %s" \
							% (pattern['path'], self._pattern['path'])
		
		if pattern['perfix'] != self._pattern['perfix']:
			raise TypeError, "'%s' has different perfix with pattern '%s'" \
							% (pattern['perfix'], self._pattern['perfix'])
		
		return True

class NumericRotatingFile(RotatingFile):
	PATTERN_FORMAT = r'(.*?)(0+)$'
	ROTATING_FORMAT = r'(.*?)(\d{%d})$'

	def __init__(self, pattern):
		super(NumericRotatingFile, self).__init__(pattern)

	def parse_pattern(self, pattern):
		path, pattern = os.path.split(pattern)
		parts = re.compile(self.PATTERN_FORMAT).findall(pattern)
		if not parts:
			raise SyntaxError, "'%s' is not a correct numeric rotating file pattern" % pattern
		perfix, zeros = parts[0]
		pattern = {
			'path': path,
			'perfix': perfix,
			'zeros': len(zeros),
		}
		return pattern
	
	def _split_pattern(self, filename):
		path, pattern = os.path.split(filename)
		parts = re.compile(self.ROTATING_FORMAT % self._pattern['zeros']).findall(pattern)
		if not parts:
			raise TypeError, filename
		
		perfix, num = parts[0]
		pattern = {
			'path': path,
			'perfix': perfix,
			'num': int(num),
		}
		return pattern
	
	def _check_pattern(self, pattern):
		return super(NumericRotatingFile, self)._check_pattern(pattern)

	def compute_rollover(self):
		pattern = self._split_pattern(self._file.name)
		num = str(pattern['num'] + 1).zfill(self._pattern['zeros'])
		if len(num) > self._pattern['zeros']:
			raise IndexError, "%s%s is out of pattern %s" % (perfix, num, self.pattern)

		return pattern['perfix'] + num

class TimedRotatingFile(RotatingFile):
	PATTERN_FORMAT = r'(.*)\{(.*)\}$'

	def __init__(self, pattern):
		super(TimedRotatingFile, self).__init__(pattern)
	
	def compute_rollover(self):
		pattern = self._split_pattern(self._file.name)

		newtime = dateadd(pattern['time'], **{self._pattern['resolution'] : 1})
		newfile = datetime.datetime.strftime(newtime, self._pattern['format'])

		if newfile == os.path.basename(self._file.name):
			raise IndexError, "%s%s is out of pattern %s" % (perfix, num, self.pattern)

		return newfile	
	
	def parse_pattern(self, pattern):
		path, pattern = os.path.split(pattern)
		parts = re.compile(self.PATTERN_FORMAT).findall(pattern)
		if not parts:
			raise SyntaxError, "'%s' is not a correct numeric rotating file pattern" % pattern
		perfix, timeformat = parts[0]
		pattern = {
			'path': path,
			'perfix': perfix,
			'format': perfix + timeformat,
			'resolution': get_resolution(timeformat) + 's',
		}
		return pattern
	
	def _split_pattern(self, filename):
		path, pattern = os.path.split(filename)
		try:
			dt = datetime.datetime.strptime(pattern, self._pattern['format'])
		except ValueError:
			raise TypeError, "%s" % filename
		
		parts = pattern.split(self._pattern['perfix'])
		if len(parts) == 1 or parts[0] != '':
			raise TypeError, "%s" % filename

		pattern = {
			'path': path,
			'perfix': self._pattern['perfix'],
			'time': dt,
		}
		return pattern
	
	def _check_pattern(self, pattern):
		return super(TimedRotatingFile, self)._check_pattern(pattern)

def is_thesame_path(filea, fileb):
	patha = os.path.dirname(os.path.abspath(filea))
	pathb = os.path.dirname(os.path.abspath(fileb))
	return patha == pathb

def get_resolution(timeformat):
	"""找出一个时间格式字符串的时间精度
	比如：
		get_resolution('%Y-%m-%d %H') #return 'hour'
		get_resolution('%Y%m') #return 'month'
	"""
	dt = datetime.datetime
	test_time = dt.fromtimestamp(1320981071) # '2011-11-11 11:11:11'
	deg_str = dt.strftime(test_time, timeformat)
	deg_time = dt.strptime(deg_str, timeformat)

	timeunit = ['second', 'minute', 'hour', 'day', 'month', 'year']
	for u in timeunit:
		if getattr(deg_time, u) > 1:
			return u

def dateadd(dt, **kwargs):
	"""日期加法
	给定datetime对象dt
	接受参数years,months,days,hours,minutes,seconds
	例子：
		d = datetime.datetime(2011, 10, 9)
		dateadd(d, years = 1, months = 2, days = 20) 
		#return datetime.datetime(2012, 12, 21)
	"""
	month = dt.month + int(kwargs.pop('months', 0))
	year = int(kwargs.pop('years', 0)) + month / 12 - (month % 12 == 0)
	month = month % 12 or 12

	newdate = dt.replace(year = dt.year + year, month = month) 

	return newdate + datetime.timedelta(**kwargs)

def Open(**kwargs):
	pass

if __name__ == "__main__":
	import getopt

	optionlist = ['help', 'seek-from-file=', 'start=', 'offset=', 'rotating-pattern=', 'type=', 'no-auto-save']

	try:
		opts, argv = getopt.getopt(sys.argv[1:], "hfn:p:s:o:t:", optionlist)
	except getopt.GetoptError, err:
	    printf(err)
	    sys.exit(2)
	
	args = {}
	for o, arg in opts:
		# print 'parsing %s:%s' % (o, arg)
		if o in ('-n'):
			args['lines'] = int(arg)
		elif o in ('-p', '--rotating-pattern'):
			args['pattern'] = arg
		elif o in ('-t', '--type'):
			args['type'] = arg
		elif o in ('-s', '--start'):
			args['start'] = arg
		elif o in ('-o', '--offset'):
			args['offset'] = int(arg)
		elif o in ('-f'):
			args['use_default_offsetfile'] = True
		elif o in ('--seek-from-file'):
			args['offsetfile'] = arg
		elif o in ('--no-auto-save'):
			args['no-auto-save'] = True
		elif o in ('-h', '--help'):
			pass

	# printf(args)
	# printf(argv)

	pattern = args.get('pattern')
	if not pattern:
		printf("Please specify a rotating file pattern")
		exit(1)
	
	type_mapping = {
		'num': NumericRotatingFile,
		'numeric': NumericRotatingFile,
		'time': TimedRotatingFile,
	}
	rotating_handler = type_mapping.get(args.get('type'))
	if not rotating_handler:
		printf("Rotating type missing or incorrect.")
		exit(2)
	
	# f = rotating_handler(pattern)
	with rotating_handler(pattern) as f:
		offsetfile = args.get('offsetfile')
		if args.get('offsetfile') or args.get('use_default_offsetfile'):
			f.seek_fromfile()
		else:
			start, offset = args.get('start'), args.get('offset', 0)
			if not start:
				printf("Set start file and it's offset or specify an offset file")
				exit(3)
			f.seek(start, offset)
		
		lines = args.get('lines')
		if lines is None:
			f.output()
		else:
			f.outputlines(lines)

		if not args.get('no-auto-save'):
			f.save_offset(offsetfile)