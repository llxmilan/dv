<?php
/* @var $this VideoinfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'视频基本信息',
);

/*
$this->menu=array(
	array('label'=>'新建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),

);
*/

?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
