<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Kate O\'Halloran - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Kate O'Halloran"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Kate has the ability to put you instantly at ease and with her many years of experience she'll find a look that's perfect for you. Colouring, cutting and long hair styling are her specialities."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/kate_og.jpg"; ?>

<section id="team_ind">
	<div id="team_kate" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Kate O'Halloran</h2>
	<p>Kate has the ability to put you instantly at ease and with her many years of experience she'll find a look that's perfect for you.</p>
	<p>Colouring, cutting and long hair styling are her specialities.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Kate : &pound;96*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'kate')); ?>
	
	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
	   'href' => 'http://www.paulkemphairdressing.com/kate', 
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