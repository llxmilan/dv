<?php
/* @var $this NEWSController */
/* @var $model NEWS */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NEWS_TITLE'); ?>
		<?php echo $form->textField($model,'NEWS_TITLE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NEWS_TITLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NEWS_CONTENT'); ?>
		<?php echo $form->textArea($model,'NEWS_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'NEWS_CONTENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NEWS_PUbLISHDATE'); ?>
		<?php echo $form->textField($model,'NEWS_PUbLISHDATE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NEWS_PUbLISHDATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NEWS_URL'); ?>
		<?php echo $form->textField($model,'NEWS_URL',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'NEWS_URL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NEWS_IMAGEPATH'); ?>
		<?php echo $form->textField($model,'NEWS_IMAGEPATH',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'NEWS_IMAGEPATH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NEWS_SOURCE'); ?>
		<?php echo $form->textField($model,'NEWS_SOURCE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NEWS_SOURCE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
