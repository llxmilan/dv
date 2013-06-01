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
       	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/bootstrap-image-gallery.min.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/protected/extensions/simple-gallery.css');

	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery-1.7.2.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery.flexslider.js');	
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery.flexslider-min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/protected/extensions/jquery.flex.js');
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
	<h3 class="short_headline" style='margin-top:30px'><span>现有的云计算</span></h3>
	<section>
		<div class='row'>
				<div class='span4'>
					<p>Images in public domain. We will increase our aptitude to evolve without decrementing our capacity to leverage. It may seem marvelous, but it's true!</p>
					<p> We apply the proverb "Look before you leap" not only to our structuring but our power to mesh. We practically invented the term "e-businesses". We invariably revolutionize robust obfuscation. That is a remarkable achievement considering the current and previous fiscal year's financial state of things! Is it more important for something to be virally-distributed or to be user-defined? The R&amp;D factor is real-time. The CAD factor is 24/7, best-of-breed. Your budget for empowering should be at least one-tenth of your budget for reintermediating. </p>
				</div>
				<!--close span4--> 
				<!-- thumbnail layout-->
				<div class="span8">
						<div class="thumb-gallery three-columns">
								<ul class="icon-hover">
									<li><img src="images/windows_azure.jpg" alt="">
							 		</li>
									<li><img src="images/amazon_aws.png" alt="">
							 		</li>
									<li><img src="http://placehold.it/240x160" alt="">
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
	</div>
	<h3 class="short_headline" style='margin-top:100px'><span>现有的云计算</span></h3>
        <section>
                <div class='row'>
                                <div class='span4'>
                                        <p>Images in public domain. We will increase our aptitude to evolve without decrementing our capacity to leverage. It may seem marvelous, but it's true!</p>
                                        <p> We apply the proverb "Look before you leap" not only to our structuring but our power to mesh. We practically invented the term "e-businesses". We invariably revolutionize robust obfuscation. That is a remarkable achievement considering the current and previous fiscal year's financial state of things! Is it more important for something to be virally-distributed or to be user-defined? The R&amp;D factor is real-time. The CAD factor is 24/7, best-of-breed. Your budget for empowering should be at least one-tenth of your budget for reintermediating.We apply the proverb "Look before you leap" not only to our structuring but our power to mesh. We practically invented the term "e-businesses". We invariably revolutionize robust obfuscation. </p>
                                </div>
                                <!--close span4-->
                                <!-- thumbnail layout-->
                                <div class="span8">
                                                <div class="thumb-gallery three-columns">
                                                                <ul class="icon-hover">
                                                                        <li><img src="images/alibaba_cloud.jpg" alt="">
                                                                        </li>
                                                                        <li><img src="http://placehold.it/240x160" alt="">
                                                                        </li>
                                                                        <li><img src="http://placehold.it/240x160" alt="">
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

</div>
<?php
/*
$this->widget('bootstrap.widgets.TbThumbnails', array(
	'dataProvider'=>$listDataProvider,
	'template'=>"{items}\n{pager}",
	'itemView'=>'_thumb',
));
*/
?>
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
