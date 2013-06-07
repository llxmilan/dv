<?php
/* @var $this NEWSController */
/* @var $model NEWS */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->NEWS_ID=>array('view','id'=>$model->NEWS_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List NEWS', 'url'=>array('index')),
	array('label'=>'Create NEWS', 'url'=>array('create')),
	array('label'=>'View NEWS', 'url'=>array('view', 'id'=>$model->NEWS_ID)),
	array('label'=>'Manage NEWS', 'url'=>array('admin')),
);
?>

<h1>Update NEWS <?php echo $model->NEWS_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>