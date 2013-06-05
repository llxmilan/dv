#coding=utf-8

import re

try: 
    import simplejson as json
except ImportError: 
    import json


TYPES = {
    'boolean' : str,
    'string' : str,
    'bigint' : int,
    'float' : float,
    'double' : float,
    'int' : int,
    'smallint' : int,
    'tinyint' : int,
}

def isnull(value):
    return value is None or value == 'NULL' or value == 'null' or not value

def force_type(type, value):
    if type in TYPES:
        if isnull(value):
            return TYPES[type]()
        else:
            return TYPES[type](value)
    else:
        if type == 'json' or re.match('^array', type) != None:
            if isnull(value) or len(value) == 0:
                return None
            return json.loads(value)
        else:
            return value

class SchemaDefinition(object):
    def __init__(self, schema, example_row):
        self.schema = schema
        self.example_row = example_row.split('\t') if example_row else []
        self._column_names = [v.name for v in self.schema.fieldSchemas]
        self._column_type_map = dict((v.name, v.type) for v in self.schema.fieldSchemas)
        self._column_types = [v.type for v in self.schema.fieldSchemas]

        if len(self.example_row):
            assert len(self.column_types) == len(self.example_row)

    @property
    def column_names(self):
        return self._column_names

    @property
    def column_type_map(self):
        return self._column_type_map

    @property
    def column_types(self):
        return self._column_types

    def cast_row_to_dict(self, row):
        return dict(zip(self.column_names, [force_type(k, v) for k, v in zip(self.column_types, row.split('\t'))]))

    def cast_row_to_tuple(self, row):
        return tuple(force_type(k, v) for k, v in zip(self.column_types, row.split('\t')))
