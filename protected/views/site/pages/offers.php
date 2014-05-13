<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "All the latest offers at PK"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] = "http://www.paulkemphairdressing.com/images/offer/last_min_meta.jpg"; ?>

<section id="offersMain">

<h2>Offers</h2>


<section id="offerlist">

<div id="offer1" class="offer">
<h3>FREE Colour <br>with every<br>Cut, Dry &amp; Style</h3>
<p>For new clients<br>until the end of May</p>
<p class="small">offer until <time datetime="2014-05-30">30/05/14</time><br>
  For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>
  
<?php  echo CHtml::link('<div id="offer4" class="offer">
  <h3>FREE Cut, Dry &amp; Style</h3>
  <p>with every Kebelo System Treatment</p><p class="small">until <time datetime="2014-05-30">30/05/14</time><br>
    not with any other offer<br>Excludes Saturday</p>
 </div>', array('kebelo/advantage')); ?>
 
 </section> <!--end offerlist-->
 
 <?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>
 
 </section> <!--end offersMain-->


