<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Tash Bailey - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Tash Bailey"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Tash's passion for hairdressing is apparent from the minute you meet her. She loves creative colouring and cutting plus she's highly skilled in styling hair."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/tash_og.jpg"; ?>

<section id="team_ind">
<div id="team_tash" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Tash Bailey</h2>
	<p>Tash's passion for hairdressing is apparent from the minute you meet her.</p>
	<p>She loves creative colouring and cutting plus she's highly skilled in styling hair. </p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Tash : &pound;76*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team')); ?>
		
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->