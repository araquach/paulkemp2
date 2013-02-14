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
 <p>for only &pound;75</p>
 <br>
 <p>with a Stylist - only &pound;65</p>
 <p class="reborn_small">worth over £130</p>
 <br>
 <p><em>Package includes:</em></p>
 <p class="package">Colour & Cut<br>
 In-Salon Hair Reborn Treatment<br>
 FREE Hair Reborn Aftercare<br>
 (product pack worth over £40)</p>
 <p class="package reborn_small">New clients only, not with any other offer</p>
 
 
 <?php echo CHtml::link('Find out more here',array('site/page','view'=>'reborn')); ?>
  
 </section> <!--#reborn-->
 </div> <!--#reborn_bground-->

  
