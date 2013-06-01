<?php
/* @var $this TableInfoController */
/* @var $model TableInfo */

$this->breadcrumbs=array(
	'Table Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TableInfo', 'url'=>array('index')),
	array('label'=>'Manage TableInfo', 'url'=>array('admin')),
);
?>

<h1>Create TableInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
