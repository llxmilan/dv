<?php
/* @var $this NEWSController */
/* @var $model NEWS */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->NEWS_ID,
);

$this->menu=array(
	array('label'=>'List NEWS', 'url'=>array('index')),
	array('label'=>'Create NEWS', 'url'=>array('create')),
	array('label'=>'Update NEWS', 'url'=>array('update', 'id'=>$model->NEWS_ID)),
	array('label'=>'Delete NEWS', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NEWS_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NEWS', 'url'=>array('admin')),
);
?>

<h1>View NEWS #<?php echo $model->NEWS_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NEWS_TITLE',
		'NEWS_CONTENT',
		'NEWS_PUbLISHDATE',
		'NEWS_URL',
		'NEWS_ID',
		'NEWS_IMAGEPATH',
		'NEWS_SOURCE',
	),
)); ?>
