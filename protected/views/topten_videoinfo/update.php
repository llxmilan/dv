<?php
/* @var $this Topten_videoinfoController */
/* @var $model videoinfo */

$this->breadcrumbs=array(
	'Videoinfos'=>array('index'),
	$model->video_id=>array('view','id'=>$model->video_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List videoinfo', 'url'=>array('index')),
	array('label'=>'Create videoinfo', 'url'=>array('create')),
	array('label'=>'View videoinfo', 'url'=>array('view', 'id'=>$model->video_id)),
	array('label'=>'Manage videoinfo', 'url'=>array('admin')),
);
?>

<h1>Update videoinfo <?php echo $model->video_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>