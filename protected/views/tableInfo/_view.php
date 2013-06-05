<?php
/* @var $this TableInfoController */
/* @var $data TableInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tb_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tb_id), array('view', 'id'=>$data->tb_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tb_name')); ?>:</b>
	<?php echo CHtml::encode($data->tb_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tb_comment')); ?>:</b>
	<?php echo CHtml::encode($data->tb_comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tb_graph')); ?>:</b>
	<?php echo CHtml::encode($data->tb_graph); ?>
	<br />


</div>