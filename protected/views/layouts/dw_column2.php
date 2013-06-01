<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/dw'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
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

	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>

