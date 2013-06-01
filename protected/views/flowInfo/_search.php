<?php
/* @var $this FlowInfoController */
/* @var $model FlowInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class='row'>
	<div class="span3">
		<?php echo $form->label($model,'flow_name'); ?>
		<?php echo $form->textField($model,'flow_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="span3">
		<?php echo $form->label($model,'flow_creator'); ?>
		<?php echo $form->textField($model,'flow_creator',array('size'=>20,'maxlength'=>20)); ?>
	</div>
	<div class='span2' style='margin-top:25px'>
		<?php $this->widget('bootstrap.widgets.TbButton',array(
                       	'buttonType'=>'submit',
                       	'type'=>'primary',
                       	'size'=>'normal',
                    	'label'=>'查找',
           	));?>
	</div>
	</div>	
<?php $this->endWidget(); ?>

</div><!-- search-form -->
