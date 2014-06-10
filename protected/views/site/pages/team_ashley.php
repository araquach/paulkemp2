<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Ashley Tennant - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Ashley Tennant"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Ashley is our newest team member and is on a fast track apprenticeship with the aim to be a graduate stylist within 6 month's. She is now looking to further her skills. All her training is fully supervised so you can be assured you'll love the end result"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/ashley_og.jpg"; ?>

<section id="team_ind">
	<div id="team_ashley" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Ashley Tennant</h2>
	<p>Ashley is our newest team member and is on a fast track apprenticeship with the aim to be a graduate stylist within 6 month's.</p> 
	<p>She is now looking to further her skills. All her training is fully supervised so you can be assured you'll love the end result</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Ashley : &pound;15*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'ashley')); ?>

	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   		'href' => 'http://www.paulkemphairdressing.com/ashley', 
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