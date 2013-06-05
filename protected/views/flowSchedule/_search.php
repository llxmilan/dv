<?php
/* @var $this FlowScheduleController */
/* @var $model FlowSchedule */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'流程名称'); ?>
		<?php echo $form->textField($model,'fs_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'流程类型'); ?>
		<?php echo $form->radioButtonList($model,'fs_type',
			array('time'=>'按照时间先后','dependence'=>'按照依赖关系'),
			array(
                    		'template'=>'{input}{label}',
                    		'separator'=>'',
                    		'labelOptions'=>array('style'=>'margin-left:-20px;padding-left:0px;padding-right:40px'),
                    		'style'=>'float:left;'
                    		)                
			);?>
	</div>	

	<div class="row">
		<?php echo $form->label($model,'是否重载'); ?>
		<?php echo $form->radioButtonList($model,'fs_reload',array('1'=>'是','0'=>'否'),
			array(
                                'template'=>'{input}{label}',
                                'separator'=>'',
                                'labelOptions'=>array('style'=>'margin-left:-80px;padding-left:-30px;padding-right:40px'),
                                'style'=>'float:left;'
                                )  
			); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'间隔时间'); ?>
		<?php echo $form->textField($model,'fs_delta'); ?>
		<?php echo '天'?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('查找'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
