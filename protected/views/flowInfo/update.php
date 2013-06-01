<?php
/* @var $this FlowInfoController */
/* @var $model FlowInfo */

$this->breadcrumbs=array(
	'Flow Infos'=>array('index'),
	$model->flow_id=>array('view','id'=>$model->flow_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FlowInfo', 'url'=>array('index')),
	array('label'=>'Create FlowInfo', 'url'=>array('create')),
	array('label'=>'View FlowInfo', 'url'=>array('view', 'id'=>$model->flow_id)),
	array('label'=>'Manage FlowInfo', 'url'=>array('admin')),
);
?>

<h1>Update FlowInfo <?php echo $model->flow_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>