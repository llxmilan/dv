<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . '首页';
?>

<?php
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery.scrolltotop.js');
?>

<div class="container">
	<div class='row'>
		<div class='span8'>
			<div class='row'>
				<div class='span8'>
					<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    						'items'=>array(
        						array('image'=>'../images/datawarehouse_1.jpg', 'label'=>'大数据到来了', 'caption'=>'信息化时代，每年产生的数据量都以几何级数增长，大数据的各种相关概念、技术层出不穷，一直不停地吸引大家的眼球。现在的大数据概念不仅仅是进行抓取、管理和处理的数据的统称'), 
       							array('image'=>'../images/datawarehouse_2.jpg', 'label'=>'构建数据仓库', 'caption'=>'从数据集市（Data Mart）、操作数据存储（ODS）到企业级数据仓库（EDW）的流派之争，到开始重视数据的展现与应用、数据管控；从传统的结构化数据，到半结构与非结构化数据，数据仓库相关领域已经有了长足的发展与进步，而过去5年左右的发展，更是超过了之前差不多20年的累计，并且正以越来越快的速度向前发展'),
        						array('image'=>'../images/datawarehouse_3.jpg', 'label'=>'海量数据分布式处理架构', 'caption'=>'企业采用Hadoop需要经历三个发展阶段，从一开始用来存储海量数据，到对数据进行处理和转换，到最终开始分析这些数据。而现在，我们还处于Hadoop市场和技术生命周期的早期阶段 '),
   						),
					)); ?>
				</div>
			</div>
			<div class='row'>
				<div class='span8'>
					<div class="media">
  						<a class="pull-left" href="#">
    							<img src='../images/big data.jpg' class="media-objecct" data-src="http://placehold.it/64x64">
  						</a>
  						<div class="media-body">
    							<h4 class="media-heading">大数据产业价值凸显 或成为下一个金矿</h4>
    							<div class="media">
      								有人形容当今的商业世界，如同一个漂浮在数据海洋上的巨轮，因此大数据可以作为一种科技手段去撬动和服务于现有的产业，其自身也可以形成一个产业并表现出投资价值.
    							</div>
  						</div>
					</div>
				</div>
			</div>
                        <h6 class='page-header'></h6>

			 <div class='row'>
                                <div class='span8'>
                                        <div class="media">
                                                <a class="pull-left" href="#">
                                                        <img src='../images/big data_2.jpg' class="media-objecct" data-src="http://placehold.it/64x64">
                                                </a>
                                                <div class="media-body">
                                                        <h4 class="media-heading">Cloudera释放Impala 1.0：与Hadoop完全整合，各方面完爆Hive</h4>
                                                        <div class="media">
                                                                Cloudera于近日释放了Impala 1.0版本，新的版本实现与Hadoop的完全整合，支持ANSI-92 SQL所有子集。Hive更是再次躺枪??在与Hive的对比中，Impala并发客户端处理的速度上甚至超越了单机Hive!
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <h6 class='page-header'></h6>

			 <div class='row'>
                                <div class='span8'>
                                        <div class="media">
                                                <a class="pull-left" href="#">
                                                        <img src='../images/LinkedIn.jpg' class="media-objecct" data-src="http://placehold.it/64x64">
                                                </a>
                                                <div class="media-body">
                                                        <h4 class="media-heading">LinkedIn：55人支持2700位员工，2亿用户的大数据分析</h4>
                                                        <div class="media">
                                                        	张溪梦所带领的LinkedIn商业分析部团队只有55人，却可以通过集成数据架构、BI、数据挖掘和分析来满足2700-3000位LinkedIn内部员工对2亿注册用户，研发、产品、市场推广、销售和运营等多方面的需求
							</div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <h6 class='page-header'></h6>

			<div class='row'>
                                <div class='span8'>
                                        <div class="media">
                                                <a class="pull-left" href="#">
                                                        <img src='../images/FaceBook.jpg' class="media-objecct" data-src="http://placehold.it/64x64">
                                                </a>
                                                <div class="media-body">
                                                        <h4 class="media-heading">Facebook vs. Google：撇开搜索，数据中心产业上的又一竞技</h4>
                                                        <div class="media">
                                                        今天，Facebook和谷歌同时宣布了关于爱荷华州数据中心的大项目。其中，Facebook将投资3亿美元，建立一个新的数据中心；Google则将斥资4亿美元建设现有的数据中心业务，使其在该地区的总支出达到15亿美元.
							</div>
                                                </div>
                                        </div>
                                </div>
			</div>	
		</div>
		<div class='span3 offset1'>
			<!--div class='row' align='middle'>
				<?php $this->widget('bootstrap.widgets.TbLabel',array(
					//'type'=>'info',
					'label'=>'构建数据仓库',
					'htmlOptions'=>array('style'=>'width:95%;height:30px'),
			)); ?>
			</div-->
			<!--div class='row' align='middle'>
				<h3>如何构建数据仓库</h3>
			</div-->
			<div class='row'>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
    					'type'=>'primary',
    					'label'=>'构建数据仓库',
    					'block'=>true,
				)); ?>
			</div>
			<!--div class='row'>
				<div class="progress">
  					<div class="bar" style="width: 80%;" text='ni'></div>
				</div>
			</div-->
			<div class='row'>
				<a href="#" class='thumbnail' rel='tooltip' data-title='数据收集'>
					<img src="../images/data_collection.jpg" alt="">
				</a>
			</div>
			<li class='row'>                                                                                                                                                              
                                <a href="#" class='thumbnail' rel='tooltip' data-title='数据存储'>                                                                                                    
                                        <img src="../images/data storage.jpg" alt="">                                                                                                                          
                                </a>                                                                                                                                                                  
                        </li>       
			<li class='row'>
                                <a href="#" class='thumbnail' rel='tooltip' data-title='数据清洗'>
                                        <img src="../images/ETL.jpg" alt="">
                                </a>
                        </li>
			<li class='row'>
                                <a href="#" class='thumbnail' rel='tooltip' data-title='数据集成'>
                                        <img src="../images/data-integration.jpg" alt="">
                                </a>
			</li>
		</div>
	</div>
	

</div>
<!--
<li class="span2">
    <a href="#" class="thumbnail" rel="tooltip" data-title="twitter实时数据">
	<img src="../../images/twitter_1.jpg" alt="" height="25%" width="95%">
    </a>
</li>

<li class="span2">
    <a href="#" class="thumbnail" rel="tooltip" data-title="小说标签可视化">
        <img src="../../images/Plot-lines.jpg" alt="" height="25%" width="90%">
    </a>
</li>

<li class="span2">
    <a href="#" class="thumbnail" rel="tooltip" data-title="能源与医疗可视化">
        <img src="../../images/VizInsight.png" alt="" height="25%" width="100%">
    </a>
</li>

                                                                                                                                                                                                      
<li class="span2">                                                                                                                                                                                    
    <a href="#" class="thumbnail" rel="tooltip" data-title="追踪个人信息">                                                                                                                        
        <img src="../../images/bigdata_1.jpg" alt="" height="25%" width="90%">
    </a>                                                                                                                                                                                              
</li>

                                                                                                                                                                                                      
<li class="span2">                                                                                                                                                                                    
    <a href="#" class="thumbnail" rel="tooltip" data-title="Ayasdi公司可视化">                                                                                                                        
        <img src="../../images/Ayasdl.jpg" alt="" height="100%" width="70%">                                                                                                                      
    </a>                                                                                                                                                                                              
</li>
-->
