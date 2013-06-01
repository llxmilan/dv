<?php
/* @var $this FlowScheduleController */
/* @var $model FlowSchedule */

$this->breadcrumbs=array(
	'Flow Schedules'=>array('index'),
	$model->fs_id=>array('view','id'=>$model->fs_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FlowSchedule', 'url'=>array('index')),
	array('label'=>'Create FlowSchedule', 'url'=>array('create')),
	array('label'=>'View FlowSchedule', 'url'=>array('view', 'id'=>$model->fs_id)),
	array('label'=>'Manage FlowSchedule', 'url'=>array('admin')),
);
?>

<h1>Update FlowSchedule <?php echo $model->fs_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>