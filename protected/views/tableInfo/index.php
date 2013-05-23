<?php
/* @var $this TableInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Table Infos',
);

$this->menu=array(
	array('label'=>'Create TableInfo', 'url'=>array('create')),
	array('label'=>'Manage TableInfo', 'url'=>array('admin')),
);
?>

<h1>Table Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
