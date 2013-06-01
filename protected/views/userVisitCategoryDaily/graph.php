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
/*
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
*/
?>
<?php
	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/novus/src/nv.d3.css');	
?>

<style>
body {
  overflow-y:scroll;
}

text {
  font: 12px sans-serif;
}

.mypiechart {
  width: 500px;
  border: 2px;
}

.discreteBarchart {
  height:500px;
  min-width:100px;
  min-height:100px;
}
</style>
<div class='row'>
	<div class='span10'>
		<h4>视频数目表</h4>
		<div class='span8 offset2'>
			<svg id="test1" class="mypiechart"></svg>
		</div>
	</div>
</div>
<div class='row'>
	<div class='span10'>
		<h4>视频评分表</h4>
		<svg id='test2' class="discreteBarchart"></svg>
	</div>
</div>
<?php
	//$dataProvider=new CActiveDataProvider();
	$dataProvider=$model->search();
	$models=$dataProvider->getData();
	for($i=0;$i<count($models);$i++)
	{
		$array_video_name[$i]=$models[$i]->category_name;
		$array_video_num[$i]=$models[$i]->category_video_num;
		$array_video_rate[$i]=$models[$i]->category_rate_avg;
	}
	
	//$video_list=json_encode($array_video);
	$array_video_name_list='["' . implode('","',$array_video_name) . '"]';
	$array_video_num_list='["' . implode('","',$array_video_num) . '"]';
	$array_video_rate_list='["' . implode('","',$array_video_rate) . '"]';
	/*
	while($video = each($array_video))
	{
		echo $video['key'];
		echo $video['value'];
	}
	*/
?>
<div class='row'>
<div class='span8 offset1'>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-visit-category-daily-grid',
	'dataProvider'=>$dataProvider,
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
</div>
</div>
<?php
	Yii::app()->clientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/src/models/pieChart.js'
		);

	Yii::app()->clientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/src/models/pie.js'
		);
	
	Yii::app()->clientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/src/models/legend.js'
		);

	Yii::app()->clientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/lib/d3.v2.js'
		);
	
	Yii::app()->clientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/nv.d3.js'
		);
	
	Yii::app()->clientScript->registerScriptFile(
		Yii::app()->baseUrl . '/protected/extensions/novus/src/utils.js'
		);
	
	//discretebar
	Yii::app()->clientScript->registerScriptFile(
                Yii::app()->baseUrl . '/protected/extensions/novus/src/tooltip.js'
                );

	Yii::app()->clientScript->registerScriptFile(
                Yii::app()->baseUrl . '/protected/extensions/novus/models/axis.js'
                );
	Yii::app()->clientScript->registerScriptFile(
                Yii::app()->baseUrl . '/protected/extensions/novus/models/discreteBar.js'
                );
	Yii::app()->clientScript->registerScriptFile(
                Yii::app()->baseUrl . '/protected/extensions/novus/models/discreteBarChart.js'
                );


?>
<script>
      /*
      return [
      { 
        "label": "One",
        "value" : 29.765957771107
      } , 
      { 
        "label": "Two",
        "value" : 0
      } , 
      { 
        "label": "Three",
        "value" : 32.807804682612
      } , 
      { 
        "label": "Four",
        "value" : 196.45946739256
      } , 
      { 
        "label": "Five",
        "value" : 0.19434030906893
      } , 
      { 
        "label": "Six",
        "value" : 98.079782601442
      } , 
      { 
        "label": "Seven",
        "value" : 13.925743130903
      } , 
      { 
        "label": "Eight",
        "value" : 5.1387322875705
      }
    ];
	
	nv.addGraph(function() {
  	var chart = nv.models.pieChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      .showLabels(true);

    	d3.select("#chart svg")
        .datum(data)
      .transition().duration(1200)
        .call(chart);

  	return chart;
	});
	return [
      { 
        "label": "One",
        "value" : 29.765957771107                                                                                                                                                                     
      } ,                                                                                                                                                                                             
      {                                                                                                                                                                                               
        "label": "Two",                                                                                                                                                                               
        "value" : 0                                                                                                                                                                                   
      } ,                                                                                                                                                                                             
      {                                                                                                                                                                                               
        "label": "Three",                                                                                                                                                                             
        "value" : 32.807804682612                                                                                                                                                                     
      } ,                                                                                                                                                                                             
      {                                                                                                                                                                                               
        "label": "Four",                                                                                                                                                                              
        "value" : 196.45946739256                                                                                                                                                                     
      } ,                                                                                                                                                                                             
      {                                                                                                                                                                                               
        "label": "Five",                                                                                                                                                                              
        "value" : 0.19434030906893                                                                                                                                                                    
      } ,                                                                                                                                                                                             
      {                                                                                                                                                                                               
        "label": "Six",                                                                                                                                                                               
        "value" : 98.079782601442                                                                                                                                                                     
      } ,                                                                                                                                                                                             
      {                                                                                                                                                                                               
        "label": "Seven",                                                                                                                                                                             
        "value" : 13.925743130903                                                                                                                                                                     
      } ,                                                                                                                                                                                             
      {                                                                                                                                                                                               
        "label": "Eight",                                                                                                                                                                             
        "value" : 5.1387322875705                                                                                                                                                                     
      }                                                                                                                                                                                               
    ];  
	*/                                         
		//var testdata = [{key:"UMA",y:509},{key:"Comedy",y:10742},{key:'Film&Animation',y:6840}];
		var array_video=new Array();
		var array_video_name=<?php echo $array_video_name_list ?>;
		var array_video_num=<?php echo $array_video_num_list ?>;
		var array_video_rate=<?php echo $array_video_rate_list ?>;

		var testdata=new Array();
		var BarchartTestdata=new Array();
		for(var i=0;i<array_video_name.length;i++)
		{
			var name=array_video_name[i];
			var num=array_video_num[i];
			var rate=array_video_rate[i];
			var temp={key:name,y:num};
			var temp_rate={key:name,y:rate};
			
			testdata.push(temp);
			BarchartTestdata.push(temp_rate);

		}
		nv.addGraph(function(){
			var width=500,height=500;
			var chart = nv.models.pieChart().x(function(d) { return d.key }).y(function(d) { return d.y }).values(function(d) { return d }).color(d3.scale.category10().range()).width(width).height(height);
		
			d3.select("#test1").datum([testdata]).transition().duration(1200).attr('width', width).attr('height', height).call(chart);
			chart.dispatch.on("stateChange", function(e) { nv.log("New State:", JSON.stringify(e)); });    
			return chart;
		});

var historicalBarChart = [ 
  {
    key: "Cumulative Return",
    values: BarchartTestdata
  }
];
//historicalBarChart
nv.addGraph(function() {  
  var chart = nv.models.discreteBarChart()
      .x(function(d) { return d.key })
      .y(function(d) { return d.y })
      .staggerLabels(true)
      //.staggerLabels(historicalBarChart[0].values.length > 8)
      .tooltips(false)
      .showValues(true)

  d3.select('#test2')
      .datum(historicalBarChart)
    .transition().duration(500)
      .call(chart);

  nv.utils.windowResize(chart.update);

  return chart;
});

		
		/*		
		nv.addGraph(function() {
			var width = 50,height = 500;			
			var chart = nv.models.pieChart().x(function(d) { return d.key }).values(function(d) { return d }).color(d3.scale.category10().range()).width(width).height(height).donut(true);
			chart.pie.startAngle(function(d) { return d.startAngle/2-Math.PI/2 }).endAngle(function(d) { return d.endAngle/2 -Math.PI/2 });                                 
			d3.select("#test2").datum([testdata]).transition().duration(1200).attr('width', width).attr('height', height).call(chart);
			return chart;
		});
		*/
</script>
