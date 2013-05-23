<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . '首页';
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span10">
			<div class="row">
				<div class='span8'>
					<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    						'heading'=>'数据可视化!',
						'headingOptions'=>array('style'=>"margin-top:-20px"),
						'htmlOptions'=>array('style'=>"background-color:#85B5A2;height:90px"),
					)); ?>
    					<p>数据可视化主要旨在借助于图形化手段，清晰有效地传达与沟通信息.</p>
    					<p><?php $this->widget('bootstrap.widgets.TbButton', array(
        					'type'=>'primary',
        					'size'=>'large',
        					'label'=>'加入我们吧！',
        					'url'=>array('/site/contact')
    					)); ?></p>
					<?php $this->endWidget();?>
				</div>
				<div class='span2'>
				</div>
			</div>
			<div class='row'>
				<ul class="thumbnails">
					<li class="span4">
    						<a href="#" class="thumbnail"  data-title="twitter实时显示"><img src="../../images/twitter_1.jpg"/></a>
					</li>

					<li class="span4">
    						<a href="#" class="thumbnail"  data-title="小说标签可视化"><img src="../../images/Plot-lines.jpg"/></a>
					</li>

					<li class="span4">
    						<a href="#" class="thumbnail" rel="tooltip" data-title="能源与医疗可视化"><img src="../../images/VizInsight.png"></a>
					</li>

					<li class="span2">
    						<a href="#" class="thumbnail" rel="tooltip" data-title="追踪个人信息"><img src="../../images/bigdata_1.jpg"></a>
					</li>
					<li class="span2">
						<a href="#" class="thumbnail" rel="tooltip" data-title="Ayasdi公司可视化"><img src="../../images/Ayasdl.jpg"></a>
					</li>
			</div>
		</div>
		<div class='span2'>
			<div class="input-append">
				<i class="icon-search"></i>
				<input class="span7" id="appendedInputButton" type="text">
				<button class="btn" type="button">查找</button>
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
