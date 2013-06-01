<?php 
Yii::app()->bootstrap->register()
?>

<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery.scrolltotop.js');

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
	<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<script type="text/javascript" charset="utf-8">
  			$(window).load(function() {
    			$('.flexslider').flexslider();
  		});
	</script>

                <style>
                        .flex {position:relative;width:850px;min-height:300px;margin:0 auto;border:0px solid red;margin-top:10px;}
                        .flex a {background-color:white;display:block;width:100px;height:100px;border-radius:8px;position:absolute;background-repeat:no-repeat;background-position:center;border:3px solid white;cursor:pointer;text-align:left;text-shadow:1px 1px 20px #000;color:white;font-size:18px;font-weight:bold;text-indent:10px;line-height:30px;}
                        [bg=a] {background-image:url(images/windowsAzure.png);}
                        [bg=b] {background-image:url(images/windowsAzure.png);background-size:300px auto;}
                        [bg=c] {background-image:url(http://farm6.staticflickr.com/5117/7410370290_0935419fc3.jpg);}
                        [bg=d] {background-image:url(http://farm8.staticflickr.com/7262/7419245080_bb752ed1d6.jpg);}
                        [bg=e] {background-image:url(http://farm8.staticflickr.com/7003/6468321069_3375be3073_z.jpg);background-size:auto 280px;}
                        [bg=f] {background-image:url(http://farm8.staticflickr.com/7220/7342556872_46cddaf9b0.jpg);background-size:auto 280px;}
                        [bg=g] {background-image:url(images/amazon_aws.png);background-size:auto 200px;}
                        [bg=h] {background-image:url(http://farm8.staticflickr.com/7076/7286717012_6e6b450243.jpg);}
                        [bg=i] {background-image:url(http://farm8.staticflickr.com/7129/7452167788_a3f6aa3104.jpg);background-size:auto 200px;}
                        [bg=j] {background-image:url(http://farm8.staticflickr.com/7153/6480022425_a8d419e663_z.jpg);background-size:auto 280px;}
                        [bg=k] {background-image:url(http://farm8.staticflickr.com/7225/7269592732_c4b7918626.jpg);background-size:auto 280px;}
                </style>

</head>
<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	<div id="mainmenu" class="row">
		<?php $this->widget('bootstrap.widgets.TbNavbar',array(
			'type'=>'inverse',
			'brand'=>'云计算',
			'brandUrl'=>'#',
			'htmlOptions'=>array('style'=>'background-color:#ffffff'),
			'collapse'=>false,
			'fluid'=>'true',
			'items'=>array(
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
						array('label'=>'云计算', 'url'=>array('/cloudComputing/index')),
						array('label'=>'数据可视化', 'url'=>array('/dataView/index')),
						array('label'=>'数据仓库','url'=>array('/dataWarehouse/index')),
						array('label'=>'数据挖掘', 'url'=>array('/dataMing/index')),
						//array('label'=>'云计算', 'url'=>array('/site/login')),
						//array('label'=>'注销 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					)),
			        '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'htmlOptions'=>array('class'=>'pull-right'),
					'items'=>array(
						array('label'=>'联系', 'url'=>array('/site/contact')),
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
	<div class='row' style="margin-top:20px">
		<div class='span2'>
                	<img  src='../../images/cloud_computing_logo.png'/>
		</div>
		<div id='firstmenu' class="span8">
                	<?php $this->widget('bootstrap.widgets.TbMenu', array(
                        	'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
                        	'stacked'=>false, // whether this is a stacked menu
                        	'items'=>array(
                                	array('label'=>'首页', 'icon'=>'home', 'url'=>array('/cloudComputing/index')),
                    	            	array('label'=>'IaaS', 'icon'=>'th','url'=>array('/cloudComputing/IaaS')),
                                	array('label'=>'Paas', 'icon'=>'camera','url'=>array('/cloudComputing/PaaS')),
					array('label'=>'SaaS', 'icon'=>'camera','url'=>array('/cloudComputing/SaaS')),

                        	),
                	)); ?>
        	</div>
	</div>
	<div id="breadcrumbs"  style="margin-left:10%;margin-right:10%">
		<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array('links'=>$this->breadcrumbs,));?><!-- breadcrumbs -->
		<?php endif?>
	</div>
	<div>
		<?php echo $content; ?>
	</div>
	<div class="clear"></div>

</div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by NCTC.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->


</body>
</html>
