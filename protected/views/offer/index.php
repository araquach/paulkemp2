<?php
/* @var $this OfferController */
?>

<div id="limited">
<div id="limited_copy">
<h1><strong>Special Offer for <br><?php echo ucfirst($model->first_name) . ' ' . ucfirst($model->last_name);?></strong></h1>

<p>Hi <?php echo ucfirst($model->first_name); ?>,</p>

<?php if ($model->number_visits > 3): ?> 
<?php echo '<p>As a loyal client to the salon you\'ve been specially selected to take advantage of this fantastic offer:</p>';?>
<?php elseif ($model->number_visits == 1): ?>
<?php echo '<p>As you\'ve only experienced the salon once before we would love you to take advantage of this fantastic offer:</p>';?>
<?php else: ?>
<?php echo '<p>You have been specially selected to take advantage of this fantastic limited offer:</p>';?>
<?php endif; ?>
<p class="big">40% off <br>your next visit</p>
<p class="small">to be taken before 29/11/13</p>
<p>PLUS the price on your following visits will be fixed at:</p>

<?php if($model->gender == 'm'): ?>
	
	<p><strong>Just &pound;20 for a men's cut &amp; style</strong></p>

<?php else: ?>

	<?php if ($model->last_stylist == 'Megan Mullaney' or $model->last_stylist == 'Natasha Bailey' or 
	$model->last_stylist == 'Jack Broady' or $model->last_stylist == 'Leon Pritchard' or $model->last_stylist == 'Nathan Hinds'): ?>
	
	<p><strong>Colour &amp; Cut package: &pound;65<br>
		Cut, Dry &amp; Style : &pound;30<br>
		Dry &amp; Style : &pound;20</strong></p>
	<p class="small">With Meg, Tash, Jack or Leon</p>
	
	<?php else: ?>
	
	<p><strong>Colour &amp; Cut package: &pound;80<br>
		Cut, Dry &amp; Style : &pound;35<br>
		Dry &amp; Style : &pound;25</strong></p>
	<p class="small">With Kellie, Izzy, Jo, Michelle or Kate</p>
	
	<?php endif; ?> <!--end stylist-->
	
<?php endif; ?> <!--end gender-->
<p>Until March 2014!</p>
<small>Not with any other offer, subject to availability</small>

</div> <!--#limited_copy-->
</div> <!--#limited-->
 
