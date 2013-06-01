<?php
$this->pageTitle=Yii::app()->name . 'etl编写';
?>
<div class='container'>
	<div class='span2' style="margin-left:0px">
		<?php $this->widget('bootstrap.widgets.TbMenu', array(
    			'type'=>'list',
    			'items'=>array(
        			 array('label'=>'首页', 'icon'=>'home', 'url'=>'#', 'active'=>true),
       				 array('label'=>'流程记录', 'icon'=>'book', 'url'=>'list'),
       				 array('label'=>'编写新的流程', 'icon'=>'pencil', 'url'=>'create'),
				 
				 array('label'=>'作者'),
				 
        			 /*
				 array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
         			 array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
          			 array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
				*/
    			),
		)); ?>
	</div>
	<div class='sapn8'>
	</div>

</div>

