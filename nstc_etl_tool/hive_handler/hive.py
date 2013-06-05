#encoding=utf-8
import os
import sys
import hive_connection
reload(sys)
sys.setdefaultencoding('utf-8')

class Hive(object):
	def __init__(self,metadata,action_name):
		self.connect(metadata,action_name)

	def connect(self,metadata,action_name):
		if action_name=='extract' or action_name=='exload':                                                        
			self.db=metadata['sourcedb']                                                   
			self.table=metadata['sourcetable']                                             
			self.host=metadata['host']
			self.port=metadata['port']                                                     
                                                                                                  
		elif action_name=='dbload' or action_name=='preload' or action_name=='targetddl':                                                       
			self.db=metadata['targetdb']                                                   
			self.table=metadata['targettable']                                             
			self.host=metadata['host']
			self.port=metadata['port']                                                     

		self.conn=hive_connection.Connection(self.host,self.port)
		self.conn.open()
		self.conn.client.execute("use "+self.db)
	
	def __del__(self):
		self.conn.close()
	
	def query_execute(self,target_host):
		self.conn.client.execute(self.query_sql)
		self.results= self.conn.client.fetchAll()
		self.writetofile(target_host)
		os.system(self.exec_scp)
	
	def preload_execute(self):
		self.conn.client.execute(self.preload_sql)	

	def dbload_execute(self):
		self.conn.client.execute(self.insert_sql)	
	
	def exload_execute(self):
		self.conn.client.execute(self.exload_sql)
	
	def targetddl_execute(self):
		self.conn.client.execute(self.create_sql)
	'''
	读取sql
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
		self.insert_sql=env['dbload_sql']
		
	def writetofile(self,target_host):
		self.temp_file=file('/tmp/temp.txt','w')
		self.exec_scp="scp -q /tmp/temp.txt root@"+target_host+":/tmp/"	
		
		for r in self.results:
			sum=str(r).replace('\t',',')
			self.temp_file.write(sum+'\n')
		self.temp_file.close()

if __name__=='__main__':
	hc=HiveConnection()
	hc.hive_exec(sql)
