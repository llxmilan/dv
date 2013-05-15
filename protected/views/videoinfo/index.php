<?php
/* @var $this VideoinfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Videoinfos',
);

$this->menu=array(
	array('label'=>'Create videoinfo', 'url'=>array('create')),
	array('label'=>'Manage videoinfo', 'url'=>array('admin')),
);
?>

<h1>Videoinfos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
