<?php
/* @var $this FlowScheduleController */
/* @var $model FlowSchedule */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'flow-schedule-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fs_id'); ?>
		<?php echo $form->textField($model,'fs_id'); ?>
		<?php echo $form->error($model,'fs_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fs_name'); ?>
		<?php echo $form->textField($model,'fs_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fs_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fs_type'); ?>
		<?php echo $form->textField($model,'fs_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fs_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fs_reload'); ?>
		<?php echo $form->textField($model,'fs_reload'); ?>
		<?php echo $form->error($model,'fs_reload'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fs_delta'); ?>
		<?php echo $form->textField($model,'fs_delta'); ?>
		<?php echo $form->error($model,'fs_delta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
