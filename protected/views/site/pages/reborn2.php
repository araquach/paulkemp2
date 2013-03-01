<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';

?>

<div id="reborn_bground">
<section id="reborn">
 
 <h2>New Client Offer</h2>
 <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/hair_reborn_package.png" alt="Hair Reborn Package" width="321" height="107"/>
 <p>Cut &amp; Style Package</p>
 <p>With a Senior Stylist</p>
 <p class="reborn_large">Worth &pound;90</p>
 <p class="reborn_med">for only &pound;35</p>
 <br>
 <p>with a Stylist - only &pound;30</p>
 <p class="reborn_small">worth over £70</p>
 <br>	
 <p><em>Package includes:</em></p>	
 <p class="package">Cut, Dry &amp; Style<br>	
 In-Salon Hair Reborn Treatment<br>
 FREE Hair Reborn Aftercare Product</p>
 <p class="package reborn_small">New clients only, not with any other offer<br>Ends 31/03/13</p>
 
 
<p class="link"><?php echo CHtml::link('Colour &amp; Cut package also available',array('site/page','view'=>'reborn')); ?></p>

<p class="reborn_contact">Call 01925 444488 to book</p>
  
 </section> <!--#reborn-->
 </div> <!--#reborn_bground-->

  
