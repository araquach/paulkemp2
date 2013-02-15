<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';

?>

<div id="reborn_bground">
<section id="reborn">
 
 <h2>New Client Offer</h2>
 <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/hair_reborn_package.png" alt="Hair Reborn Package" width="321" height="107"/>
 <p>With a Senior Stylist</p>
 <p class="reborn_large">Worth &pound;150</p>
 <p class="reborn_med">for only &pound;75</p>
 <br>
 <p>with a Stylist - only &pound;65</p>
 <p class="reborn_small">worth over £130</p>
 <br>
 <p><em>Package includes:</em></p>
 <p class="package">Colour &amp; Cut<br>
 In-Salon Hair Reborn Treatment<br>
 FREE Hair Reborn Aftercare<br>
 (product pack worth over £40)</p>
 <p class="package reborn_small">New clients only, not with any other offer</p>
 
 
<p class="link"><?php echo CHtml::link('Cut &amp; Style Only packages also available',array('site/page','view'=>'reborn')); ?></p>
  
 </section> <!--#reborn-->
 </div> <!--#reborn_bground-->

  
