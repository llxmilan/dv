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
                                		array('label'=>'首页', 'icon'=>'home', 'url'=>array('index'),'active'=>'true'),
                                		array('label'=>'修改', 'icon'=>'book', 'url'=>array('list')),        
                                		array('label'=>'增加新的流程', 'icon'=>'pencil', 'url'=>array('create')),
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
			<div class="search-form" >
                                <?php $this->renderPartial('_search',array(
                                        'model'=>$model,
                                )); ?>
                        </div><!-- search-form -->

                        <?php $this->widget('zii.widgets.grid.CGridView', array(
                                'id'=>'flow-schedule-grid',
                                'dataProvider'=>$model->search(),
                                //'filter'=>$model,
                                'columns'=>array(
                                        'fs_id',
                                        'fs_name',
                                        'fs_type',
                                        'fs_reload',
                                        'fs_delta',
                                ),
                        ));?>

		</div>
        </div>
</div>  

