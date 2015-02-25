<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Paul Kemp Hairdressing is a luxurious hair salon right in the heart of Warrington town centre. Sister salon to the award winning Jakata Hair and Beauty team, the stunning new hairdressers opened back in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise. The salons talented hairdressers are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing by highly qualified hairdressers. The salon also serves Stockton Heath, Lymm, Great Sankey, Widnes and Runcorn. Hairdressers, hairdressing, hairstyling salons in Warrington and Cheshire. Paul Kemp Hairdressing, 83 Sankey Street, Warrington, WA1 1SL, 01925 444488">
		<meta name="keywords" content="hairdressers, hairdressing, hair salons Warrington, salon, salons, salon Warrington, salons warrington, hairdressing jobs warrington, fashion colour, mens hairdressing, brazilian blowdry, Warrington, Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn">
		<meta name="author" content="Paul Kemp Hairdressing Ltd">
		<meta name="viewport" content="width=device-width" /> <!--mobile fixed width-->
		
	<?php $this->widget('ext.widgets.googleAnalytics.EGoogleAnalyticsWidget',
			array('account'=>'UA-2487518-2','domainName'=>'paulkemphairdressing.com')
	);?>	

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prospect.css" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/ipad.css" media="screen and (max-device-width: 768px)" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/mobile-nav.js'); ?>
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/mootools_core.js " type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/mootools-more.js " type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/modernizr.js " type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/selectivizr-min.js " type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 640px), only screen and (min-device-width : 719px) and (max-device-width : 721px) and (-webkit-min-device-pixel-ratio : 2) and (orientation : portrait)" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css" />
	
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<header>
	<h1>Paul Kemp Hairdressing</h1>
	</header>
	
	<?php echo $content; ?>

	<div class="clear"></div>

	<footer>
	</footer>
	
	<a href="https://www.facebook.com/PaulKempHairdressing"><div id="facebook"></div></a>
	</footer>

</div><!-- page -->

</body>
</html>
