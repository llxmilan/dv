<?php
/* @var $this FlowInfoController */
/* @var $model FlowInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'flow-info-form',
	//'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
                'validateOnSubmit'=>true,
                ),
)); ?>

	<!--?php echo $form->errorSummary($model); ?-->

	<div class="row">
		<?php echo $form->labelEx($model,'流程名称'); ?>
		<?php echo $form->textField($model,'flow_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'flow_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'流程内容'); ?>
		<?php echo $form->textArea($model,'flow_content',array('size'=>2000,'maxlength'=>2000,'style'=>'width:600px;height:500px')); ?>
		<?php echo $form->error($model,'flow_content'); ?>
	</div>
	
	<div class="row buttons">
		   <?php $this->widget('bootstrap.widgets.TbButton',array(
                                'buttonType'=>'submit',
                                'type'=>'primary',
                                'size'=>'normal',
                                'label'=>'保存',
                   ));?>
	</div>
	
 	<div class='row'>
              			<div class='span1'>
                                <?php $this->widget('bootstrap.widgets.TbButton', array(
                                        'label'=>'参数',
                                        'type'=>'danger',
                                        'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'-f flowfile  ' . ' -p -r', 'rel'=>'popover'),
                                )); ?>
                                </div>
                                <div class='span4'>
                                        <!--input id='parameters' class='input-xlarge' type='text' placeholder='etltool parameters...'-->
		                	<?php echo $form->textField($model,'parameter',array('size'=>20,'maxlength'=>20,'placeholder'=>'etltool parameters...')); ?>                                                              
                                </div>
                                <div class='span2'>
                                        <?php $this->widget('bootstrap.widgets.TbButton', array(
                                                'buttonType'=>'button',
                                                'type'=>'primary',
                                                'label'=>'执行测试',
                                                'loadingText'=>'测试中...',
                                                'htmlOptions'=>array('id'=>'buttonStateful'),
                                        )); ?>
				</div>
	</div>
	<div class='row'>
		<p id="demo"></p>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
	//$results=system("ls");
?>
<script>                                                                                                                                                              
                                        $('#buttonStateful').click(function() {
					 var btn = $(this);
					btn.button('loading');
					var a='<?php system('ls'); ?>');
					
                                        setTimeout(function() {
						btn.button('reset')
					 }, 3000);                                                                                                                                             
                                        });                                                                                                                                                           
                                                                                                                                                                                                      
                                        /*                                                                                                                                                            
                                        $('#buttonStateful').click(function() {                                                                                                                       
                                                 var btn = $(this);                                                                                                                                   
                                                btn.button('loading'); // call the loading function                                                                                                   
                                                setTimeout(function() {                                                                                                                               
                                                        btn.button('reset'); // call the reset function                                                                                               
                                                        }, 3000);                                                                                                                                     
                                                });                                                                                                                                                   
                                        */                                                                                                                                                            
</script>    

