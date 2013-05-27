<?php
/* @var $this FlowInfoController */
/* @var $model FlowInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'flow-info-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
                'validateOnSubmit'=>true,
                ),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'流程名称'); ?>
		<?php echo $form->textField($model,'flow_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'flow_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'流程内容'); ?>
		<?php echo $form->textArea($model,'flow_content',array('size'=>20,'maxlength'=>20,'style'=>'width:600px;height:500px')); ?>
		<?php echo $form->error($model,'flow_content'); ?>
	</div>
	
	<div class="row buttons">
		   <?php $this->widget('bootstrap.widgets.TbButton',array(
                                //'buttonType'=>'submit',
                                'type'=>'primary',
                                'size'=>'normal',
                                'label'=>'保存',
				'htmlOptions'=>array(
					'data-toggle'=>'modal',
					'data-target'=>'#myModal',
				),
                   ));?>
	</div>

	<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 		<div class="modal-header">
    			<a class="close" data-dismiss="modal">&times;</a>
    			<h4><?php $model->flow_name; ?></h4>
		</div>	
 
		<div class="modal-body">
    			<p><?php $model->flow_content; ?></p>
		</div>
 
		<div class="modal-footer">
    			<?php $this->widget('bootstrap.widgets.TbButton', array(
        			'buttonType'=>'submit',
				'type'=>'primary',
        			'label'=>'确定保存',
        			//'htmlOptions'=>array('data-dismiss'=>'modal'),
    			)); ?>
    			<?php $this->widget('bootstrap.widgets.TbButton', array(
        			'label'=>'取消',
        			'url'=>'#',
        			'htmlOptions'=>array('data-dismiss'=>'modal'),
    			)); ?>
		</div>
	<?php $this->endWidget(); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
