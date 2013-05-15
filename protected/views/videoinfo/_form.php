<?php
/* @var $this VideoinfoController */
/* @var $model videoinfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'videoinfo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'video_id'); ?>
		<?php echo $form->textField($model,'video_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'video_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uploader'); ?>
		<?php echo $form->textField($model,'uploader',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'uploader'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
		<?php echo $form->error($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
		<?php echo $form->error($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
		<?php echo $form->error($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ratings'); ?>
		<?php echo $form->textField($model,'ratings'); ?>
		<?php echo $form->error($model,'ratings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments'); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_1'); ?>
		<?php echo $form->textField($model,'related_1',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_2'); ?>
		<?php echo $form->textField($model,'related_2',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_3'); ?>
		<?php echo $form->textField($model,'related_3',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_4'); ?>
		<?php echo $form->textField($model,'related_4',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_5'); ?>
		<?php echo $form->textField($model,'related_5',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_6'); ?>
		<?php echo $form->textField($model,'related_6',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_7'); ?>
		<?php echo $form->textField($model,'related_7',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_8'); ?>
		<?php echo $form->textField($model,'related_8',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_9'); ?>
		<?php echo $form->textField($model,'related_9',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_10'); ?>
		<?php echo $form->textField($model,'related_10',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_11'); ?>
		<?php echo $form->textField($model,'related_11',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_12'); ?>
		<?php echo $form->textField($model,'related_12',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_13'); ?>
		<?php echo $form->textField($model,'related_13',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_14'); ?>
		<?php echo $form->textField($model,'related_14',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_14'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_15'); ?>
		<?php echo $form->textField($model,'related_15',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_15'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_16'); ?>
		<?php echo $form->textField($model,'related_16',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_16'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_17'); ?>
		<?php echo $form->textField($model,'related_17',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_17'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_18'); ?>
		<?php echo $form->textField($model,'related_18',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_18'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_19'); ?>
		<?php echo $form->textField($model,'related_19',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_19'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'related_20'); ?>
		<?php echo $form->textField($model,'related_20',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'related_20'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->