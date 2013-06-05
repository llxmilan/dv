#coding=utf-8
import os
import mysql_connection
import sys
reload(sys)
sys.setdefaultencoding('utf-8')
import cPickle
import MySQLdb as db


class Mysql(object):
	'''
	初始化连接参数，并连接数据库
	mysql使用'load data replace into table'来实现增量更新
	增量更新不需要重新生成targettable，只需要替换原来表中的重复的旧数据即可
	'''
	def __init__(self,metadata,action_name):
		if action_name=='extract' or action_name=='exload':
			self.db=metadata['sourcedb']
			self.table=metadata['sourcetable']
			self.host=metadata['host']
			self.user=metadata['user']
			self.passwd=metadata['passwd']
	
		elif action_name=='dbload' or action_name=='preload' or action_name=='targetddl':
			self.db=metadata['targetdb']
			self.table=metadata['targettable']
			self.host=metadata['host']
			self.user=metadata['user']
			self.passwd=metadata['passwd']
					
		self.con=mysql_connection.Connection()
		self.con.connect(self.db,self.table,self.host,self.user,self.passwd)
	'''
	执行相应的ETL操作
	'''
	def query_execute(self,target_host):
		self.con.cur.execute(self.query_sql)
		self.results= self.con.cur.fetchall()
		
		self.writetofile(target_host)
		os.system(self.exec_scp)
	
	def preload_execute(self):
		self.con.cur.execute(self.preload_sql)
	
	def dbload_execute(self):
		try:
			self.con.cur.execute(self.dbload_sql)
		except db.Error,e:
			print "Mysql Error %d:%s"%(e.args[0],e.args[1])

	def targetddl_execute(self):
		try:
			self.con.cur.execute(self.create_sql)
		except db.Error,e:
			print "Mysql Error %d:%s"%(e.args[0],e.args[1])
	
	def exload_execute(self):
		self.con.cur.execute(self.exload_sql)			
	'''
	读取相应的sql语句
	'''
	def read_extractsql(self,env):
		self.query_sql=env['extract_sql']
	
	def read_preloadsql(self,env):
		self.preload_sql=env['preload_sql']

	def read_exloadsql(self,env):
		self.exload_sql=env['exload_sql']

	def read_targetddlsql(self,env):
		self.create_sql=env['targetddl_sql']

	def read_dbloadsql(self,env):
		self.dbload_sql=env['dbload_sql']
	'''
	将extract出的数据写入targettable中
	'''
	def writetofile(self,target_host):
		self.temp_file=file('/tmp/temp.txt','w')
		self.exec_scp="scp -q /tmp/temp.txt root@"+target_host+":/tmp/"
		
		for r in self.results:
			sum=''
			for i in range(len(r)):
				sum=sum+str(r[i])+','
			self.temp_file.write(sum[:-1]+'\n')
		self.temp_file.close()
	
	def __del__(self):
		self.con.close()

if __name__=='__main__':
	ms=Mysql()
	ms.readsql()
	ms.load_execute()
