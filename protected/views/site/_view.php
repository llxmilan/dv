<?php
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('表名称')); ?>:</b>                 
        <?php echo CHtml::link(CHtml::encode($data->tb_name),'index.php?r=/userVisitCategoryDaily/graph'); ?>
        <br />
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('简介')); ?>:</b>
	<?php echo CHtml::encode($data->tb_comment);?>
	<br />
                                                                                     
</div>
	
