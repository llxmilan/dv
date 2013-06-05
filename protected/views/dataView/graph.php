<?php
$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'可视化图形',
);
?>
<?php $this->widget('zii.widgets.CListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view_graph',
)); ?>

