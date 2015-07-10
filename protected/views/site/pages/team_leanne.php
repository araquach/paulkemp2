<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Leanne Bartlett - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Leanne Bartlett"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Leanne recently joined the team after working at a reputable salon in Stockton Heath. Her passion lies in creating quirky, individual looks and is skilled in colour correction."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/leanne_og.jpg"; ?>

<section id="team_ind">
<div id="team_leanne" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Leanne Bartlett</h2>
	<p>Leanne recently joined the team after working at a reputable salon in Stockton Heath. </p>
	<p>Her passion lies in creating quirky, individual looks and is skilled in colour correction.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Leanne : &pound;55*</p>
	
	<?php echo CHtml::link('<p class="offer">Special Introductory offers with Leanne &gt;</p>',array('site/page', 'view'=>'new')); ?>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'leanne')); ?>
	
	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
	   'href' => 'http://www.paulkemphairdressing.com/leanne', 
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