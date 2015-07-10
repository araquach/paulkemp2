<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Caleb Barrie - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Caleb Barrie"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Caleb is a diverse stylist with a real passion for hairdressing. He's a recent addition to the team. He’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry’s."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/caleb_og.jpg"; ?>

<section id="team_ind">
<div id="team_caleb" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Caleb Barrie</h2>
	<p>Caleb is a diverse stylist with a real passion for hairdressing. He's a recent addition to the team.</p>
	<p>He’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry’s.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Caleb : &pound;96*</p>
	
	<?php echo CHtml::link('<p class="offer">Special Introductory offers with Caleb &gt;</p>',array('site/page', 'view'=>'new')); ?>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'caleb')); ?>
	
	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
	   'href' => 'http://www.paulkemphairdressing.com/caleb', 
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