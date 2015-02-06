<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "February Special Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Colour & Cut for just £80 with Senior Stylists, £65 with Stylists for new clients throughot February"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] = "http://www.paulkemphairdressing.com/images/offer/Asian_Lucy_123_meta.jpg"; ?>

<section id="offersMain">

<h2>February Offers</h2>

<section id="offerlist">

<div id="offer1" class="offer"><h3>Senior Stylist Colour &amp; Cut Package</h3>
<p>for just &pound;80</p>
<p>with any of our Senior Stylists</p>
<p class="small">offer extended until <time datetime="2015-02-27">27/02/15</time><br>
  For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>

<div id="offer2" class="offer">
  <h3>Stylist Colour &amp; Cut Package</h3>
  <p>for just &pound;65<br>
    with any of our Stylists</p>
    <p class="small">offer until <time datetime="2015-02-27">27/02/15</time><br>
      For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>

<div id="offer3" class="offer">
  <h3>Men's Cut &amp; Style</h3>
  <p>For &pound;16 with a Stylist<br>&pound;20 with a Senior Stylist<br></p>
    <p class="small">until <time datetime="2015-02-27">27/02/15</time><br>
      For New Clients Only - not with any other offer - excludes Saturday</p>
</div>

<div id="fb_like">
<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   'href' => 'http://www.paulkemphairdressing.com/offers', 
   'show_faces'=>false,
   'send' => true,
   'width' => '250px'
));  ?>
</div>


</section>

</section> <!--end offersMain-->


 
 


