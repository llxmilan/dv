#coding=utf-8
import os
import MySQLdb as db
from MySQLdb.constants import ER as ProgrammingErrors, CR as OperationalErrors

from base import Connection, Cursor, Error, DATATYPE

def _connect(conf = {}):
	defaultconf = {
		'host': 'localhost',
		'charset': 'utf8',
        'local_infile': 1,
	}
	defaultconf.update(conf)

 	args_needed = ['host', 'port', 'db', 'user', 'passwd', 'charset', 'unix_socket', 'local_infile']

	dbconf = {}
	for arg in args_needed:
		if arg in defaultconf:
			dbconf[arg] = defaultconf[arg]

	conn = db.connect(**dbconf)
	return conn

class MySQLConnection(Connection):
	conf = {}
	rowfactory = tuple
	is_autocommit = 1
	global_query_count = 0

	def __init__(self, conf = {}, rowfactory = tuple):
		self.conf = conf
		self.rowfactory = rowfactory
		self.connect()

	def connect(self):
		self.conn = _connect(self.conf)
		self.conn.autocommit(self.is_autocommit)
	
	def commit(self):
		return self.conn.commit()
	
	def cursor(self):
		if self.rowfactory in (dict, 'dict'):
			cur = self.conn.cursor(cursorclass = db.cursors.DictCursor)
		elif self.rowfactory in (tuple, 'tuple'):
			cur = self.conn.cursor()
		else:
			raise TypeError, "Row Factory '%s' is Not Exsit."
		return MySQLCursor(cur)

	def query(self, sql): 
		cursor = self.cursor()
		try: 
			cursor.execute(sql)
		except (db.ProgrammingError, db.OperationalError, db.InternalError), err: 
			raise DBError(err)
		
		self.__class__.global_query_count += 1
		return cursor
	
	execute = query

	def close(self):
		self.conn.close()

Connection = MySQLConnection

class MySQLConnectionConextManager:
	def __init__(self, conf = {}):
		self.conn = Connection(conf)

	def __enter__(self):
		return self.conn
	
	def __exit__(self, *exc_info):
		self.conn.close()

connectdb = connecting = MySQLConnectionConextManager
	
class MySQLCursor(Cursor):
    def __init__(self, cursor):
        self.__class__ = type(self.__class__.__name__,
                              (self.__class__, cursor.__class__),
                              {})
        self.__dict__ = cursor.__dict__
        self._cursor = cursor

    def __del__(self):
        self._cursor = None
    
    def descriptions(self):
    	print "description %s " % str(self._cursor.description)
    
    def get_description(self):
    	if self.description:
    		return ([(i[0], MySQLColumnTypes.BasicTypeMapping[i[1]]) for i in self.description],)
    
    def get_size(self):
    	if self.description:
    		return (len(self.description), self.rowcount)

class MySQLColumnTypes:
	from MySQLdb import FIELD_TYPE
	Type = dict([(v, k) for k, v in vars(FIELD_TYPE).items() if not k.startswith('__')])
	
	BasicTypeMapping = {
		0: DATATYPE.FLOAT,
		1: DATATYPE.INT,
		2: DATATYPE.INT,
		3: DATATYPE.INT,
		4: DATATYPE.FLOAT,
		5: DATATYPE.FLOAT,
		6: DATATYPE.NULL,
		7: DATATYPE.INT,
		8: DATATYPE.INT,
		9: DATATYPE.INT,
		10: DATATYPE.STRING,
		11: DATATYPE.STRING,
		12: DATATYPE.STRING,
		13: DATATYPE.STRING,
		14: DATATYPE.STRING,
		15: DATATYPE.STRING,
		16: DATATYPE.STRING,
		246: DATATYPE.FLOAT,
		247: DATATYPE.STRING,
		248: DATATYPE.STRING,
		249: DATATYPE.STRING,
		250: DATATYPE.STRING,
		251: DATATYPE.STRING,
		252: DATATYPE.STRING,
		253: DATATYPE.STRING,
		254: DATATYPE.STRING,
		255: DATATYPE.STRING,
	}

class MySQLError(Error):
	from MySQLdb.constants import ER, CR
	CRerr = [(v, k) for k, v in vars(CR).items() if not k.startswith('__')]
	ERerr = [(v, k) for k, v in vars(ER).items() if not k.startswith('__')]
	Errs = dict(CRerr + ERerr)

	def __init__(self, err):
		self.no = err[0]
		self.msg = err[1]
		self.code = self.Errs.get(self.no) or 'USER_UNKNOWN_ERROR'
	
	def __repr__(self):
		return "%s(%s, %s, %s)" % (self.__class__.__name__, self.no, self.code, self.msg)

DBError = MySQLError

if __name__ == '__main__':
	conn = Connection()
	conn.connect()
	c = conn.cursor()
	print c.__class__
	# c.description()
