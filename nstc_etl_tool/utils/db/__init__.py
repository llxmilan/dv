#coding=utf-8
import sys
import urllib
from urlparse import urlparse

global_query_count = 0

handler_modules = ['mysql', 'hive']
adapters = {}

def get_adapter(engine):
	if engine in handler_modules:
		if not engine in adapters:
			module = (__name__  + '.' if __name__ != '__main__' else '') + engine
			__import__(module)
			adapters[engine] = sys.modules[module]
		return adapters[engine]

def builduri(dbconf):
    "mysql://192.168.0.186:5002/dim?user=meituan_in&password=RakesifOkAyt" 
    return "mysql://%(host)s:%(port)s/%(db)s?user=%(user)s&password=%(passwd)s" % dbconf

def parseuri(uri):
	pieces = urlparse(uri)
	conf = {}
	conf['engine'] = pieces.scheme
	
	auth = ''
	server = pieces.netloc
	if '@' in server:
		auth, server = pieces.netloc.split('@', 1) 
	
	if auth:
		if ':' in auth:
			conf['user'], conf['passwd'] =  auth.split(':')
		else:
			conf['user'] = auth

	if server:
		if ':' in server:
			conf['host'], conf['port'] = server.split(':')
			conf['port'] = int(conf['port'])
		else:
			conf['host'] = server
	
	path = pieces.path.strip('/')
	if path:
		if '?' in path:
			conf['db'], args = path.split('?')
			for exp in args.split('&'):
				if '=' in exp:
					arg, value = exp.split('=')
					conf[arg] = value
		else:
			conf['db'] = path

	return conf

def connect_uri(uri):
	conf = parseuri(uri)
	adapter = get_adapter(conf['engine'])
	return adapter.Connection(conf)

def connect(engine, conf):
	adapter = get_adapter(engine)
	return adapter.Connection(conf)	

def connecting(engine, conf):
	adapter = get_adapter(engine)
	return adapter.connecting(conf)	

def querycount(c = 0):
	global global_query_count
	global_query_count += c
	return global_query_count

def sql_split(stmt):
	try:
		import sqlparse
	except ImportError:
		sqlparse = None
	#去掉分号
	if sqlparse:
		return [s.strip()[:-1] if s.strip()[-1] == ';' else s for s in sqlparse.split(stmt) if s.strip()]
	else:
		return stmt.strip().split(';')

__all__ = ['connect', 'connecting', 'connect_uri']

if __name__ == '__main__':
	url = "mysql://q3boy:123@192.168.0.250:5002/test?weight=2&type=slave&auto_commit=true&charset=UTF8"
	# conn = connect_uri(url)
	# c = conn.query('show tables;')
	# print c.fetchall()
