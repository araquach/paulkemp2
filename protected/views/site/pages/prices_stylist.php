<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Stylist Prices - Hairdressers in Cheshire';

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScript('prices', file_get_contents('scripts/prices.js'));
?>




<section class="price_page">
<h2>Prices</h2>

<ul id="price_links">
	<li><?php echo CHtml::link('Stylist/Senior Prices',array('site/page','view'=>'prices_stylist')); ?></li>
	<li><?php echo CHtml::link('Graduate/Trainee Prices',array('site/page','view'=>'prices_junior')); ?></li>
</ul>

<div id="price_link">
<?php echo CHtml::link('For Junior/Trainee Prices Click Here',array('site/page','view'=>'prices_junior')); ?>
</div>

<div class="price_panel">
<h3 class="level">Stylist/Senior Stylists</h3>

<table class="key">
<td class="number1"></td>
<td>Root touch up, top/parting foils or full head colour (short), colour gloss</td>
</tr>
<tr>
<td class="number2"></td>
<td>Roots &amp; Refresh, full head colour (mid length), creative colouring, light to dark</td>
</tr>
<tr>
<td class="number3"></td>
<td>Full head foils, technical creative colour, full head colour (long), dark to light</td>
</tr>
</table>

<table class="priceTable">
<tr>
<th class="firstcolumn"><h3>Colour, Cut &amp; Style</h3></th>
<th><h4 class="experience">Director</h4></th>
<th><h4 class="experience">Senior Stylists</h4></th>
<th><h4 class="experience">Stylists</h4></th>
</tr>
<tr>
<td class="number1"></td>
<td>&pound;96.95</td>
<td>&pound;87.95</td>
<td>&pound;74.95</td>
</tr>
<tr>
<td class="number2"></td>
<td>&pound;113.95</td>
<td>&pound;103.95</td>
<td>&pound;87.95</td>
</tr>
<tr>
<td class="number3"></td>
<td>&pound;130.95</td>
<td>&pound;119.95</td>
<td>&pound;100.95</td>
</tr>
<tr>
<th><h3>Colour &amp; Blowdry</h3></th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>
<tr>
<td class="number1"></td>
<td>&pound;78.95</td>
<td>&pound;72.95</td>
<td>&pound;61.95</td>
</tr>
<tr>
<td class="number2"></td>
<td>&pound;96.95</td>
<td>&pound;85.95</td>
<td>&pound;74.95</td>
</tr>
<tr>
<td class="number3"></td>
<td>&pound;113.95</td>
<td>&pound;103.95</td>
<td>&pound;87.95</td>
</tr>
</table>

    <section id="corrective">
    <h4>Corrective Colour</h4>
    <p>If you've had a home hair colouring disaster, or a bad colour experience in another salon, we will correct &amp; transform your hair to how you wanted it in the first place! Our expert colour team will give you a price on consultation.</p>
    </section>

<table class="priceTable">
<tr>
<th>&nbsp;</th>
<th><h4 class="experience">Director</h4></th>
<th><h4 class="experience">Senior Stylists</h4></th>
<th><h4 class="experience">Stylists</h4></th>
</tr>
<tr>
<td class="firstcolumn"><h4>Cut, Dry &amp; Style</h4></td>
<td>&pound;51.95
</td>
<td>&pound;46.95<br></td>
<td>&pound;38.95<br></td>
</tr>
<tr>
<td><h4>Blow Dry</h4></td>
<td>&pound;34.95</td>
<td>&pound;31.95</td>
<td>&pound;25.95</td>
</tr>
<tr>
<td><h4>Curly Blow Dry</h4></td>
<td>&pound;39.95</td>
<td>&pound;36.95</td>
<td>&pound;30.95</td>
</tr>
</table>

<table class="priceTable">
<tr>
<td class="firstcolumn"><h4>Mens Cut &amp; Style</h4></td>
<td>&pound;32.95</td>
<td>&pound;28.95</td>
<td>&pound;23.95</td>
</tr>
<tr>
<td><h4>Hair Extensions</h4></td>
<td>from &pound;380</td>
<td>(Remi)</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><h4>Curly Blow Dry</h4></td>
<td>from &pound;590</td>
<td>(Russian)</td>
<td>&nbsp;</td>
</tr>
</table>

</div> <!--end price_panel-->

<section id="skintest">
<h4>Skin Test Policy</h4>
<p>New clients require a skin test 48 hours prior to any colour service. It's a simple procedure that only takes a minute or two. Please mention when booking your appointment</p>
</section>


</section>