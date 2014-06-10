<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Jo Mahoney - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Jo Mahoney"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Jo is a fantastic stylist with many years experience, she's a real long standing asset to the team. Her down to earth nature instantly puts you at ease and her hairdressing skills really shine. She loves doing men and women's hair. Book well in advance - she's a very busy stylist."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/jo_og.jpg"; ?>

<section id="team_ind">
	<div id="team_jo" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Jo Mahoney</h2>
	<p>Jo is a fantastic stylist with many years experience, she's a real long standing asset to the team.</p> 
	<p>Her down to earth nature instantly puts you at ease and her hairdressing skills really shine.</p>
	<p>She loves doing men and women's hair. Book well in advance - she's a very busy stylist. </p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Jo : &pound;114*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'jo')); ?>
	
	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
	   'href' => 'http://www.paulkemphairdressing.com/jo', 
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