<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Leon Pritchard - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Leon Pritchard"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Leon has quickly built up a strong reputation for his skills in cutting, colouring &amp; styling hair. He's a big hit in the salon due to his friendly personality. He came to us after working at Daniel Anderson Hairdressing and is fast expanding his ever growing client base."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/staff/leon_og.jpg"; ?>

<section id="team_ind">
	<div id="team_leon" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Leon Pritchard</h2>
	<p>Leon has quickly built up a strong reputation for his skills in cutting, colouring &amp; styling hair.</p>
	<p>He's a big hit in the salon due to his friendly personality.</p>
	<p>He came to us after working at Daniel Anderson Hairdressing and is fast expanding his ever growing client base.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Leon : &pound;96*</p>
	
	<?php echo CHtml::link('Click here to see the full team &gt;',array('site/page','view'=>'team')); ?>
		
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->