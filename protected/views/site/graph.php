<?php
$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'数据表',
);
?>
<?php $this->widget('zii.widgets.CListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

