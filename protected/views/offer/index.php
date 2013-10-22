<?php
/* @var $this OfferController */
?>

<div id="limited">
<div id="limited_copy">
<h1>Special Offer for <br><?php echo $model->first_name . ' ' . $model->last_name;?></h1>

<p>Hi <?php echo $model->first_name; ?>,</p>

<?php if ($model->number_visits > 3): ?> 
<?php echo '<p>As a loyal client to the salon you\'ve been specially selected to take advantage of this fantastic offer:</p>'?>
<?php else: ?>
<?php echo '<p>As you have only been to the salon a few times we\'ve specially selected you to take advantage of this fantastic offer:</p>'?>
<?php endif; ?>
<p class="big">40% off <br>your next visit</p>
<p class="small">before 31/11/13</p>
<p>PLUS the price on your following visits will be fixed at:</p>


<?php if ($model->last_stylist == 'Megan Mullaney' or $model->last_stylist == 'Natasha Bailey' or $model->last_stylist == 'Jack Broady' or $model->last_stylist == 'Leon Pritchard'): ?> 

<?php echo '<p>Colour & Cut package: £65<br>
Cut, Dry & Style : £30<br>
Dry & Style : £20</p>'; ?>

<?php else: ?>

<?php echo '<p>Colour & Cut package: £80<br>
Cut, Dry & Style : £35<br>
Dry & Style : £25</p>';?>

<?php endif; ?>

</div> <!--#limited_copy-->
</div> <!--#limited-->
 
