<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<!--?php echo $form->errorSummary($model); ?-->
	<div class='row'>
		<div  style='margin-left:20px'>
			<h3>欢迎加入我们的网站</h3>
			<div class="row">
				<?php echo $form->labelEx($model,'用户名'); ?>
				<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
	
			<div class="row">
				<?php echo $form->labelEx($model,'密码'); ?>
				<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'邮箱'); ?>
				<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>
		</div>
	</div>
	<!--
	<div class="row buttons">
		<!?php echo CHtml::submitButton($model->isNewRecord ? '注册' : 'Save'); ?>
	</div>
	-->
	<div class='row'>
		<div class='span1'>
			<?php $this->widget('bootstrap.widgets.TbButton',array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>'注册'
			));?>
		</div>
	</div>	
	
<?php $this->endWidget(); ?>

</div><!-- form -->
