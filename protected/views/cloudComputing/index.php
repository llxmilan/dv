<style type="text/css">
  .product-box a{ text-decoration:none; color:orange;}
  .product-box a:hover{ text-decoration:none; color:red;}
</style>


<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . '首页';
?>
<?php
	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/wrapbootstrap.css');
	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/flexslider.css');                                                                                   
//       	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/bootstrap-image-gallery.min.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/simple-gallery.css');

	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery-1.7.2.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery.flexslider.js');	
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery.flexslider-min.js');
//       Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery.flex.js');
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/bootstrap-image-gallery.min.js');
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/load-image.min.js');

//	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/style.css');                                                                                   
//        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/prettyPhoto.css');                                                                                             Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/theme.css');                                                                                          
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/camera.js');                                                                            
//        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/skin.css');                                                                                          

?>
<div class='container'>
	<section  class="homepage-slider" id="home-slider" style="margin-left:0px;margin-right:0px">
			<div class="flexslider">
					<ul class="slides">
						<li>                                                                                                                                                  
                                                        <img src="images/cloud-computing.jpg" alt="" />
                                                        <div class='intro'>                                                                                                                           
                                                                <p><h1>云计算浪潮</h1></p>                                                                                                          
                                                                <p><span>中国的云计算刚刚起步</span></p>                                            
                                                                <p><span>建立行业的可靠云计算服务</span></p>                                                                                        
                                                        </div>                                                                                                                                        
                                                </li>         
						<li>
							<img src="images/cloudstack.jpg" alt="" />
							<div class="intro">
								<p><h1>开源云计算解决方案</h1></p>
								<p><span>加速高伸缩性的公共和私有云（IaaS）的部署、管理、配置</span></p>
								<p><span>组织和协调用户的虚拟化资源，为用户构建一个安全的多租户云计算环境</span></p>
							</div>
						</li>
						 <li>            
                                                        <img src="images/cc_3.jpg" alt="" /> 
                                                        <div class="intro">
                                                                <p><h1>云计算广阔的应用空间</h1></p>
                                                                <p><span>IaaS、PaaS、SaaS</span></p>
                                                                <p><span>政府、企业、个人</span></p>
                                                        </div>
                                                </li>

					</ul>
			</div>
	</section>
	<h3 class="short_headline" style='margin-top:30px'><span>云计算在国外</span></h3>
	<section>
		<div class='row'>
				<div class='span4'>
				<p>AWS发布OpsWorks，Elastic Beanstalk和CloudFront 等PaaS功能；谷歌在GAE之外推了GCE ；Salesforce.com集成了PaaS产品Force.com和Heroku ；Windows Azure跨IaaS、PaaS和SaaS，要打造私有云、公有云、混合云的统一管理云平台 。
				</p>
				<p>Amazon 在美国的云计算产业系统中地位至关重要，其AWS服务已成为IaaS服务标准，是整个云计算服务的基石，由于AWS服务，特别是EC2和S3服务的低成本和稳定性，吸引了大量的互联网公司的使用，而其他的IaaS服务商也都以Amazon 为标杆，提供一些差异性的服务。
基于这些成熟、高性价比的IaaS服务，大量的PaaS、SaaS服务涌现，各种各样的平台和服务基于它衍生，大量的基于云的迁移、规划、测试等细分服务出现，满足了企业用户方方面面的需求。
				</p>
				</div>
				<!--close span4--> 
				<!-- thumbnail layout-->
				<div class="span8">
						<div class="thumb-gallery three-columns">
								<ul class="icon-hover">
									<li><img src="images/windows_azure.jpg" alt="" />
							 		</li>
									<li><img src="images/amazon_aws.png" alt="" />
							 		</li>
									<li><img src="images/SmartCloud_Foundation.jpg" alt="" />
							 		</li>
									<li><img src="images/googlecloud.jpg" alt=""/>
							 		</li>
									<li><img src="images/emc_cloud.jpg" alt="" />
							 		</li>
									<li><img src="images/oracle_cloud.png" alt="" />
							 		</li>
								</ul>
						</div>
				</div>
		</div>
	</section>
	</div>
	<h3 class="short_headline" style='margin-top:100px'><span>云计算在中国</span></h3>
        <section>
                <div class='row'>
                                <div class='span4'>
                                        <p style='text-indent:2em'>国内，在梳理了300余家创新云计算服务提供商之后发现，融合现状更为明显，云生态系统会取代传统三类划分。其中，云平台提供商和云应用服务提供商渐成生态系统主流。</p>
                                <p style='text-indent:2em'>
				2012年，中国云呈现出爆发之势，联想、百度、腾讯、移动、联通、浪潮、阿里巴巴、华为、新浪、华胜天成：从传统的硬件厂商，软件厂商，到新兴的互联网公司、运营商，全面布局的云战略。各个地方政府有关云中心的角逐更加激烈。据统计，全国提出云计算发展计划的地方政府已覆盖了30多个省市自治区。不仅包括国家五个云计算试点城市，还有众多省市地区也纷纷将云计算作为十二五的重点发展方向。
				</p>
				</div>
                                <!--close span4-->
                                <!-- thumbnail layout-->
                                <div class="span8">
                                                <div class="thumb-gallery three-columns">
                                                                <ul class="icon-hover">
                                                                        <li><img src="images/alibaba_cloud.jpg" alt="">
                                                                        </li>
                                                                        <li><img src="images/baidu_cloud.jpg" alt="">
                                                                        </li>
                                                                        <li><img src="images/sina_cloud.png" alt="">
                                                                        </li>
                                                                        <li><img src="http://placehold.it/240x160" alt="">
                                                                        </li>
                                                                        <li><img src="http://placehold.it/240x160" alt="">
                                                                        </li>
                                                                        <li><img src="http://placehold.it/240x160" alt="">
                                                                        </li>
                                                                </ul>
                                                </div>
                                </div>
                </div>
        </section>
	<div class='row'>
		<p>
		</p>
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
