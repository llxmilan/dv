<?php
/* @var $this FlowScheduleController */
/* @var $model FlowSchedule */

$this->breadcrumbs=array(
	'Flow Schedules'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FlowSchedule', 'url'=>array('index')),
	array('label'=>'Create FlowSchedule', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#flow-schedule-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Flow Schedules</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'flow-schedule-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'fs_id',
		'fs_name',
		'fs_type',
		'fs_reload',
		'fs_delta',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
