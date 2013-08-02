<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';

?>

<!--<div id="offer1">
  <h3>FREE Colour <br>with every <br>Cut, Dry &amp; Style</h3>
  <p>For new clients <br>throughout June
    </p>
    <small>until 29/06/13<br>
    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small></a>
</div>
 
</section> <!- -#offersMain- -*>-->


<section id="offersMain">

<h2>Special Offers</h2>

<section id="offerlist">

<div id="offer1" class="offer"><h3>Senior Stylist Colour &amp; Cut Package</h3>
<p>for just &pound;60</p>
<p>with any of our Senior Stylists</p>
<p class="small">offer until <time datetime="2013-08-30">30/08/13</time><br>
  For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>

<div id="offer2" class="offer">
  <h3>Stylist Colour &amp; Cut Package</h3>
  <p>for just &pound;40<br>
    <p>with any of our Stylists</p>
    <p class="small">offer until <time datetime="2013-08-30">30/08/13</time><br>
      For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
 </div>

<?php echo CHtml::link('<div id="offer3" class="offer">
  <h3>A Cut &amp; Colour for just &pound;30</h3>
  <p>with our new graduate stylist Megan</p><p class="small">offer extended until <time datetime="2013-08-16">16/08/13</time><br>
    For New clients - not with any other offer<br>Excludes Saturday</p>
</div>', array('site/page','view'=>'graduate')); ?>

<?php echo CHtml::link('<div id="offer4" class="offer">
  <h3>FREE Cut, Dry &amp; Style</h3>
  <p>with every Kebelo System Treatment</p><p class="small">until <time datetime="2013-08-30">30/08/13</time><br>
    not with any other offer<br>Excludes Saturday</p>
 </div>', array('kebelo/advantage')); ?>
    
 </section>   <!--offerlist--> 
 
 </section> <!--offersMain-->

 
 
 <!--<section id="no_offer">
  </section> 
 <section id="no_offercopy">
 <h2>Special Offers</h2>
 <p>Look out for some great offers soon!</p>
 <p>
 	<a href="http://www.facebook.com/PaulKempHairdressing" target="_blank">Visit our Facebook page to keep up to date with the latest offers</a>
 </p>
 </section> <!- -no_offer-->

 