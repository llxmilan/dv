import MySQLdb as db

class Connection(object):
	def connect(self,db_name,table_name,host_name,user_name,passwd_name):
		try:
			self.conn=db.connect(host=host_name,user=user_name,passwd=passwd_name,db=db_name,charset='utf8')
			self.cur=self.conn.cursor()
		except db.Error,e:
			print "Mysql Error %d:%s"%(e.args[0],e.args[1])

	def close(self):
		self.cur.close()
		self.conn.close()
