<?php
/* @var $this UserVisitCategoryDailyController */
/* @var $model UserVisitCategoryDaily */

$this->breadcrumbs=array(
	'User Visit Category Dailies'=>array('index'),
	'Manage',
);

$this->menu=array(
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-visit-category-daily-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped',
    'dataProvider'=>$model->search(),
    //'template'=>"{items}",
    'columns'=>array(
        array('name'=>'category_id', 'header'=>'编号'),
        array('name'=>'category_name', 'header'=>'种类名称'),
        array('name'=>'category_video_num', 'header'=>'视频数目'),
        array('name'=>'category_views_num', 'header'=>'点击量'),
	array('name'=>'category_rate_avg','header'=>'评分'),
	array('name'=>'category_comments_num','header'=>'评论数目')
    ),
)); ?>
