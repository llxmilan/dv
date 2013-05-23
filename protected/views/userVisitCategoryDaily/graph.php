<?php
/* @var $this UserVisitCategoryDailyController */
/* @var $model UserVisitCategoryDaily */

$this->breadcrumbs=array(
	'数据表'=>array('/site/graph'),
	'数据可视化',
);

$this->menu=array(
	/*
	array('label'=>'Create UserVisitCategoryDaily', 'url'=>array('create')),
	*/
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-visit-category-daily-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-visit-category-daily-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		array(
			'header'=>'名称',
			'name'=>'category_id',
		),
		array(
			'header'=>'名称',
			'name'=>'category_name',
		),
		array(
			'header'=>'视频数目',
			'name'=>'category_video_num',
		),
		array(
			'header'=>'点击数目',
			'name'=>'category_views_num',
		),
		array(
			'header'=>'评分',
			'name'=>'category_rate_avg',
		),
		array(
			'header'=>'评论数目',
			'name'=>'category_comments_num',
		),
		/*
		array(
			'class'=>'CButtonColumn',
		),
		*/
	)
)); ?>


<?php
	Yii::app()->ClientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/src/models/pieChart.js',
		CClientScript::POS_END
		);

	Yii::app()->ClientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/src/models/pie.js',
		CClientScript::POS_END
		);
	
	Yii::app()->ClientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/src/models/legend.js',
		CClientScript::POS_END
		);

	Yii::app()->ClientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/lib/d3.v2.js',
		CClientScript::POS_END
		);
	
	Yii::app()->ClientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/nv.d3.js',
		CClientScript::POS_END
		);
	
	Yii::app()->ClientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/src/utils.js',
		CClientScript::POS_END
		);

	Yii::app()->ClientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/src/nv.d3.css',
		CClientScript::POS_END
		);
?>
<script type="text/javascript">
	alter("hello world");
</script>
<script type="text/javascript">
		var testdata = [{key:"one",y:5},{key:"two",y:2}];
		nv.addGraph(function(){
			var width=500,height=500;
			var chart = nv.models.pieChart().x(function(d) { return d.key }).y(function(d) { return d.y }).values(function(d) { return d }).color(d3.scale.category10().range()).width(width).height(height);
		
			d3.select("#test1").datum([testdata]).transition().duration(1200).attr('width', width).attr('height', height).call(chart);
			chart.dispatch.on("stateChange", function(e) { nv.log("New State:", JSON.stringify(e)); });    
			return chart;
		});
		
		nv.addGraph(function() {
			var width = 50,height = 500;			
			var chart = nv.models.pieChart().x(function(d) { return d.key }).values(function(d) { return d }).color(d3.scale.category10().range()).width(width).height(height).donut(true);
			chart.pie.startAngle(function(d) { return d.startAngle/2 -Math.PI/2 }).endAngle(function(d) { return d.endAngle/2 -Math.PI/2 });                                 
			d3.select("#test2").datum([testdata]).transition().duration(1200).attr('width', width).attr('height', height).call(chart);
			return chart;
		});
</script>
