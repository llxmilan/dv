<?php 
Yii::app()->bootstrap->register()
?>
<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>

<div class="container-fluid" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	<div id="mainmenu" class="row">
		<?php $this->widget('bootstrap.widgets.TbNavbar',array(
			'type'=>'inverse',
			'brand'=>'大数据',
			'brandUrl'=>'#',
			'htmlOptions'=>array('style'=>'background-color:#ffffff'),
			'collapse'=>false,
			'fluid'=>'true',
			'items'=>array(
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
						array('label'=>'云计算', 'url'=>array('#')),
						array('label'=>'数据可视化', 'url'=>array('#')),
						array('label'=>'数据仓库','url'=>array('#')),
						array('label'=>'数据挖掘', 'url'=>array('#')),
						//array('label'=>'云计算', 'url'=>array('/site/login')),
						//array('label'=>'注销 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					)),
			        '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'htmlOptions'=>array('class'=>'pull-right'),
					'items'=>array(
						array('label'=>'联系', 'url'=>array('/site/contact')),
						/*
						array('label'=>'相关内容', 'url'=>'#', 'items'=>array(
							array('label'=>'云计算', 'url'=>'#'),
							array('label'=>'数据仓库', 'url'=>'#'),
							array('label'=>'数据挖掘', 'url'=>'#'),
							array('label'=>'大数据', 'url'=>'#'),
						)),
						*/
						array('label'=>'注册', 'url'=>array('/user/create')),
						array('label'=>'登陆', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                                array('label'=>'注销 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				),
			),
		));?>
	</div><!-- mainmenu -->
	<!--div>
		<img style="margin-top:20px" src='../../images/dataview_logo.png'/>
	</div-->
	<div class='row' style="margin-top:20px;margin-left:10%">
		<div class='span2'>
                	<img  src='../../images/dataview_logo.png'/>
		</div>
		<div id='firstmenu' class="span8">
                	<?php $this->widget('bootstrap.widgets.TbMenu', array(
                        	'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
                        	'stacked'=>false, // whether this is a stacked menu
                        	'items'=>array(
                                	array('label'=>'首页', 'icon'=>'home', 'url'=>array('/site/index')),
                                	array('label'=>'数据报表', 'icon'=>'th','url'=>array('/videoinfo/index')),
                                	array('label'=>'可视化图形', 'icon'=>'camera','url'=>array('/site/graph')),
                        	),
                	)); ?>
        	</div>
	</div>
	<div id="breadcrumbs"  style="margin-left:10%;margin-right:10%">
		<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array('links'=>$this->breadcrumbs,));?><!-- breadcrumbs -->
		<?php endif?>
	</div>
	<div class='row' style='margin-left:10%;margin-right:10%'>
		<?php echo $content; ?>
	</div>
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by NCTC.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
