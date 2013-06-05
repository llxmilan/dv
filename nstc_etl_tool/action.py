#encoding=utf-8
import sys
from mysql_handler.mysql import Mysql
from hive_handler.hive import Hive
from pprint import pprint,pformat

from utils.common import colorprint

_DEBUG=False

class Action(object):
	'''
	action类，执行类
	现有的action主要包括extract、preload、targetddl和exload
	extract 从sourcetable中进行数据抽取
	preload	load之前数据处理
	dbload	创建target数据表，将数据从临时文件读入targettable中
	exload 同源数据之间insert into select from
	'''
	
	def __init__(self,env):
		self.env=env.copy()
		self.source_metadata=self.env['META'][0]
		self.target_metadata=self.env['META'][1]
	
	#action对象执行前的操作
	def before_exec(self,action_name):
		if self.env['printinfo']==True:
			self.print_basicinfo(action_name)
		
	#action对象执行后的操作
	def after_exec(self,action_name):
		if self.env['printinfo']==True:
			self.print_execinfo(action_name)
		
	def extract(self):
		source_metadata={}
		self.type=self.source_metadata['type']
		self.before_exec("extract")

		if self.type=='mysql':
			self.my=Mysql(self.source_metadata,'extract')
			self.my.read_extractsql(self.env)
			self.info=self.my.query_execute(self.target_metadata['host'])
		elif self.type=='hive':
			self.my=Hive(self.source_metadata,'extract')
			self.my.read_extractsql(self.env)
			self.info=self.my.query_execute(self.target_metadata['host'])
		self.after_exec("extract")
	
	def targetddl(self):
		self.type=self.target_metadata['type']
		self.before_exec('targetddl')

		if self.type=='mysql':
			self.my=Mysql(self.target_metadata,'targetddl')
			self.my.read_targetddlsql(self.env)
			if self.my.create_sql!='':
				self.info=self.my.targetddl_execute()
		elif self.type=='hive':
			self.my=Hive(self.target_metadata,'targetddl')
			self.my.read_targetddlsql(self.env)
			self.info=self.my.targetddl_execute()
		self.after_exec("targetddl")	
		
	def dbload(self):
		target_metadata={}
		self.type=self.target_metadata['type']
		self.before_exec("dbload")
	
		if self.type=='mysql':
			self.my=Mysql(self.target_metadata,'dbload')
			self.my.read_dbloadsql(self.env)
			self.info=self.my.dbload_execute()
		elif self.type=='hive':
			self.my=Hive(self.target_metadata,'dbload')
			self.my.read_dbloadsql(self.env)
			self.info=self.my.dbload_execute()
		self.after_exec("dbload")		
	
	def preload(self):
		if _DEBUG==True:
			import pdb
			pdb.set_trace()
		
		target_metadata={}
		self.type=self.target_metadata['type']
		self.before_exec("preload")		

		if self.type=='mysql':
			self.my=Mysql(self.target_metadata,'preload')
			self.my.read_preloadsql(self.env)
			if self.my.preload_sql!='':
				self.info=self.my.preload_execute()
		elif self.type=='hive':
			self.my=Hive(self.target_metadata,'preload')
			self.my.read_preloadsql(self.env)
			if self.my.preload_sql!='':
				self.info=self.my.preload_execute()
		self.after_exec("preload")		
	
	def exload(self):
		'''
		source_metadata用来保存source端的元数据信息
		target_metadata用来保存target端的元数据信息
		
		'''
		self.type=self.source_metadata['type']

		self.before_exec("exload")
		
		if self.type=='mysql':
			self.my=Mysql(self.source_metadata,'exload')
			self.my.read_exloadsql(self.env)
			self.info=self.my.exload_execute()
		elif self.type=='hive':
			self.my=Hive(self.source_metadata,'exload')
			self.my.read_exloadsql(self.env)
			self.info=self.my.exload_execute()
		self.after_exec("exload")		
					
	#打印基本的信息
	def print_basicinfo(self,action_name):
		file = self.env['logfile']
		
		print "-"*80
		colorprint("Action=%s %s" % (action_name, "Type=%s" % self.type), color='cyan')
		colorprint("[Args]",color='yellow')
		colorprint('[Template]',color='yellow')
		
		file.write("-"*80+'\n')
		file.write("Action=%s %s\n" % (action_name, "Type=%s" % self.type))
                file.write("[Args]\n")
                file.write('[Template]\n')

		template_name=action_name+'_sql'
		print self.env[template_name]	

		file.write(self.env[template_name]+'\n')
	
	#打印执行时候的信息
	def print_execinfo(self,action_name):
		colorprint('[result]',color='yellow')
		result=action_name+' success'
		print result
		
		file = self.env['logfile']
		file.write(result+'\n')
