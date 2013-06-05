import sys

from schema_definition import SchemaDefinition

def get_first_item(some_list):
    if some_list:
        return some_list[0]

class BaseCursor(object):

    """A base for Cursor classes. Useful attributes:
    """
    
    def __init__(self, connection):
        self.connection = connection
        self.client = connection.client

    def __del__(self):
        # destructor work?
        self.close()

    def close(self):
        if not self.connection:
            return
        self.client = None
        self.connection = None

    def execute(self, query):
        self._execute(query)

    def _execute(self, query):
        self.client.execute(query)

    def fetchall(self):
        rows = self.client.fetchAll()
        schema = SchemaDefinition(self.client.getSchema(), get_first_item(rows))
        return self._decorate_rows(rows, schema)

    fetch = fetchall

    def fetchone(self):
        rows = self.client.fetchOne()
        schema = SchemaDefinition(self.client.getSchema(), rows)
        return get_first_item(self._decorate_rows([rows], schema))

    def fetch_in_batch(self, batch_size=1000):
        schema = None
        while True:
            next_batch = self.client.fetchN(batch_size)
            if not next_batch:
                break
            if not schema:
                schema = SchemaDefinition(self.client.getSchema(), get_first_item(next_batch))
            yield self._decorate_rows(next_batch, schema)

    def _decorate_rows(self, rows, schema):
        return rows

    def __iter__(self):
        return iter(self.fetchone, None)

"""
CursorMixIn options to display rows
"""

class CursorTupleRowsMixIn(object):

    """This is a MixIn class that causes all rows to be returned
    as tuples, which is the standard form required by DB API."""

    def _decorate_rows(self, rows, schema):
        return [schema.cast_row_to_tuple(r) for r in rows]

class CursorDictRowsMixIn(object):
    """This is a MixIn class that causes all rows to be returned
    as dictionaries.  This is a non-standard feature."""

    def _decorate_rows(self, rows, schema):
        return [schema.cast_row_to_dict(r) for r in rows]


class Cursor(CursorTupleRowsMixIn, BaseCursor):

    """This is the standard Cursor class that returns rows as tuples in the client."""

class DictCursor(CursorDictRowsMixIn, BaseCursor):

    """This is a Cursor class that returns rows as dictionaries in the client."""
    
