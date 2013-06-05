#coding=utf-8

"""
General database interface
"""

class DATASTYLE:
	STRING = 1
	TABLE = 2
	MULTIDIMENSION = 3

DEFAULT_DATASTYLE = 2

class DATATYPE:
	NULL = 0
	INT = 1
	FLOAT = 2
	STRING = 3
	OBJECT = 4

class Connection(object):

	def __init__(self):
		pass
	
	@classmethod
	def from_uri(cls, uri):
		conf = parseuri(uri)
		return cls(conf)


class Cursor(object):

	def __init__(self):
		pass
	
	def get_description(self):
		pass
	
	def get_size(self):
		pass

class Error(Exception):
	Errs = {}
	def __init__(self, err):
		self.no = err[0]
		self.msg = err[1]
		self.code = self.Errs.get(self.no) or 'USER_UNKNOWN_ERROR'

	def __str__(self):
		return repr(self)
	
	def __repr__(self):
		return "%s(%s, %s, %s)" % (self.__class__.__name__, self.no, self.code, self.msg)
