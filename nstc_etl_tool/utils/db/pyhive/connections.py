#coding=utf-8

import os
import sys

sys.path.append(os.path.join(os.path.dirname(__file__), './thrift_libs'))

from hive_service import ThriftHive
from hive_service.ttypes import HiveServerException
from thrift import Thrift
from thrift.transport import TSocket
from thrift.transport import TTransport
from thrift.protocol import TBinaryProtocol

import cursors

class Connection(object):
    """Hive database Connection Object"""

    def __init__(self, *args, **kwargs):
        """
        Create a configuration of hive.  It is strongly recommende
        that you only use keyword parameters.

        server
        server where hiveserver run

        port
            integer, TCP/IP port to connect to
        """
        self.server = kwargs.pop('host', None)
        self.port = kwargs.pop('port', None)

        self.socket = TSocket.TSocket(self.server, self.port)
        self.transport = TTransport.TBufferedTransport(self.socket)
        self.protocol = TBinaryProtocol.TBinaryProtocol(self.transport)
        selif.client = ThriftHive.Client(self.protocol)

    def open(self):
        self.transport.open()

    def close(self):
        self.transport.close()

    def client(self):
        return self.client

    def cursor(self, cursorclass=None):
        """
        Create a cursor on which queries may be performed. The
        optional cursorclass parameter is used to create the
        Cursor. By default, self.cursorclass=cursors.Cursor
        is used.
        """
        return (cursorclass or cursors.Cursor)(self)

    def set(self, name, value):
        self.client.execute("SET %s = %s" % (name, value))

    def select_db(self, db):
        pass

