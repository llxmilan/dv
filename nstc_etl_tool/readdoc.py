#coding=utf-8
import sys
import re
from point_handler import ContextHandler
from point_handler import CodeHandler

class Point(object):
	'''
	Point类
	解析流程文件，得到Point对象
		name用来存储节点名称
		text用来存储处理前的信息
		value用来存储处理后的信息
	'''	
	def __init__(self,name,text):
		self.name=name
		self.text=text
		self.value=None
		self.isReload=False

class ReadCollection(object):
	'''
	解析流程文件类
	根据正则表达式处理相应的流程文件
	nodes用来保存基本的信息
	'''
	#解析流程文件
	point_split=r'^##([\w.]+)##\s*'
	def __init__(self,env):
		self.env=env
		docname=env['filename']
		self.splitnode(docname)
		self.recallnode()

	#将各部分的内容进行解析，并存入到相应的节点中
	def splitnode(self,docname):
		delimiter=re.compile(self.point_split)
		body=''
		#nodes保存的是各个节点的信息，是以[((sourceinfo),(body)),((targetinfo),(body))]形式存储的
		self.nodes=[]
		firstpoint='##first##'
		for line in open(docname,'r'):
			pointdel=delimiter.findall(line)
			if pointdel:
				self.nodes.append((firstpoint,body))
				body=''
				#节点头部
				firstpoint=pointdel[0].lower()
			else:
				#节点body
				body+=line
		self.nodes.append((firstpoint,body))
	
	def recallnode(self):
		#用来保存point的序列
		self.points=[]

		#用来保存元数据的序列
		self.metadata=[]

		for i in range(len(self.nodes)):
			point=Point(self.nodes[i][0],self.nodes[i][1])
			point.isReload=self.env['isReload']
			#根据节点头部，定义point类型的数据，point是用来存储具体的内容的类
			#sourceinfo和targetinfo是用来保存元数据的
			
			if point.name=='sourceinfo':
				self.metadata.append(ContextHandler.make(point))
			elif point.name=='targetinfo':
				self.metadata.append(ContextHandler.make(point))
			
			#根据extract、targetddl和dbload节点头部，得到相应的point的value值
			elif point.name=='extract':
				point.value=CodeHandler.make(point)
				self.points.append(point)
			elif point.name=='targetddl':
				point.value=CodeHandler.make(point)
				self.points.append(point)
			elif point.name=='exload':
				point.value=CodeHandler.make(point)
				self.points.append(point)
			elif point.name=='preload':
				point.value=CodeHandler.make(point)
				self.points.append(point)
			elif point.name=='dbload':
				point.value=CodeHandler.make(point)
				self.points.append(point)


	def printinfo(self):
		'''
		打印基本信息
		'''
		for i in range(len(self.nodes)):
			print self.nodes[i]
		for i in range(len(self.metadata)):
			print self.metadata[i]
		for i in range(len(self.points)):
			print self.points[i].name
			print self.points[i].value


if __name__=='__main__':
	rc=ReadCollection(sys.argv[1])
