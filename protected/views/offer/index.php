<?php
/* @var $this OfferController */
$this->pageTitle=Yii::app()->name . ' - Graduate Stylist Offer - Hairdressers in Cheshire';
?>

<div id="graduate">

<h2>Ashley promoted to Graduate Stylist</h2> 

<?php if(Yii::app()->user->hasFlash('Offer')): ?>

<div class="limitedSuccess">
	<?php echo Yii::app()->user->getFlash('Offer'); ?>
</div>

<?php else: ?>
<div id="graduate_copy">
<p><strong>Ashley Tennant joined the PK team in 2013 and has worked her way up from an apprentice to recently being promoted to a Graduate Stylist.</strong></p>
<p>The training to get to this level is intensive but extremely rewarding, with Ashley now fully skilled in all aspects of hairdressing.</p>
<p>She loves creating fashionable looks using the latest colouring &amp; styling techniques</p>
<p>She is eager to build up a strong client base to quickly progress through the ranks towards being a Senior Stylist.</p>
<p><em>In order to help her build we've launched a great offer that we'd love you to take advantage of:</em></p>

<p class="offer">FREE</p>
<p class="offer">Cut, Dry &amp; Style</p>
<p class="offer">with every Colour service</p>
<p class="offer">(Colour price with Ashley: &pound;25 - &pound;40)</p>

<p class="small">(one offer per person, not with any other offer<br>excludes Saturday's, ends <time datetime="2015-07-31">31/07/15</time>)</p>

<p class="big">Call 01925 444488 to book - please quote the offer</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--#graduate_copy-->
</div> <!--#graduate-->

<?php endif; ?>
