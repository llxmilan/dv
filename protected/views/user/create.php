<?php
/* @var $this UserController */
/* @var $model User */
/*
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);
$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
*/
?>

<h3>欢迎加入数据可视化网站</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
