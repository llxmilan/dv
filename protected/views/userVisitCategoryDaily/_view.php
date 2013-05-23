<?php
/* @var $this UserVisitCategoryDailyController */
/* @var $data UserVisitCategoryDaily */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->category_id), array('view', 'id'=>$data->category_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_name')); ?>:</b>
	<?php echo CHtml::encode($data->category_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_video_num')); ?>:</b>
	<?php echo CHtml::encode($data->category_video_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_views_num')); ?>:</b>
	<?php echo CHtml::encode($data->category_views_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_rate_avg')); ?>:</b>
	<?php echo CHtml::encode($data->category_rate_avg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_comments_num')); ?>:</b>
	<?php echo CHtml::encode($data->category_comments_num); ?>
	<br />


</div>