<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<meta name="description" content="Paul Kemp Hairdressing is a luxurious hair salon right in the heart of Warrington town centre. Sister salon to the award winning Jakata Hair and Beauty team, the stunning new hairdressers opened back in June with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise. The salons talented hairdressers are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing by highly qualified hairdressers. The salon also serves Stockton Heath, Lymm, Great Sankey, Widnes and Runcorn. Hairdressers, hairdressing, hairstyling salons in Warrington and Cheshire. Paul Kemp Hairdressing, 83 Sankey Street, Warrington, WA1 1SL, 01925 444488">
		<meta name="keywords" content="hairdressers, hairdressing, hair salons Warrington, hairdressing jobs, fashion colour, mens hairdressing, brazilian blowdry, Warrington, Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn">
		
		<meta name="copyright" content="2012, Paul Kemp Hairdressing Ltd. All rights reserved.">
		<meta name="language" content="English">
		<meta name="author" content="Paul Kemp Hairdressing Ltd">
		
	<?php $this->widget('ext.widgets.googleAnalytics.EGoogleAnalyticsWidget',
			array('account'=>'UA-2487518-2','domainName'=>'paulkemphairdressing.com')
	);?>	

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pkstyles.css" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/ipad.css" media="screen and (max-device-width: 768px)" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/mootools_core.js "type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/mootools-more.js "type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/modernizr.js "type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/selectivizr-min.js "type="text/javascript"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<header>
	<hgroup>
	<h1>Paul Kemp Hairdressing</h1>
	<h2>Hairdressers in Warrington, Salons in Warrington</h2>
	</hgroup>
	<nav>
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Home', 'url'=>array('/site/index')),
			array('label'=>'The Salon', 'url'=>array('/site/page', 'view'=>'salon')),
			array('label'=>'Team', 'url'=>array('/site/page', 'view'=>'team')),
			array('label'=>'News', 'url'=>array('/site/page', 'view'=>'news')),
			array('label'=>'Recruitment', 'url'=>array('/site/page', 'view'=>'recruitment')),
			//array('label'=>'Men', 'url'=>array('/site/page', 'view'=>'men')),
			array('label'=>'Offers', 'url'=>array('/site/page', 'view'=>'offers')),
			array('label'=>'Prices', 'url'=>array('/site/page', 'view'=>'prices_stylist')),
			array('label'=>'Contact', 'url'=>array('/site/contact')),
		),
	)); ?>
	</nav>
	</header>
	
	<?php echo $content; ?>

	<div class="clear"></div>

	<footer>
	<ul id="footer_images">
	<li><a href="http://www.schwarzkopf-professional.com/" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/schwarzkopf.png" alt="Schwarzkopf - The Hairdressers choice" /></a></li>
	<li><a href="http://www.tigihaircare.com/consumer/en-UK/bedhead/" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/bedhead.png" alt="Bedhead - Proffessional Hairdressing" /></a></li>
	<li><a href="http://www.aveda.co.uk/" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/aveda.png" alt="Aveda Hairdressing Products" /></a></li>
	<li><a href="http://www.tigihaircare.com/consumer/en-UK/b4men/default.asp" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/bformen.png" alt="B for Men - mens products for hairdressers" /></a></li>
	<li><a href="http://www.ghdhair.com/" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/ghd.png" alt="ghd - for hairdressers" /></a></li>
	<li><a href="http://www.tigihaircare.com/consumer/en-UK/sfactor/default.asp" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/sfactor.png" alt="S Factor - quality brand for hairdressers" /></a></li>
	</ul>
	
	<section id="smallabout">
	<h2><strong>Paul Kemp Hairdressing</strong></h2>
	<ul>
	<li>Paul Kemp Warrington</li>
	<li>Hairdressers Warrington</li> 
	<li>Hair Salon Warrington</li> 
	<li>Salons Warrington</li>
	<li>Hairdressing Warrington</li>
	<li>Hairdressers Cheshire</li> 
	<li>Salons Cheshire</li>
	<li>Hair Salon Cheshire</li> 
	<li>Hairdressing Cheshire</li>
	<li>Hair cutting Warrington</li> 
	<li>Hair colouring Warrington</li>
	<li>Mens Hairdressing Warrington</li>
	<li>Mens Hairdressers Warrington</li> 
	<li>Technical hairdressing</li> 
	<li>Kebelo Warrington</li> 
	<li>Brazilian Blowdry Warrington</li> 
	<li>Opti-Smooth Warrington</li> 
	<li>Fashion styling Warrington</li> 
	<li>Mens cutting Warrington</li> 
	<li>Schwarzkopf Warrington</li> 
	<li>Tigi Warrington</li> 
	<li>Bedhead Warrington</li>
	<li>Osis Warrington</li>
	<li>Aveda Warrington</li>
	<li>Catwalk Warrington</li>
	<li>Bonacure Warrington</li>
	<li>Warrington Hairdressers</li>
	<li>Cheshire Hairdressers</li>
	</ul>
	</section>
	<div id="facebook"><a href="http://www.facebook.com/PaulKempHairdressing" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook_logo.png" alt="Facebook" width="25" height="25"></a>
	</div> <!--facebook-->
	</footer>

</div><!-- page -->

</body>
</html>
