<?php
/* @var $this Topten_videoinfoController */
/* @var $data videoinfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->video_id), array('view', 'id'=>$data->video_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploader')); ?>:</b>
	<?php echo CHtml::encode($data->uploader); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length')); ?>:</b>
	<?php echo CHtml::encode($data->length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('views')); ?>:</b>
	<?php echo CHtml::encode($data->views); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ratings')); ?>:</b>
	<?php echo CHtml::encode($data->ratings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_1')); ?>:</b>
	<?php echo CHtml::encode($data->related_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_2')); ?>:</b>
	<?php echo CHtml::encode($data->related_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_3')); ?>:</b>
	<?php echo CHtml::encode($data->related_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_4')); ?>:</b>
	<?php echo CHtml::encode($data->related_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_5')); ?>:</b>
	<?php echo CHtml::encode($data->related_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_6')); ?>:</b>
	<?php echo CHtml::encode($data->related_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_7')); ?>:</b>
	<?php echo CHtml::encode($data->related_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_8')); ?>:</b>
	<?php echo CHtml::encode($data->related_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_9')); ?>:</b>
	<?php echo CHtml::encode($data->related_9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_10')); ?>:</b>
	<?php echo CHtml::encode($data->related_10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_11')); ?>:</b>
	<?php echo CHtml::encode($data->related_11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_12')); ?>:</b>
	<?php echo CHtml::encode($data->related_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_13')); ?>:</b>
	<?php echo CHtml::encode($data->related_13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_14')); ?>:</b>
	<?php echo CHtml::encode($data->related_14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_15')); ?>:</b>
	<?php echo CHtml::encode($data->related_15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_16')); ?>:</b>
	<?php echo CHtml::encode($data->related_16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_17')); ?>:</b>
	<?php echo CHtml::encode($data->related_17); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_18')); ?>:</b>
	<?php echo CHtml::encode($data->related_18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_19')); ?>:</b>
	<?php echo CHtml::encode($data->related_19); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('related_20')); ?>:</b>
	<?php echo CHtml::encode($data->related_20); ?>
	<br />

	*/ ?>

</div>