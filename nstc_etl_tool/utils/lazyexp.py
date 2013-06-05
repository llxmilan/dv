#coding=utf-8

class lazyExp(object):
	def __init__(self, key, prefix = []):
		self.__expr = prefix + [key]

	def __getattr__(self, key):
		return lazyExp(key, self.__expr)

	def __getitem__(self, key):
		return lazyExp(key, self.__expr)

	def __str__(self):
		suffix = ["['%s']" % i if '.' in i else ".%s" % i
			for i in self.__expr[1:]]

		return self.__expr[0] + ''.join(suffix)

	def __repr__(self):
		return str(self)

	def __active__(self, space):
		for key in self.__expr:
			if hasattr(space, key):
				space = getattr(space, key)
			elif isinstance(space, dict) and key in space:
				space = space[key]
			else:
				return None
		return space

	def __mod__(self, space):
		return self.__active__(space)

def active(conf, space):
	if hasattr(conf, '__active__'):
		return conf.__active__(space)

	if isinstance(conf, dict):
		items = conf.iteritems()
	elif isinstance(conf, list):
		items = enumerate(conf)
	else:
		return conf

	for k, v in items:
		conf[k] = active(conf[k], space)
	return conf

if __name__ == "__main__":
	from pprint import pprint as pp

	Conf = lazyExp('conf')
	space = {
		'conf':{
			'hello' : {
				'world': "hate you"
			},
			'hate': {
				'you': "hello world"
			},
			"dot.com": {
				'youtube': {'a': 1, 'b.c': 42},
				'alist':[1,4,9]
			}
		}
	}
	a = Conf.hello.world
	b = Conf.hate.you
	c = Conf.non
	print a.__active__(space)
	print b.__active__(space)
	print c.__active__(space)
	print repr(a)

	d = {
		'oo' : a,
		'xx': [b,c],
		'uu': {
			'dd': a
		},
		'dd':1,
	}

	d = active(d, space)

	pp(d)

	e = Conf["dot.com"].youtube['b.c']
	print e
	print e.__active__(space)

	f = Conf["dot.com"]['alist']
	print f
	print f % space