<style type="text/css">
  .product-box a{ text-decoration:none; color:orange;}
  .product-box a:hover{ text-decoration:none; color:red;}
</style>

<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . '首页';
?>
<?php
	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/wrapbootstrap.css');
	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/flexslider.css');                                                                                   
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery.scrolltotop.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery-1.7.2.min.js');	
?>
<div class='container'>
	<div class="row">
			<div class='span7'>
				<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    					'heading'=>'数据可视化!',
					'headingOptions'=>array('style'=>"margin-top:-20px"),
					'htmlOptions'=>array('style'=>"background-color:#85B5A2"),
				)); ?>
    				<p>数据可视化主要旨在借助于图形化手段，清晰有效地传达与沟通信息.</p>
    			<!--p><?php $this->widget('bootstrap.widgets.TbButton', array(
        			'type'=>'primary',
        			'size'=>'large',
        			'label'=>'加入我们吧！',
        			'url'=>array('/site/contact')
    			)); ?></p-->
				<?php $this->endWidget();?>
			</div>
			<div class='span5'>
				<a><img src='images/Beautiful data.jpg' alt=''></a>
			</div>
	</div>
	<div class='row'>
		<h4 class="title">
			<div class="span1" align='center'>
				最新<strong>案例</strong>
			</div>
			<div class='span10' style='margin-top:5px'>                                                                                                                                                        	    <a><img src='images/line.jpg' /></a>                                                                                                             
                        </div>  
			<div class="span1" style=''>
				<a class="left button" href="#myCarousel0" data-slide="prev"><i class='icon-chevron-left' style='margin-top:3px;margin-left:3px'></i></a>
				<a class="right button" style='margin-right:20px' href="#myCarousel0" data-slide="next"><i class='icon-chevron-right' style='margin-right:3px;margin-top:3px'></i></a>
			</div>
		</h4>
	</div>
	<div id="myCarousel0" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="../images/twitter.jpg" alt="" /></a></p>
														<a class="title">实时数据可视化</a><br/>
														<a class="category">Twitter</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="../images/VizInsight.png" alt="" /></a></p>
														<a href="product_detail.html" class="title">川流城市</a><br/>
														<a href="products.html" class="category">Interactive Things@Geneva</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="../images/Treemaps.png" alt="" /></a></p>
														<a  class="title">TreeMap</a><br/>
														<a href="products.html" class="category">d3.js</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="../images/biaoqianyun.png" alt="" /></a></p>
														<a href="product_detail.html" class="title">标签云</a><br/>
														<a href="products.html" class="category">Many Eyes@IBM</a>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="images/Winning-Lotto-Numbers.png" alt="" /></a></p>
														<a href="product_detail.html" class="title">乐透号码可视化</a><br/>
														<a href="products.html" class="category">Bonoloto Primitiva@Spain</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="images/history.png" alt="" /></a></p>
														<a href="product_detail.html" class="title">历史事件轴</a><br/>
														<a href="products.html" class="category">BBC@UK</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="images/facebook.png" alt="" /></a></p>
														<a href="product_detail.html" class="title">全球社交关系图</a><br/>
														<a href="products.html" class="category">FaceBook@USA</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="images/trademap.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">中国实时交易地图</a><br/>
														<a href="products.html" class="category">alibaba@china</a>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>
	</div>
	<div class='row'>
                <h4 class="title">
                        <div class="span1" align='center'>
                                最新<strong>新闻</strong>                                                                                                                                             
                        </div>                                                                                                                                                                        
                        <div class='span10' style='margin-top:5px'>                                                                                                                                                          
                               <a><img src='images/line.jpg' /></a>                                                                                                             
                        </div>                                                                                                                                                                        
                        <div class="span1" style=''>                                                                                                                                                  
                                <a class="left button" href="#myCarousel1" data-slide="prev"><i class='icon-chevron-left' style='margin-top:3px;margin-left:3px'></i></a>                              
                                <a class="right button" style='margin-right:20px' href="#myCarousel1" data-slide="next"><i class='icon-chevron-right' style='margin-right:3px;margin-top:3px'></i></a> 
                        </div>                                                                                                                                                                        
                </h4>                                                                                                                                                                                 
        </div>
	<div id="myCarousel1" class="myCarousel carousel slide">
                                                                        <div class="carousel-inner">
                                                                                <div class="active item">
                                                                                        <ul class="thumbnails">                                                                                        
                                                                                                <li class="span3">
                                                                                                        <div class="product-box">
                                                                                                                <span class="sale_tag"></span>
                                                                                                                <p><a href="product_detail.html"><img src="../images/peking.png" alt="" /></a></p>
                                                                                                                <a class="title">可视化学术报告</a><br/>
                                                                                                                <a class="category">北京大学</a>
                                                                                                        </div>
                                                                                                </li>
                                                                                                <li class="span3">
                                                                                                        <div class="product-box">
                                                                                                                <span class="sale_tag"></span>
                                                                                                                <p><a href="product_detail.html"><img src="../images/luyou.png" alt="" /></a></p>
                                                                                                                <a href="product_detail.html" class="title">去哪儿旅游安全</a><br/>
                                                                                                                <a href="products.html" class="category">CBC NewS@Canada</a>
                                                                                                        </div>
                                                                                                </li>
                                                                                                <li class="span3">
                                                                                                        <div class="product-box">
                                                                                                                <p><a href="product_detail.html"><img src="../images/ditie.png" alt="" /></a></p>
                                                                                                                <a  class="title">地铁图设计</a><br/>
                                                                                                                <a href="products.html" class="category">如何高效快速的绘制地铁图</a>
                                                                                                        </div>
                                                                                                </li>
                                                                                                <li class="span3">
                                                                                                        <div class="product-box">
                                                                                                                <p><a href="product_detail.html"><img src="../images/youtube.png" alt="" /></a></p>
                                                                                                                <a href="product_detail.html" class="title">美国各个地区热门视频分布</a><br/>
                                                                                                                <a href="products.html" class="category">Youtube@USA</a>
                                                                                                        </div>
                                                                                                </li>
                                                                                        </ul>
                                                                                </div>
										 <div class="item">
                                                                                        <ul class="thumbnails">
                                                                                                <li class="span3">
                                                                                                        <div class="product-box">
                                                                                                                <p><a href="product_detail.html"><img src="images/wuqu.png" alt="" /></a></p>
                                                                                                                <a href="product_detail.html" class="title">关于可视化的五个误区</a><br/>
                                                                                                                <a href="products.html" class="category">Flowing Data</a>
                                                                                                        </div>
                                                                                                </li>
                                                                                                <li class="span3">
                                                                                                        <div class="product-box">
                                                                                                                <p><a href="product_detail.html"><img src="images/zhouqi.png" alt="" /></a></p>
                                                                                                                <a href="product_detail.html" class="title">周期数据可视化</a><br/>
                                                                                                                <a href="products.html" class="category">螺旋线还是堆积条形图？</a>
                                                                                                        </div>
                                                                                                </li>
                                                                                                <li class="span3">
                                                                                                        <div class="product-box">
                                                                                                                <p><a href="product_detail.html"><img src="images/qubie.jpg" alt="" /></a></p>
                                                                                                                <a href="product_detail.html" class="title">信息图与可视化的区别</a><br/>
                                                                                                                <a href="products.html" class="category">eagereyes.com</a>
                                                                                                        </div>
                                                                                                </li>
                                                                                                <li class="span3">
                                                                                                        <div class="product-box">
                                                                                                                <p><a href="product_detail.html"><img src="images/space_fence.jpg" alt="" /></a></p>
                                                                                                                <a href="product_detail.html" class="title">用信息可视化展示太空监控</a><br/>
                                                                                                                <a href="products.html" class="category">space Fence@USA</a>
                                                                                                        </div>
                                                                                                </li>                                                                                                  
                                                                                        </ul>
                                                                                </div>
                                                                        </div>
	</div>                    
</div>
<?php
/*
$this->widget('bootstrap.widgets.TbThumbnails', array(
	'dataProvider'=>$listDataProvider,
	'template'=>"{items}\n{pager}",
	'itemView'=>'_thumb',
));
*/
?>
<!--
<li class="span2">
    <a href="#" class="thumbnail" rel="tooltip" data-title="twitter实时数据">
	<img src="../../images/twitter_1.jpg" alt="" height="25%" width="95%">
    </a>
</li>

<li class="span2">
    <a href="#" class="thumbnail" rel="tooltip" data-title="小说标签可视化">
        <img src="../../images/Plot-lines.jpg" alt="" height="25%" width="90%">
    </a>
</li>

<li class="span2">
    <a href="#" class="thumbnail" rel="tooltip" data-title="能源与医疗可视化">
        <img src="../../images/VizInsight.png" alt="" height="25%" width="100%">
    </a>
</li>

                                                                                                                                                                                                      
<li class="span2">                                                                                                                                                                                    
    <a href="#" class="thumbnail" rel="tooltip" data-title="追踪个人信息">                                                                                                                        
        <img src="../../images/bigdata_1.jpg" alt="" height="25%" width="90%">
    </a>                                                                                                                                                                                              
</li>

                                                                                                                                                                                                      
<li class="span2">                                                                                                                                                                                    
    <a href="#" class="thumbnail" rel="tooltip" data-title="Ayasdi公司可视化">                                                                                                                        
        <img src="../../images/Ayasdl.jpg" alt="" height="100%" width="70%">                                                                                                                      
    </a>                                                                                                                                                                                              
</li>
-->
