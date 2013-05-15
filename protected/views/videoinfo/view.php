<?php
/* @var $this VideoinfoController */
/* @var $model videoinfo */

$this->breadcrumbs=array(
	'Videoinfos'=>array('index'),
	$model->video_id,
);

$this->menu=array(
	array('label'=>'List videoinfo', 'url'=>array('index')),
	array('label'=>'Create videoinfo', 'url'=>array('create')),
	array('label'=>'Update videoinfo', 'url'=>array('update', 'id'=>$model->video_id)),
	array('label'=>'Delete videoinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->video_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage videoinfo', 'url'=>array('admin')),
);
?>

<h1>View videoinfo #<?php echo $model->video_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'video_id',
		'uploader',
		'age',
		'category',
		'length',
		'views',
		'rate',
		'ratings',
		'comments',
		'related_1',
		'related_2',
		'related_3',
		'related_4',
		'related_5',
		'related_6',
		'related_7',
		'related_8',
		'related_9',
		'related_10',
		'related_11',
		'related_12',
		'related_13',
		'related_14',
		'related_15',
		'related_16',
		'related_17',
		'related_18',
		'related_19',
		'related_20',
	),
)); ?>
