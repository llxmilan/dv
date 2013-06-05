import os
import sys

sys.path.append('/root/etltools/nstc_etl_tool/hive_handler/py')

from hive_service import ThriftHive
from hive_service.ttypes import HiveServerException
from thrift import Thrift
from thrift.transport import TSocket
from thrift.transport import TTransport
from thrift.protocol import TBinaryProtocol

class Connection(object):
	def __init__(self,host_name,host_port):
		try:
			pt=int(host_port)
			self.socket = TSocket.TSocket(host_name, pt)
			self.transport = TTransport.TBufferedTransport(self.socket)
			self.protocol = TBinaryProtocol.TBinaryProtocol(self.transport)
			self.client = ThriftHive.Client(self.protocol)
		except Thrift.TException, tx:
			result=tx.message
			#print '%s' % (tx.message)

	def open(self):
		self.transport.open()

	def close(self):
		self.transport.close()

