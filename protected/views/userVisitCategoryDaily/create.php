<?php
/* @var $this UserVisitCategoryDailyController */
/* @var $model UserVisitCategoryDaily */

$this->breadcrumbs=array(
	'User Visit Category Dailies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserVisitCategoryDaily', 'url'=>array('index')),
	array('label'=>'Manage UserVisitCategoryDaily', 'url'=>array('admin')),
);
?>

<h1>Create UserVisitCategoryDaily</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>