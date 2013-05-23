<?php
/* @var $this UserVisitCategoryDailyController */
/* @var $model UserVisitCategoryDaily */

$this->breadcrumbs=array(
	'User Visit Category Dailies'=>array('index'),
	$model->category_id,
);

$this->menu=array(
	array('label'=>'List UserVisitCategoryDaily', 'url'=>array('index')),
	array('label'=>'Create UserVisitCategoryDaily', 'url'=>array('create')),
	array('label'=>'Update UserVisitCategoryDaily', 'url'=>array('update', 'id'=>$model->category_id)),
	array('label'=>'Delete UserVisitCategoryDaily', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserVisitCategoryDaily', 'url'=>array('admin')),
);
?>

<h1>View UserVisitCategoryDaily #<?php echo $model->category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'category_id',
		'category_name',
		'category_video_num',
		'category_views_num',
		'category_rate_avg',
		'category_comments_num',
	),
)); ?>
