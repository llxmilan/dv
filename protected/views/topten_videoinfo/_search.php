<?php
/* @var $this Topten_videoinfoController */
/* @var $model videoinfo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'video_id'); ?>
		<?php echo $form->textField($model,'video_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uploader'); ?>
		<?php echo $form->textField($model,'uploader',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ratings'); ?>
		<?php echo $form->textField($model,'ratings'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textField($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_1'); ?>
		<?php echo $form->textField($model,'related_1',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_2'); ?>
		<?php echo $form->textField($model,'related_2',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_3'); ?>
		<?php echo $form->textField($model,'related_3',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_4'); ?>
		<?php echo $form->textField($model,'related_4',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_5'); ?>
		<?php echo $form->textField($model,'related_5',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_6'); ?>
		<?php echo $form->textField($model,'related_6',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_7'); ?>
		<?php echo $form->textField($model,'related_7',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_8'); ?>
		<?php echo $form->textField($model,'related_8',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_9'); ?>
		<?php echo $form->textField($model,'related_9',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_10'); ?>
		<?php echo $form->textField($model,'related_10',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_11'); ?>
		<?php echo $form->textField($model,'related_11',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_12'); ?>
		<?php echo $form->textField($model,'related_12',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_13'); ?>
		<?php echo $form->textField($model,'related_13',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_14'); ?>
		<?php echo $form->textField($model,'related_14',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_15'); ?>
		<?php echo $form->textField($model,'related_15',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_16'); ?>
		<?php echo $form->textField($model,'related_16',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_17'); ?>
		<?php echo $form->textField($model,'related_17',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_18'); ?>
		<?php echo $form->textField($model,'related_18',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_19'); ?>
		<?php echo $form->textField($model,'related_19',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'related_20'); ?>
		<?php echo $form->textField($model,'related_20',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->