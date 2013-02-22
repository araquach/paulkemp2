<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Offers - Hairdressers in Cheshire';

?>

<section id="offersMain">

<h2>Special Offers</h2>

<ul id="offerlist">
<?php echo CHtml::link(
'<li id="offer1">
<div class="offer_copy">
<h3>Hair Reborn Package 1</h3>
<p><strong>A limited edition package worth &pound;150</strong></p>
<p>for just &pound;75</p>
<p class="small">until 31/03/13<br>
  For New Clients - not with any other offer - excludes Saturday - <br>Skin Test required 48 hours prior to colour services</p></a>
</div>
</li>', array('site/page','view'=>'reborn'));?>

<?php echo CHtml::link(
'<li id="offer3">
<div class="offer_copy">
<h3>Hair Reborn Package 2</h3>
<p>25% off a Cut, Dry &amp; Style</p>
<p>PLUS a FREE in salon treatment and take home product</p>
<p class="small">offer until 31/03/13<br>
  For New Clients - not with any other offer - excludes Saturday</p></a>
</div>  
</li>', array('site/page', 'view'=>'reborn2'));?>
<!--
<li id="offer3">
  <h3>FREE product worth up to &pound;10</h3>
  <p>with every Cut, Dry &amp; Style<br>
    Book in before the end of January for a Cut, Dry &amp; Style to receive a £10 product voucher absolutely FREE!</p>
    <p class="small">until 31/01/13<br>
    For New Clients - not with any other offer. Excludes Saturday</p></a>
</li>

<li id="offer3"><a href="news.php#Tash">
  <h3>A Cut &amp; Colour for just &pound;25</h3>
  <p>with our soon-to-be qualified trainee stylist</p><p class="small">until 29/06/12<br>
    For New clients - not with any other offer<br>Excludes Saturday</p></a></li>

<li id="offer4"><a href="kebelo">
  <h3>FREE Cut, Dry &amp; Style</h3>
  <p>with every Kebelo System Treatment</p><p class="small">extended until 30/11/12<br>
    not with any other offer<br>Excludes Saturday</p></a></li>
  -->  
 </ul>  
 
 </section> 
 
 <!--
 <section id="no_offer">
  </section> 
 <section id="no_offercopy">
 <h2>Special Offers</h2>
 <p>Look out for some great offers in the New Year!</p>
 <p>
 	<a href="http://www.facebook.com/PaulKempHairdressing" target="_blank">Visit our Facebook page - we occasionally run ad-hoc offers </a>
 </p>
 </section> <!--offercopy-->

  
