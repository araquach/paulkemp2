<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Michelle Railton - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Michelle Railton"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Michelle is the latest stylist to join the team. A former stylist at Daniel Anderson Hairdressing, Michelle is a highly skilled hairdresser, she especially loves soft, natural styles and men's indie/mod cutting."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/michelle_og.jpg"; ?>

<section id="team_ind">
<div id="team_michelle" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Michelle Railton</h2>
	<p>Michelle is the latest stylist to join the team.</p>
	<p>A former stylist at Daniel Anderson Hairdressing, Michelle is a highly skilled hairdresser.</p>
	<p>She especially loves soft, natural styles and men's indie/mod cutting.</p> 
	<p class="team_ind_price">Average Cut &amp; Colour price with Kate : &pound;96*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team')); ?>

		
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->