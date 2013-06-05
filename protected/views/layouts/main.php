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

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	<div id="mainmenu" class="row">
		<?php $this->widget('bootstrap.widgets.TbNavbar',array(
			'type'=>'inverse',
			'brand'=>'数据可视化',
			'brandUrl'=>'#',
			'htmlOptions'=>array('style'=>'background-color:#ffffff'),
			'collapse'=>false,
			'fluid'=>'true',
			'items'=>array(
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
                                                array('label'=>'首页', 'url'=>Yii::app()->homeUrl),
						array('label'=>'云计算', 'url'=>array('/cloudComputing/index')),
						array('label'=>'数据可视化', 'url'=>array('/dataView/index')),
						array('label'=>'数据仓库','url'=>array('/dataWarehouse/index')),
						array('label'=>'数据挖掘', 'url'=>array('dataMing/index')),
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
	<div class='row' style="margin-top:20px">
		<div class='span3'>
                	<img  src='../../images/dataview_logo.png'/>
		</div>
		<div id='firstmenu' class="span8">
                	<?php $this->widget('bootstrap.widgets.TbMenu', array(
                        	'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
                        	'stacked'=>false, // whether this is a stacked menu
                        	'items'=>array(
                                	array('label'=>'首页', 'icon'=>'home', 'url'=>array('/dataView/index')),
                                	array('label'=>'数据报表', 'icon'=>'th','url'=>array('/dataView/basictable')),
                                	array('label'=>'可视化图形', 'icon'=>'camera','url'=>array('/dataView/graph')),
                        	),
                	)); ?>
        	</div>
	</div>
	<div id="breadcrumbs">
		<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'homeLink'=>CHtml::link('首页',Yii::app()->homeUrl . '?r=dataView/index/'),      
					'links'=>$this->breadcrumbs,));?><!-- breadcrumbs -->
		<?php endif?>
	</div>
	<div>
		<?php echo $content; ?>
	</div>

	<div class="clear"></div>
</div>
	<div class='container' style='background-color:#312E2A;margin-top:-5px'>
		<div class='row-fluid'>
			<div class='span4'>
				<div class='row-fluid'>
					<div class='span5 offset1'>
						<h5 class='page-header' align='left'><p class='muted'>联系我们</p></h5>
					</div>
				</div>
				<div class='row-fluid'>
					<div class='span5 offset1' style='margin-top:-20px'>
						<p class='text-info' align='left'><small>
							<strong>地址:</strong>北四环中路211号<br>
							<strong>电话:</strong>51615782</a><br>
							<strong>Email:</strong>liuzp@nctc.org.cn</a> </p></small>
					</div>
				</div>
			</div>
			<div class='span4'>
				<div class='row-fluid'>
					<div class='span4 offset1'>		
						<h5 class='page-header' align='left'><p class='muted'>这里有我们...</p></h5>
					</div>
				</div>
				<div class='row-fluid'>
					<div class='span1 offset1' style='margin-top:-20px'>
						<a href="http://weibo.com/u/1766142357?wvr=5&topnav=1&wvr=5" title="新浪微博"><img src='images/weibo.jpg' /></a>
                                	</div>
					<div class='span1' style='margin-top:-20px'>
						<a href="http://www.douban.com/people/45040235/" title="豆瓣网"><img src='images/douban.gif' /></a>
					</div>
					<div class='span1' style='margin-top:-20px'>
                                                <a href="http://www.renren.com/222370766" title="人人网"><img src='images/renren.jpg' /></a>	
					</div>
					<div class='span1' style='margin-top:-20px'>
                                                <a href="http://user.qzone.qq.com/275266207/infocenter" title="qq空间"><img src='images/qq.jpg' /></a>       
                                        </div>
				</div>		
			</div>
			<div class='span4'>
				<div class='row-fluid'>
					<div class='span4 offset1'>
						<h5 class='page-header'><p class='muted'>关于我们</p></h5>
					</div>
				</div>
				 <div class='row-fluid'>
                                        <div class='span6 offset1' style='margin-top:-20px'>
                                                <p class='text-info' align='left' font-size='5px'><small>
                                                        <strong>国家计算机质检中心</strong></a><br>
                                                        <strong>存储测评中心</strong></a></small>
						</p>
                                        </div>
                                </div>

			</div>
		</div>
		<div class='row-fluid' align='center' style='background-color:white;font-size:5px'>
			Copyright &copy; <?php echo date('Y'); ?> by NCTC.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div>
	</div><!--container-->
	
</body>
</html>
