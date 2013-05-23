<?php
/* @var $this UserVisitCategoryDailyController */
/* @var $model UserVisitCategoryDaily */

$this->breadcrumbs=array(
	'User Visit Category Dailies'=>array('index'),
	$model->category_id=>array('view','id'=>$model->category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserVisitCategoryDaily', 'url'=>array('index')),
	array('label'=>'Create UserVisitCategoryDaily', 'url'=>array('create')),
	array('label'=>'View UserVisitCategoryDaily', 'url'=>array('view', 'id'=>$model->category_id)),
	array('label'=>'Manage UserVisitCategoryDaily', 'url'=>array('admin')),
);
?>

<h1>Update UserVisitCategoryDaily <?php echo $model->category_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>