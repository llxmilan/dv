#encoding=utf-8
import sys
from xml.etree import ElementTree as ET

def getmetadata(metadata_name,metadata,db_name):
	'''
	根据metadata的targetdb得到端的其他信息
	例如 type，host，port等
	'''
	if db_name=='sourceinfo':
		name=metadata['sourcedb']
	else:
		name=metadata['targetdb']

	db_temp=ET.parse(metadata_name)
	db=db_temp.findall(name)
	for onedb in db:
		for child in onedb.getchildren():
			metadata[child.tag]=child.text
			#print child.tag+':'+child.text
	return metadata

if __name__=='__main__':
	metadata={}
	metadata['targetdb']='bmsdb'
	getmetadata('metadata.xml',metadata,'dd')
