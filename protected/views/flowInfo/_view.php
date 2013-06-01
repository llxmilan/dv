<?php
/* @var $this FlowInfoController */
/* @var $data FlowInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('flow_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->flow_id), array('view', 'id'=>$data->flow_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flow_name')); ?>:</b>
	<?php echo CHtml::encode($data->flow_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flow_creator')); ?>:</b>
	<?php echo CHtml::encode($data->flow_creator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flow_position')); ?>:</b>
	<?php echo CHtml::encode($data->flow_position); ?>
	<br />


</div>
