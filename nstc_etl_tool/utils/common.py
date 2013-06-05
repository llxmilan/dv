#coding=utf-8
import sys, os, time, subprocess
import re
import socket

def get_wordcount(filename, ignore = True):
	if os.path.isfile(filename):
		"""获得一个文件的行数和字节数"""
		cmd = "/usr/bin/wc -cl %s" % filename
		p = subprocess.Popen(cmd, shell = True, stdout=subprocess.PIPE, stderr=subprocess.PIPE)
		p.wait()
		if p.returncode is not 0:
			msg = p.stderr.read()
			if not ignore:
				raise SystemError, msg
			else:
				print msg
				return 0, 0
		res = p.stdout.readline().split()
		lines, bytes = int(res[0]), int(res[1])
	else:
		lines, bytes = 0, 0
	return lines, bytes

def scp(source, host, target):
    cmd  = 'scp %s %s:%s 2>&1 >/dev/null' % (source, host, target)
    os.system(cmd)

def gethostname():
	return socket.gethostname()

def upload_remote_file(local_path, host, remote_path = None):
	if not remote_path:
		remote_path = local_path
	if host != gethostname():
		os.system("scp %(local_path)s %(host)s:%(remote_path)s" % locals())

def delete_remote_file(remote_path, host):
	if host != gethostname():
		os.system("ssh %(host)s 'rm %(remote_path)s'" % locals())


def ddl_change_tablename(ddl, newname):
	newddl = ddl.split('(', 2)
	newddl[0] = re.sub(r'`?(\w+)`?\s*$', ' `%s` ' % (newname) , newddl[0])
	return '('.join(newddl)

def ddl_change_engine(ddl, engine):
    def is_legal_engine(engine):
        return engine.lower() in ('myisam', 'innodb')
    DEFAULT_ENGINE = 'myisam'
    if not is_legal_engine(engine):
        print "WARNING: engine %s is not legal, use %s as default." % (engine, DEFAULT_ENGINE)
        engine = DEFAULT_ENGINE
    return re.sub(r'(?i)(?<=ENGINE=)(\w+)', engine, ddl)

class ColorPrint(object):
	"""
	ref : http://stackoverflow.com/questions/2330245/python-change-text-color-in-shell
	colors: https://www.siafoo.net/snippet/88
	"""
	colors = {
		'gray': '\x1b[01;30m',
		'red': '\x1b[01;31m',
		'green': '\x1b[01;32m',
		'yellow': '\x1b[01;33m',
		'blue': '\x1b[01;34m',
		'magenta': '\x1b[01;35m',
		'cyan': '\x1b[01;36m',
		'white': '\x1b[01;37m',
		'crimson': '\x1b[01;38m',
		'hgray': '\x1b[01;41m',
		'hred': '\x1b[01;42m',
		'hbrown': '\x1b[01;43m',
		'hblue': '\x1b[01;44m',
		'hmagenta': '\x1b[01;45m',
		'hcyan': '\x1b[01;46m',
		'hgray': '\x1b[01;47m',
		'hcrimson': '\x1b[01;48m',
	}

	@staticmethod
	def has_colors(stream):
		if not hasattr(stream, "isatty"):
			return False
		if not stream.isatty():
			return False # auto color only on TTYs
		try:
			import curses
			curses.setupterm()
			return curses.tigetnum("colors") > 2
		except:
			# guess false in case of error
			return False
	@classmethod
	def output(cls, text, color = None, end = '\n'):
		# text = text.strip()
		if not cls.has_colors(sys.stdout):
			color = None
		if color:
			sys.stdout.write(cls.colors[color] + text + "\x1b[00m" + end)
		else:
			sys.stdout.write(text + end)
		sys.stdout.flush()

def print_warning(text, color = 'red'):
	text = text.strip()
	if not text:
		return
	ColorPrint.output(text, color)
def colorprint(text, color, end = '\n'):
	ColorPrint.output(text, color, end)

if __name__ == "__main__":
	ddl = '''\
CREATE TABLE `deal` (
  `dealid` int(10) unsigned NOT NULL,
  `buyercount` int(10) unsigned NOT NULL default '0' COMMENT '购买人数',
  `ordercount` int(10) unsigned NOT NULL default '0' COMMENT '订单数',
  `volume` int(10) unsigned NOT NULL default '0' COMMENT '销量',
  `isvalid` tinyint(3) unsigned NOT NULL default '0' COMMENT '是否已成团',
  `revenue` decimal(11,2) unsigned NOT NULL default '0.00' COMMENT '销售额',
  `profit` decimal(11,3) NOT NULL default '0.000' COMMENT '销售利润',
  PRIMARY KEY  (`dealid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='项目销售累积事实'
	'''
	print ddl_change_tablename(ddl, 'deal_newname')

	ddl = '''\
 create TABLE deal (
  `dealid` int(10) unsigned NOT NULL,
  `buyercount` int(10) unsigned NOT NULL default '0' COMMENT '购买人数',
  `ordercount` int(10) unsigned NOT NULL default '0' COMMENT '订单数',
  `volume` int(10) unsigned NOT NULL default '0' COMMENT '销量',
  `isvalid` tinyint(3) unsigned NOT NULL default '0' COMMENT '是否已成团',
  `revenue` decimal(11,2) unsigned NOT NULL default '0.00' COMMENT '销售额',
  `profit` decimal(11,3) NOT NULL default '0.000' COMMENT '销售利润',
  PRIMARY KEY  (`dealid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='项目销售累积事实'
	'''
	print ddl_change_tablename(ddl, 'deal_newname')

	ddl = '''\
CREATE				table	if not exists		deal (
  `dealid` int(10) unsigned NOT NULL,
  `buyercount` int(10) unsigned NOT NULL default '0' COMMENT '购买人数',
  `ordercount` int(10) unsigned NOT NULL default '0' COMMENT '订单数',
  `volume` int(10) unsigned NOT NULL default '0' COMMENT '销量',
  `isvalid` tinyint(3) unsigned NOT NULL default '0' COMMENT '是否已成团',
  `revenue` decimal(11,2) unsigned NOT NULL default '0.00' COMMENT '销售额',
  `profit` decimal(11,3) NOT NULL default '0.000' COMMENT '销售利润',
  PRIMARY KEY  (`dealid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='项目销售累积事实'
	'''
	print ddl_change_tablename(ddl, 'deal_newname')
