<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "This Month's Special Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Free Colour with every Cut, Dry & Style for new customers this month"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] = "http://www.paulkemphairdressing.com/images/offer/new_offer_meta.jpg"; ?>

<section id="offersMain">

<h2>Offers</h2>


<section id="offerlist">

<div id="offer1" class="offer">
<h3>FREE Colour <br>with every<br>Cut, Dry &amp; Style</h3>
<p>For new clients</p>
<p class="small">offer extended until <time datetime="2014-06-27">27/06/14</time><br>
  For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>

<div id="offer3" class="offer">
<h3>30% Off<br>Men's Cut &amp; Style</h3>
<p>For new clients<br>until the end of June</p>
<p class="small">offer extended until <time datetime="2014-06-27">27/06/14</time><br>
  For New Clients Only - not with any other offer - excludes Saturday</p>
</div>
  
<?php  echo CHtml::link('<div id="offer4" class="offer">
  <h3>FREE Cut, Dry &amp; Style</h3>
  <p>with every Kebelo System <br>Treatment</p><p class="small">extended until <time datetime="2014-06-27">27/06/14</time><br>
    not with any other offer<br>Excludes Saturday</p>
 </div>', array('kebelo/advantage')); ?>
 
 <?php echo CHtml::link('<p id="book_button">Click here to make a booking</p>',array('site/contact')); ?>
 
 </section> <!--end offerlist-->
 
 
 
 </section> <!--end offersMain-->
 
 


