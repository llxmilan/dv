<?php
/* @var $this NEWSController */
/* @var $data NEWS */
?>

<div class="view">

	<!--b><?php echo CHtml::encode($data->getAttributeLabel('NEWS_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NEWS_TITLE), array('view', 'id'=>$data->NEWS_ID)); ?>
	<br /-->

	<!--b><?php echo CHtml::encode($data->getAttributeLabel('NEWS_TITLE')); ?>:</b-->
	<h3 align='center'><?php echo CHtml::encode($data->NEWS_TITLE); ?></h3>
	
        <!--b><?php echo CHtml::encode($data->getAttributeLabel('NEWS_PUbLISHDATE')); ?>:</b-->
        <h5 align='center'><?php echo CHtml::encode($data->NEWS_PUbLISHDATE);?>
		&nbsp;&nbsp;&nbsp;
	<?php
			echo '自:' . $data->NEWS_SOURCE .'.com';
	?></h5>
	<?php
		$imagesurl=$data->NEWS_IMAGEPATH;
		if($imagesurl)
		{
			$images=explode(",",$imagesurl);
				for($i=0;$i<count($images);$i++)
				{
					$image= substr($images[$i],9);
	?>
	<p align='center'><a><img src="<?php echo $image ?>"/></a><p>
	<?php
				}
		}
	?>
	<!--p align='center'><a><img alt="郭去疾是幸运的，第一次创业就能把公司送上纽交所挂牌上市" src="http://i2.sinaimg.cn/IT/2013/0606/U2550P2DT20130606144848.jpg" /></a></p-->
	<p><a><img src></a></p>
	<pre><?php echo CHtml::encode($data->NEWS_CONTENT); ?></pre>
	<br />


</div>
