<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Michelle Railton - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Michelle Railton"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Michelle is a highly skilled hairdresser with loads of experience. She rapidly becoming a very highly sought after stylist in the salon. She especially loves soft, natural styles and men's indie/mod cutting."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/michelle_og.jpg"; ?>

<section id="team_ind">
<div id="team_michelle" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Michelle Railton</h2>
	<p>Michelle is a highly skilled hairdresser with loads of experience. She is rapidly becoming a very highly sought after stylist in the salon. </p>
	<p>She especially loves soft, natural styles and men's indie/mod cutting.</p> 
	<p class="team_ind_price">Average Cut &amp; Colour price with Michelle : &pound;96*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'michelle_r')); ?>
	
	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
	   'href' => 'http://www.paulkemphairdressing.com/michelle', 
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