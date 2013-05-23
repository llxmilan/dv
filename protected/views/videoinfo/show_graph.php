<?php
/* @var $this VideoinfoController */
/* @var $model videoinfo */

$this->breadcrumbs=array(
	'Videoinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List videoinfo', 'url'=>array('index')),
	array('label'=>'Manage videoinfo', 'url'=>array('admin')),
        array('label'=>'Show  videoinfo graph', 'url'=>array('show_graph')),

);
?>

<h1>Create videoinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
