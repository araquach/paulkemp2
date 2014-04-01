<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Special Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "New to Paul Kemp Hairdressing? This month we've got some not to be missed offers including a Colour & Cut package for just £40 and 30% off mens Cut & Style for new clients"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] = "http://www.paulkemphairdressing.com/images/offer/07_construct_meta.jpg"; ?>

<section id="offersMain">

<h2>April Offers</h2>

<section id="offerlist">

<div id="offer1" class="offer"><h3>Senior Stylist Colour &amp;<br> Cut Package</h3>
<p>for just &pound;60</p>
<p>with any of our Senior Stylists</p>
<p class="small">offer extended until <time datetime="2014-04-30">30/04/14</time><br>
  For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>

<div id="offer2" class="offer">
  <h3>Stylist Colour &amp; Cut Package</h3>
  <p>for just &pound;40</p>
    <p>with any of our Stylists</p>
    <p class="small">offer extended until <time datetime="2014-04-30">30/04/14</time><br>
      For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>

<div id="offer3" class="offer">
  <h3>30% off <br>Men's Cut &amp; Style</h3>
  <p>for new clients</p>
    <p>throughout April</p>
    <p class="small">offer extended until <time datetime="2014-04-28">30/04/14</time><br>
      Not with any other offer - excludes Saturday</p>
</div>

<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>

</section> <!--end offerlist-->

</section> <!--end offersMain-->

