<?php
/* @var $this UserVisitCategoryDailyController */
/* @var $model UserVisitCategoryDaily */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'种类编号'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'种类名称'); ?>
		<?php echo $form->textField($model,'category_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_video_num'); ?>
		<?php echo $form->textField($model,'category_video_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_views_num'); ?>
		<?php echo $form->textField($model,'category_views_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_rate_avg'); ?>
		<?php echo $form->textField($model,'category_rate_avg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_comments_num'); ?>
		<?php echo $form->textField($model,'category_comments_num'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
