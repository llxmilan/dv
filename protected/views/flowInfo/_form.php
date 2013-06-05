<?php
/* @var $this FlowInfoController */
/* @var $model FlowInfo */
/* @var $form CActiveForm */
/*
	if (!session_id()) session_start();
		$flow=new FlowInfo();
		$etlfilename='1';
		if(isset($_POST['FlowInfo']))
		{
			$flow->attributes=$_POST['FlowInfo'];
			$_SESSION['etlfilename'] = $flow->flow_name;
			$etlfilename = $flow->flow_name;
			echo $flow->flow_name;
		}
*/
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
		<?php echo $form->textField($model,'flow_name',array('size'=>20,'maxlength'=>20,'id'=>'etlname')); ?>
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
					<script>
						function exec_etl()
						{
							var filename=document.getElementById('etlname').value;
							//document.getElementById('testcontent').innerHTML=filename;
							$.post("protected/views/flowInfo/execetl.php",{action:"start_test",name:filename},function(data){
								document.getElementById('testcontent').innerHTML=data;
								});
						}
					</script>
					<?php $this->widget('bootstrap.widgets.TbButton', array(
    						'buttonType'=>'submit',
						'label'=>'测试',
    						'type'=>'primary',
    						'htmlOptions'=>array(
        						'data-toggle'=>'modal',
        						'data-target'=>'#myModal',
							'onclick'=>'exec_etl()',
    							),
					)); ?>
					<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
						<div class="modal-header">
    							<a class="close" data-dismiss="modal">&times;</a>
    							<h4>测试过程</h4>
						</div>
	 
						<div class="modal-body" id='testcontent'>
 
						</div>
 
						<div class="modal-footer">
 						   <?php $this->widget('bootstrap.widgets.TbButton', array(
        						'buttonType'=>'submit',
							'type'=>'primary',
        						'label'=>'Save changes',
        						'url'=>'#',
        						'htmlOptions'=>array('data-dismiss'=>'modal'),
    						   )); ?>
    						   <?php $this->widget('bootstrap.widgets.TbButton', array(
        						'label'=>'Close',
        						'url'=>'#',
        						'htmlOptions'=>array('data-dismiss'=>'modal'),
    						   )); ?>
						</div>
 
					<?php $this->endWidget(); ?>
				</div>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
