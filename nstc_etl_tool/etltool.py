#encoding=utf-8
import sys
import os
import action
from readdoc import ReadCollection

workdir = os.path.abspath(os.path.dirname(__file__))
sys.path.insert(0, os.path.join(workdir, '../'))

class Task(object):
	def __init__(self,settings):
		self.filename=settings['filename']
		self.settings=settings
		self.init_env()
	
	'''
	@staticmethod
	def init_settings(filename,settings={}):
		settings['filename']=filename
		return settings
	'''

	def init_env(self):
		settings=self.settings
		
		env={}
		env['filename']=filename
		env['printinfo']=settings.has_key('printinfo') or False
		env['isReload']=settings.has_key('isReload') or False	

		rd=ReadCollection(env)
		'''
		rd的metadata是存储元数据的，point是用来存储具体的内容
		env用来保存信息的字典
		actiontype用来保存action的种类		
		'''
		self.actiontype=[]
		metadata=rd.metadata
		env['META']=metadata
		'''
		根据分析流程文件得到主要的执行步骤
		将执行步骤相应的sql语句复制给env全局变量
		'''
		for p in rd.points:
			self.actiontype.append(p.name)
			if p.name=='extract':
				env['extract_sql']=p.value
			
			elif p.name=='targetddl':
				env['targetddl_sql']=p.value
			
			elif p.name=='exload':
				env['exload_sql']=p.value
			
			elif p.name=='preload':
				env['preload_sql']=p.value
			
			elif p.name=='dbload':
				env['dbload_sql']=p.value	
		'''
		新建一个log文件，用来记录执行的日志信息
		'''
		file_list=env['filename'].split('/')
		log_file='log/'+file_list[1]+'.log'
		print log_file
		self.logfile=open(log_file,'w')
		env['logfile']=self.logfile		


		self.env=env
		#print self.env
	
	'''
	执行流程
	普通流程
	同构	extract->preload->targetddl->dbload
	异构	preload->targetddl->exload
	增量更新使用isreload变量来进行控制
	mysql->mysql
	hive->mysql
	
	'''
	def run(self):
		at=action.Action(self.env)
		if 'extract' in self.actiontype:
			at.extract()
		if 'preload' in self.actiontype:
			at.preload()
		if 'targetddl' in self.actiontype:
			at.targetddl()
		if 'exload' in self.actiontype:
			at.exload()
		if 'dbload' in self.actiontype:
			at.dbload()
		

if __name__=='__main__':
	settings={}
	'''
	-f filename	执行的流程文件的名称
	-r		是否重新生成整个表单
	-p		是否打印执行过程
	'''
	for i in range(len(sys.argv)):
		if sys.argv[i]=='-r':
			settings['isReload']=True
		elif sys.argv[i]=='-f':
			filename=sys.argv[i+1]
			settings['filename']=filename
		elif sys.argv[i]=='-p':
			settings['printinfo']=True

	##print settings	
	task=Task(settings)
	task.run()

