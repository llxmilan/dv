<?php
/* @var $this NEWSController */
/* @var $model NEWS */

$this->breadcrumbs=array(
	'News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NEWS', 'url'=>array('index')),
	array('label'=>'Manage NEWS', 'url'=>array('admin')),
);
?>

<h1>Create NEWS</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>