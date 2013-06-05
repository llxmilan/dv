<?php
/* @var $this FlowScheduleController */
/* @var $data FlowSchedule */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fs_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fs_id), array('view', 'id'=>$data->fs_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fs_name')); ?>:</b>
	<?php echo CHtml::encode($data->fs_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fs_type')); ?>:</b>
	<?php echo CHtml::encode($data->fs_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fs_reload')); ?>:</b>
	<?php echo CHtml::encode($data->fs_reload); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fs_delta')); ?>:</b>
	<?php echo CHtml::encode($data->fs_delta); ?>
	<br />


</div>
