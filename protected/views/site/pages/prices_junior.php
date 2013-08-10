<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Trainee Prices - Hairdressers in Cheshire';

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/prices.js');
?>

<section class="price_page">
<h2>Prices</h2>

<div id="price_link">
<?php echo CHtml::link('For senior stylist Prices Click Here',array('site/page','view'=>'prices_stylist')); ?>
</div>

<div class="price_panel">
<h3 class="level">Graduate/Junior Stylists</h3>
<table class="priceTable">
<tr border="1">
<th class="firstcolumn"><h3>Colour, Cut &amp; Style</h3></th>
<th><h4 class="experience">Graduate Stylist</h4></th>
<th><h4 class="experience">Junior Stylist</h4></th>
<th><h4 class="experience">Junior</h4></th>
</tr>
<tr>
<td><strong>One</strong></td>
<td>&pound;59.95<br></td>
<td>&pound;44.95<br></td>
<td>&pound;29.95<br></td>
</tr>
<tr>
<td><strong>Two</strong></td>
<td>&pound;69.95</td>
<td>&pound;51.95</td>
<td>&pound;33.95</td>
</tr>
<tr>
<td><strong>Three</strong></td>
<td>&pound;79.95</td>
<td>&pound;58.95</td>
<td>&pound;37.95</td>
</tr>
<tr>
<th><h3>Colour &amp; Blowdry</h3></th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>
<tr>
<td><strong>One</strong></td>
<td>&pound;49.95</td>
<td>&pound;37.95</td>
<td>&pound;25.95</td>
</tr>
<tr>
<td><strong>Two</strong></td>
<td>&pound;59.95</td>
<td>&pound;44.95</td>
<td>&pound;29.95</td>
</tr>
<tr>
<td><strong>Three</strong></td>
<td>&pound;69.95</td>
<td>&pound;51.95</td>
<td>&pound;33.95</td>
</tr>
</table>

<section id="corrective">
    <h4>Corrective Colour</h4>
    <p>If you've had a home hair colouring disaster, or a bad colour experience in another salon, we will correct &amp; transform your hair to how you wanted it in the first place! Our expert colour team will give you a price on consultation.</p>
</section>

<table>
<th><h3></h3></th>
<th><h4 class="experience">Graduate Stylist</h4></th>
<th><h4 class="experience">Junior Stylist</h4></th>
<th><h4 class="experience">Junior</h4></th>
<tr>
<td class="firstcolumn"><h4>Cut, Dry &amp; Style</h4></td>
<td>&pound;29.95</td>
<td>&pound;20.95</td>
<td>&pound;11.95</td>
</tr>
<tr>
<td><h4>Blow Dry</h4></td>
<td>&pound;19.95</td>
<td>&pound;13.95</td>
<td>&pound;7.95</td>
</tr>
<tr>
<td><h4>Curly Blow Dry</h4></td>
<td>&pound;24.95</td>
<td>&pound;18.95</td>
<td>&pound;12.95</td>
</tr>
<tr>
<td><h4>Mens Cut &amp; Style</h4></td>
<td>&pound;17.95</td>
<td>&pound;11.95</td>
<td>&pound;5.95</td>
</tr>
</table>
</div> <!--price_panel-->

<table class="key">
<td><strong>One</strong></td>
<td>Root touch up, top/parting foils or full head colour (short), colour gloss</td>
</tr>
<tr>
<td><strong>Two</strong></td>
<td>Roots &amp; Refresh, full head colour (mid length), creative colouring, light to dark</td>
</tr>
<tr>
<td><strong>Three</strong></td>
<td>Full head foils, technical creative colour, full head colour (long), dark to light</td>
</tr>
</table>



<section id="skintest">
<h4>Skin Test Policy</h4>
<p>New clients require a skin test 48 hours prior to any colour service. It's a simple procedure that only takes a minute or two. Please mention when booking your appointment</p>
</section> <!--skintest-->
</section> <!--price_page-->