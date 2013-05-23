<?php
/* @var $this VideoinfoController */
/* @var $model videoinfo */

$this->breadcrumbs=array(
	'视频基本信息'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'查看基本信息', 'url'=>array('index')),
	array('label'=>'管理信息', 'url'=>array('admin')),

);
?>

<h1>Create videoinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
