<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "November Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Free Colour with every Cut, Dry & Style throughout November for new clients"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] = "http://www.paulkemphairdressing.com/images/offer/boho_meta.jpg"; ?>

<section id="offersMain">

<h2>November Offers</h2>


<section id="offerlist">

<div id="offer1" class="offer">
<h3>FREE Colour with every<br>Cut, Dry &amp; Style</h3>
<p>For new clients<br>until the end of November</p>
<p class="small">offer until <time datetime="2014-11-29">29/11/14</time><br>
  For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>

<div id="offer2" class="offer">
<h3>30% Off <br>Mens Cut &amp; Style</h3>
<p>For new clients<br>until the end of November</p>
<p class="small">offer until <time datetime="2014-11-29">29/11/14</time><br>
  For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>

<p>Call 01925 444488 to book</p>

<div id="fb_like">
<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   'href' => 'http://www.paulkemphairdressing.com/offers', 
   'show_faces'=>false,
   'send' => true,
   'width' => '250px'
));  ?>
</div>
  

</section> <!--end offerlist-->
 
</section> <!--end offersMain-->



 
 


