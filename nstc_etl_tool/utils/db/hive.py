#coding=utf-8

import os

from pyhive import connections
from pyhive import cursors
from base import Error

class HiveConnection(object):
    conf = {}
    rowfactory = tuple
    global_query_count = 0

    def __init__(self, conf = {}, rowfactory = tuple):
        self.conf = conf
        self.rowfactory = rowfactory
        self.connect()
        self.isclosed = False

    def connect(self):
        self.conn = connections.Connection(**self.conf)
        self.conn.open()

    def __del__(self):
        self.close()

    def commit(self):
        pass

    def cursor(self):
        if self.rowfactory is dict:
            cur = self.conn.cursor(cursorclass = cursors.DictCursor)
        elif self.rowfactory is tuple:
            cur = self.conn.cursor()
        else:
            raise TypeError, "Row Factory '%s' is Not Exsit."
        return cur

    def query(self, sql): 
        cursor = self.cursor()
        cursor.execute(sql)
i        self.__class__.global_query_count += 1
        return cursor

    execute = query

    def close(self):
        if not self.isclosed:
            self.conn.close()
            self.isclosed = True

Connection = HiveConnection

class HiveConnectionConextManager:
    def __init__(self, conf = {}):
        self.conn = Connection(conf)

    def __enter__(self):
        return self.conn

    def __exit__(self, *exc_info):
        self.conn.close()

connectdb = connecting = HiveConnectionConextManager

class HiveError(Error):
    Errs = {
            -1 : "THRIFT_ERROR",
            10 : "NO_SUCH_TABLE"
            }
    def __init__(self, err):
        self.no = err[0]
        self.msg = err[1]
        self.code = self.Errs.get(self.no) or 'USER_UNKNOWN_ERROR'
    def __repr__(self):
        return "%s(%s, %s, %s)" % (self.__class__.__name__, self.no, self.code, self.msg)

if __name__ == '__main__':
    pass
