<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' 联系我们';
/*
$this->breadcrumbs=array(
	'联系',
);
*/
?>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'contact-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
		'validateOnSubmit'=>true,
		),
	)); ?>

	<!--p class="note">带有 <span class="required">*</span>是必填的.</p>-->

	<!--?php echo $form->errorSummary($model); ?-->
	<h3>联系我们</h3>
	<div class="row">
		<div class='span1'>
			<?php echo $form->labelEx($model,'用户名'); ?>
		</div>
		<div class='span1'>
			<?php echo $form->textField($model,'name'); ?>
		</div>
		<div class='span1'>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="row">
		<div class='span1'>
			<?php echo $form->labelEx($model,'邮箱'); ?>
		</div>
		<div class='span1'>		
			<?php echo $form->textField($model,'email'); ?>
		</div>
		<div>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="row">
		<div class='span1'>
			<?php echo $form->labelEx($model,'主题'); ?>
		</div>
		<div class='span1'>
			<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		</div>
		<div>
			<?php echo $form->error($model,'subject'); ?>
		</div>
	</div>

	<div class="row">
		<div class='span1'>
			<?php echo $form->labelEx($model,'内容'); ?>
		</div>
		<div class='span1'>
			<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		</div>
		<div>
			<?php echo $form->error($model,'body'); ?>
		</div>
	</div>
	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<div class='span1'>
			<?php echo $form->labelEx($model,'verifyCode'); ?>
		</div>
		<div class='span3'>
			<?php $this->widget('CCaptcha'); ?>
			<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
	
	<div class='row' style='margin-left:6%'>
		<?php $this->widget('bootstrap.widgets.TbButton',array(                    
                                'buttonType'=>'submit',                                            
                                'type'=>'primary',                                                 
                                'size'=>'normal',                                                  
                                'label'=>'提交'                                                                                 
		));?>                 
	</div>
	<!--div class="row buttons">
		<?php echo CHtml::submitButton('提交'); ?>
	</div-->

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
