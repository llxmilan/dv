<?php
/* @var $this FlowScheduleController */
/* @var $model FlowSchedule */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fs_id'); ?>
		<?php echo $form->textField($model,'fs_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fs_name'); ?>
		<?php echo $form->textField($model,'fs_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fs_type'); ?>
		<?php echo $form->textField($model,'fs_type',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fs_reload'); ?>
		<?php echo $form->textField($model,'fs_reload'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fs_delta'); ?>
		<?php echo $form->textField($model,'fs_delta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
