<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 登陆';
/*
$this->breadcrumbs=array(
	'登陆',
);
*/
?>
<div>
	<div class="form" style='margin-left:30px'>
		<div>
			<h3>登陆</h3>
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
				'validateOnSubmit'=>true,
				),
			)); ?>

			<div class="row">
				<?php echo $form->labelEx($model,'用户名'); ?>
				<?php echo $form->textField($model,'username'); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'密码'); ?>
				<?php echo $form->passwordField($model,'password'); ?>
				<?php echo $form->error($model,'password'); ?>
				<p class="hint">
					默认的用户名和密码为：admin/admin..
				</p>
			</div>

			<div class="row rememberMe">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>
   		</div>
   		<div>
		<!--div class="row buttons">
		</div-->
                	<?php $this->widget('bootstrap.widgets.TbButton',array(                    
                		'buttonType'=>'submit',                                            
                        	'type'=>'primary',
				'size'=>'normal',                                                 
                       		'label'=>'登陆'                                                    				
			));?>
		</div>
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
