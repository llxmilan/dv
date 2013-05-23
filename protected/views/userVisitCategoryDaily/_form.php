<?php
/* @var $this UserVisitCategoryDailyController */
/* @var $model UserVisitCategoryDaily */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-visit-category-daily-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'名称'); ?>
		<?php echo $form->textField($model,'category_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'category_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_video_num'); ?>
		<?php echo $form->textField($model,'category_video_num'); ?>
		<?php echo $form->error($model,'category_video_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_views_num'); ?>
		<?php echo $form->textField($model,'category_views_num'); ?>
		<?php echo $form->error($model,'category_views_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_rate_avg'); ?>
		<?php echo $form->textField($model,'category_rate_avg'); ?>
		<?php echo $form->error($model,'category_rate_avg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_comments_num'); ?>
		<?php echo $form->textField($model,'category_comments_num'); ?>
		<?php echo $form->error($model,'category_comments_num'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
