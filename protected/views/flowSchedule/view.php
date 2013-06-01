<?php
/* @var $this FlowScheduleController */
/* @var $model FlowSchedule */

$this->breadcrumbs=array(
	'Flow Schedules'=>array('index'),
	$model->fs_id,
);

$this->menu=array(
	array('label'=>'List FlowSchedule', 'url'=>array('index')),
	array('label'=>'Create FlowSchedule', 'url'=>array('create')),
	array('label'=>'Update FlowSchedule', 'url'=>array('update', 'id'=>$model->fs_id)),
	array('label'=>'Delete FlowSchedule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fs_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FlowSchedule', 'url'=>array('admin')),
);
?>

<h1>View FlowSchedule #<?php echo $model->fs_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fs_id',
		'fs_name',
		'fs_type',
		'fs_reload',
		'fs_delta',
	),
)); ?>
