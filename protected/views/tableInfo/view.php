<?php
/* @var $this TableInfoController */
/* @var $model TableInfo */

$this->breadcrumbs=array(
	'Table Infos'=>array('index'),
	$model->tb_id,
);

$this->menu=array(
	array('label'=>'List TableInfo', 'url'=>array('index')),
	array('label'=>'Create TableInfo', 'url'=>array('create')),
	array('label'=>'Update TableInfo', 'url'=>array('update', 'id'=>$model->tb_id)),
	array('label'=>'Delete TableInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tb_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TableInfo', 'url'=>array('admin')),
);
?>

<h1>View TableInfo #<?php echo $model->tb_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tb_id',
		'tb_name',
		'tb_comment',
		'tb_graph',
	),
)); ?>
