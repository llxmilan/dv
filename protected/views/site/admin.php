<?php
/* @var $this VideoinfoController */
/* @var $model videoinfo */

$this->breadcrumbs=array(
        '视频基本信息'=>array('graph'),
        $model->tb_name,
);

?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'table-info-grid',
        'dataProvider'=>$dataProvider,
        'filter'=>$model,
        'columns'=>array(
                'tb_id',
                'tb_name',
                'tb_comment',
                array(  
                        'class'=>'CButtonColumn',
                ),
        ),
)); ?>
