<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Izzy Lamb - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Izzy Lamb"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Izzy has quickly established herself as an extremely sought after stylist. Her natural flair with creating beautiful, wearable styles has built her a strong following. Izzy recently won the National Redken Style Innovator award. She is also a specialist in extensions. "; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/izzy_og.jpg"; ?>

<section id="team_ind">
	<div id="team_izzy" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Izzy Lamb</h2>
	<p>Izzy has quickly established herself as an extremely sought after stylist.</p>
	<p>Her natural flair with creating beautiful, wearable styles has built her a strong following. </p>
	<p>Izzy recently won the National <em>Redken Style Innovator</em> award. She is also a specialist in extensions. </p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Izzy : &pound;114*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'iz')); ?>
	
	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
	   'href' => 'http://www.paulkemphairdressing.com/izzy', 
	   'show_faces'=>false,
	   'send' => true,
	   'width' => '250px'
	));  ?>
	</div>
	
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->