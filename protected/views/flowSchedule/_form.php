<?php
/* @var $this FlowScheduleController */
/* @var $model FlowSchedule */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'flow-schedule-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'fs_name'); ?>
		<?php echo $form->textField($model,'fs_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fs_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fs_type'); ?>
                <?php echo $form->radioButtonList($model,'fs_type',
                        array('time'=>'按照时间先后','dependence'=>'按照依赖关系'),
                        array(  
                                'template'=>'{input}{label}',
                                'separator'=>'',
                                'labelOptions'=>array('style'=>'margin-left:-20px;padding-left:0px;padding-right:40px'),
                                'style'=>'float:left;'
                                )
                        );?>		
		<?php echo $form->error($model,'fs_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fs_reload'); ?>
                <?php echo $form->radioButtonList($model,'fs_reload',array('1'=>'是','0'=>'否'),
                        array(  
                                'template'=>'{input}{label}',
                                'separator'=>'',
                                'labelOptions'=>array('style'=>'margin-left:-80px;padding-left:-30px;padding-right:40px'),
                                'style'=>'float:left;'
                                )
                        ); ?>
	
		<?php echo $form->error($model,'fs_reload'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fs_delta'); ?>
		<?php echo $form->textField($model,'fs_delta'); ?>
		<?php echo $form->error($model,'fs_delta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '确定' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
