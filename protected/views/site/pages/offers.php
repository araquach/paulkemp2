<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "New Client offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "1/2 Price Colour with every Cut, Dry & Style for new clients extended throughout June"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] = "http://www.paulkemphairdressing.com/images/offer/katharina_meta.jpg"; ?>

<section id="offersMain">

<h2>New Client Offers</h2>


<section id="offerlist">

<div id="offer1" class="offer">
<h3>1/2 Price Colour with every<br>Cut, Dry &amp; Style</h3>
<p>For new clients<br>until the end of May</p>
<p class="small">offer until <time datetime="2015-06-30">30/06/15</time><br>
  For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>

<div id="offer3" class="offer">
  <h3>Men's Cut &amp; Style</h3>
  <p>For &pound;16 with a Stylist<br>&pound;20 with a Senior Stylist<br></p>
    <p class="small">until <time datetime="2015-06-30">30/06/15</time><br>
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
 
 </section> <!--end offerlist-->
 
 </section> <!--end offersMain-->

 

 
 


