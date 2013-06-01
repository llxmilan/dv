<?php
/* @var $this FlowInfoController */
/* @var $dataProvider CActiveDataProvider */

?>
<div class='container-fluid'>
	<div class='row-fluid'>                                                                            
        	<div class='span2'>
			<div class='row'>                                                
                		<?php $this->widget('bootstrap.widgets.TbMenu', array(                             
                        		'type'=>'list',                                                            
                        		'items'=>array(                                                            
                                		array('label'=>'首页', 'icon'=>'home', 'url'=>array('index'),'active'=>'true'),
                                		array('label'=>'流程记录', 'icon'=>'book', 'url'=>array('list')),        
                                		array('label'=>'编写新的流程', 'icon'=>'pencil', 'url'=>array('create')),
                                		array('label'=>'作者','icon'=>'user'),
				/*                                                                
                                 array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),            
                                 array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),            
                                 array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
                                */
                        		),
                		)); ?>
			</div>
			<div class='row' style='margin-left:2px'>
				<span class="label label-info">
					<?php echo Yii::app()->user->name?>
				</span>
			</div> 
        	</div> 
        	<div class='span10'>                                                                        
			<div class="search-form" >
				<?php $this->renderPartial('_search',array(
        				'model'=>$model,
				)); ?>
			</div><!-- search-form -->

			<?php $this->widget('zii.widgets.grid.CGridView', array(
        			'id'=>'flow-info-grid',
        			'dataProvider'=>$model->search(),
        			//'filter'=>$model,
        			'columns'=>array(
                			'flow_id',
                			'flow_name',
                			'flow_creator',
                			'flow_position',
        			),
			)); ?>

		</div>
        </div>
</div>  

