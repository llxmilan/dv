<?php
/* @var $this NEWSController */
/* @var $model NEWS */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NEWS_TITLE'); ?>
		<?php echo $form->textField($model,'NEWS_TITLE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NEWS_CONTENT'); ?>
		<?php echo $form->textArea($model,'NEWS_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NEWS_PUbLISHDATE'); ?>
		<?php echo $form->textField($model,'NEWS_PUbLISHDATE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NEWS_URL'); ?>
		<?php echo $form->textField($model,'NEWS_URL',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NEWS_ID'); ?>
		<?php echo $form->textField($model,'NEWS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NEWS_IMAGEPATH'); ?>
		<?php echo $form->textField($model,'NEWS_IMAGEPATH',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NEWS_SOURCE'); ?>
		<?php echo $form->textField($model,'NEWS_SOURCE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->