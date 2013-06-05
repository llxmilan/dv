<?php
/* @var $this TableInfoController */
/* @var $model TableInfo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tb_id'); ?>
		<?php echo $form->textField($model,'tb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tb_name'); ?>
		<?php echo $form->textField($model,'tb_name',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tb_comment'); ?>
		<?php echo $form->textField($model,'tb_comment',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tb_graph'); ?>
		<?php echo $form->textField($model,'tb_graph'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->