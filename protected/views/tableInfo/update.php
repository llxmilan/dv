<?php
/* @var $this TableInfoController */
/* @var $model TableInfo */

$this->breadcrumbs=array(
	'Table Infos'=>array('index'),
	$model->tb_id=>array('view','id'=>$model->tb_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TableInfo', 'url'=>array('index')),
	array('label'=>'Create TableInfo', 'url'=>array('create')),
	array('label'=>'View TableInfo', 'url'=>array('view', 'id'=>$model->tb_id)),
	array('label'=>'Manage TableInfo', 'url'=>array('admin')),
);
?>

<h1>Update TableInfo <?php echo $model->tb_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>