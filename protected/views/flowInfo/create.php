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
		</div>
        </div>
</div>  

