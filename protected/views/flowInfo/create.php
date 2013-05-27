<?php
/* @var $this FlowInfoController */
/* @var $dataProvider CActiveDataProvider */

?>
<div class='container-fluid'>
	<div class='row-fluid'>                                                                            
        	<div class='span2' style='margin-left:-20px'>                                              
			<div class='row-fluid'>		
				<?php $this->widget('bootstrap.widgets.TbMenu', array(                             
                        	'type'=>'list',                                                            
                        	'items'=>array(                                                            
                                	 array('label'=>'首页', 'icon'=>'home', 'url'=>array('index')),
                                	 array('label'=>'流程记录', 'icon'=>'book', 'url'=>array('list')),        
                                	 array('label'=>'编写新的流程', 'icon'=>'pencil', 'url'=>array('create'),'active'=>'true'),
                                 	 array('label'=>'作者','icon'=>'user'),                                           
                                 
                                 /*                                                                
                                 array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),            
                                 array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),            
                                 array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
                                */
                        	),
                	)); ?>
			</div>  
			<div class='row-fluid' style='margin-left:20px'>
                        	<span class="label label-info">
                                        <?php echo Yii::app()->user->name?>
                                </span>
                        </div>
		</div>
        	<div class='span10'> 
			<?php echo $this->renderPartial('_form',array('model'=>$model));?>                                                   		
			<div class='row-fluid'>
				<div class='span1'>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'label'=>'参数',
    					'type'=>'danger',
    					'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'-f flowfile  ' . ' -p -r', 'rel'=>'popover'),
				)); ?>
				</div>
				<div class='span4'>
					<input class='input-xlarge' type='text' placeholder='etltool parameters...'>
				</div>
				<div class='span2'>
					<button class="btn btn-primary" type="button">执行测试</button>
				</div>
				
			</div>
		</div>
        </div>
</div>  

