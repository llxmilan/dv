<?php
/* @var $this VideoinfoController */
/* @var $model videoinfo */

$this->breadcrumbs=array(
	'视频基本信息'=>array('index'),
	'管理',
);

$this->menu=array(
	array('label'=>'查看基本信息', 'url'=>array('index')),
	/*array('label'=>'新建', 'url'=>array('create')),*/

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#videoinfo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('高级查找','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'videoinfo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'video_id',
		'uploader',
		'age',
		'category',
		'length',
		'views',
		/*
		'rate',
		'ratings',
		'comments',
		'related_1',
		'related_2',
		'related_3',
		'related_4',
		'related_5',
		'related_6',
		'related_7',
		'related_8',
		'related_9',
		'related_10',
		'related_11',
		'related_12',
		'related_13',
		'related_14',
		'related_15',
		'related_16',
		'related_17',
		'related_18',
		'related_19',
		'related_20',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
