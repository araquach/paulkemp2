<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Megan Mullaney - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Megan Mullaney"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Meg joined the team as an apprentice and quickly demonstrated her natural flair for hairdressing. After completing her training she is now a Graduate stylist in the team. Meg has great talent for hair up styling and her cutting and colouring skills are extremely strong"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/meg_og.jpg"; ?>

<section id="team_ind">
<div id="team_meg" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Megan Mullaney</h2>
	<p>Meg joined the team as an apprentice and quickly demonstrated her natural flair for hairdressing.</p> 
	<p>After completing her training she is now a Graduate stylist in the team.</p>
	<p>Meg has great talent for hair up styling and her cutting and colouring skills are extremely strong</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Meg : &pound;56*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'meg')); ?>
	
	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
	   'href' => 'http://www.paulkemphairdressing.com/meg', 
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