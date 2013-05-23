<?php
/* @var $this TableInfoController */
/* @var $model TableInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'table-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tb_id'); ?>
		<?php echo $form->textField($model,'tb_id'); ?>
		<?php echo $form->error($model,'tb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tb_name'); ?>
		<?php echo $form->textField($model,'tb_name',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tb_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tb_comment'); ?>
		<?php echo $form->textField($model,'tb_comment',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tb_comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->