<?php
/* @var $this FlowInfoController */
/* @var $model FlowInfo */

$this->breadcrumbs=array(
	'Flow Infos'=>array('index'),
	$model->flow_id,
);

$this->menu=array(
	array('label'=>'List FlowInfo', 'url'=>array('index')),
	array('label'=>'Create FlowInfo', 'url'=>array('create')),
	array('label'=>'Update FlowInfo', 'url'=>array('update', 'id'=>$model->flow_id)),
	array('label'=>'Delete FlowInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->flow_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FlowInfo', 'url'=>array('admin')),
);
?>

<h1>View FlowInfo #<?php echo $model->flow_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'flow_id',
		'flow_name',
		'flow_creator',
		'flow_position',
	),
)); ?>
