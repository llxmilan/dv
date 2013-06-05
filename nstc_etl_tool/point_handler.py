#encoding=utf-8
import sys
from metadata import getmetadata
from Cheetah.Template import Template

'''
基类PointHandler
派生类
	元数据处理派生类 ContextHandler
	sql语句处理派生类	CodeHandler
每个类都有一个make函数，根据point的信息得到
'''
class PointHandler(object):
	@staticmethod
	def make(self,point):
		return point.text

'''
PointHandler的派生类,元数据处理节点
根据point的节点名称sourceinfo和targetinfo得到相应的Context处理类
'''
class ContextHandler(PointHandler):
	@staticmethod
	def make(point):
		'''
		元数据保存类型metadata是字典
		sourcedb	targetdb
		sourcetable	targettable
		type
		'''
		aa=point.text.strip().replace('\r\n','\n')
		if point.name=='sourceinfo':
			bb=aa.strip('source={')
			cc=bb.rstrip('}')
		elif point.name=='targetinfo':
			bb=aa.strip("'target={'")
			cc=bb.rstrip('}')
		metadata={}
		dd=cc.split(',')
		ee=dd[0].split(':')
		ff=dd[1].split(':')
		
		if point.name=='sourceinfo':
			metadata['sourcedb']=ee[1]
			metadata['sourcetable']=ff[1]
		
		elif point.name=='targetinfo':
			metadata['targetdb']=ee[1]
			metadata['targettable']=ff[1]
		
		metadata=getmetadata('metadata.xml',metadata,point.name)
		return metadata

class CodeHandler(PointHandler):
	'''
	解析point的text属性得到point的value属性
	extract 使用Cheetah判断是否是reload
	preload 使用Cheetah判断是否是reload
	'''
	@staticmethod
	def make(point):
		aa=point.text.strip().replace('\r\n','\n')
		isReload=point.isReload
		if point.name=='extract':
			bb=''
			bb=Template(aa,searchList=[{'isReload':isReload}]).respond()
			return bb
		elif point.name=='preload':
			bb=''
			bb=Template(aa,searchList=[{'isReload':isReload}]).respond()
			return bb
		elif point.name=='targetddl':
			bb=''
			bb=Template(aa,searchList=[{'isReload':isReload}]).respond()
			return bb
		else:	
			return aa
