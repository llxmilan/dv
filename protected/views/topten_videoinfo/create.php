<?php
/* @var $this Topten_videoinfoController */
/* @var $model videoinfo */

$this->breadcrumbs=array(
	'Videoinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List videoinfo', 'url'=>array('index')),
	array('label'=>'Manage videoinfo', 'url'=>array('admin')),
);
?>

<h1>Create videoinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>