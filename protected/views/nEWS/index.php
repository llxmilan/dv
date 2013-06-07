<?php
/* @var $this NEWSController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'新闻',
);
?>

<h1>新浪科技-互联网</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
