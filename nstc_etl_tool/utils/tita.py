#coding=utf-8
import time

class Timer(object):
    """
    Ti Ta Timer~
    用以同时记录多项时间点
    
    ti 计时开始
    ta 计时结束
    
    具体请看下面例子
    """
    
    def __init__(self):
        self.moments = {}
        self.remark = {}
        
    def ti(self, *points):
        now = time.time()
        for p in points:
            self.moments[p] = now
            self.remark.pop(p, None)
        
        return self
        
    def ta(self, *points):
        now = time.time()
        for p in points:
            self.remark[p] = now - self.moments[p]
            
        return self
        
    def status(self):
        pass
    
    def getremark(self, point):
        return self.remark.get(point, None)
    
    def getremarks(self):
        return self.remark.copy()

class timing(object):

    def __init__(self, title = ''):
        self.title = title
        self.timer = Timer()

    def __enter__(self):
        self.timer.ti(self.title)

    def __exit__(self, *exc_info):
        self.timer.ta(self.title)
        print "[%s] cost: %s seconds" % (self.title, self.timer.getremark(self.title))

if __name__ == '__main__':
    timer = Timer()
    
    timer.ti('racer1', 'racer2', 'racer3')
    
    time.sleep(1.1)
    
    timer.ta('racer2')
    
    time.sleep(0.5)
    
    timer.ta('racer1').ti('racer4')
    
    time.sleep(0.8)
    
    timer.ta('racer3', 'racer4')
    
    print timer.getremarks()