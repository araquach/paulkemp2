<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Kellie Reedy - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Kellie Reedy"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Salon manager Kelly has 12 years experience working in Warrington town centre.  She holds a place as a pivotal member at Paul Kemp Hairdressing. She specialises in long hair styling, she is also the extension expert within the salon."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/kel_og.jpg"; ?>

<section id="team_ind">
	<div id="team_kel" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Kellie Reedy</h2>
	<p>Salon manager Kelly has 12 years experience working in Warrington town centre.</p>
	<p>She holds a place as a pivotal member at Paul Kemp Hairdressing.</p> 
	<p>She specialises in long hair styling, she is also the extension expert within the salon.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Kelly : &pound;114*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team', '#'=>'kel')); ?>

		
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->