<?php
/* @var $this UserVisitCategoryDailyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Visit Category Dailies',
);

$this->menu=array(
	array('label'=>'Create UserVisitCategoryDaily', 'url'=>array('create')),
	array('label'=>'Manage UserVisitCategoryDaily', 'url'=>array('admin')),
);
?>

<h1>User Visit Category Dailies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
