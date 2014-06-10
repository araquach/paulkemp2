<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Jack Broady - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Jack Broady"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Jack came onboard at the end of 2012 and is now an influential member of the team as head of training. He's been hairdressing since the age of 13. He loves all aspects including mens cutting &amp; styling. His speciality is cutting and colouring long hair."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/jack_og.jpg"; ?>

<section id="team_ind">
	<div id="team_jack" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Jack Broady</h2>
	<p>Jack came onboard at the end of 2012 and is now an influential member of the team as head of training.</p>
	<p>He's been hairdressing since the age of 13. He loves all aspects including mens cutting &amp; styling.</p>
	<p>His speciality is cutting and colouring long hair.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Jack : &pound;96*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'jack')); ?>
	
	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
	   'href' => 'http://www.paulkemphairdressing.com/jack', 
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