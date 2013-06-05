#coding=utf-8
import sys, os
import logging
from pprint import PrettyPrinter

# p = PrettyPrinter(indent = 4)
p = PrettyPrinter()
pp = p.pprint
pf = p.pformat

islocal = sys.platform == 'win32'
# os.path.join(sys.path[0], '../')
# sys.path.insert(0, os.path.join(sys.path[0], '../'))
# sys.path.insert(0, os.path.abspath('../'))
# print sys.path

# print "Is Local?", islocal

class Log(object):
	logging.basicConfig(format='\n%(asctime)s -- %(message)s',
                    filename='./debug.log',
                    datefmt='%Y-%m-%d %H:%M:%S',                    
                    filemode='w' if islocal else 'a',
                    level=logging.NOTSET)
	logging.getLogger().setLevel(logging.NOTSET)

	def __call__(self, title, msg, formater = lambda x:x):
		# pp(globals())#['__module__']
		msg = '[%s]\n%s' % (title, formater(msg))
		logging.info(msg)
	
	def begin(self):
		self("BEGIN", "------------------------------------------------------------------------------")

	def info(self, title, msg):
		pass
	
class errlog(object):
	def __init__(self, file):
		self._f = open(file, 'a')

	def write(self, msg):
		self._f.write(msg)
	
	def writelines(self, seq):
		self._f.writelines(seq)

_log = Log()
