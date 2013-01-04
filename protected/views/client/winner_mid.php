<?php
/* @var $this ClientController */
/* @var $model Client */
?>
<div id="lisa_comp">
<div id="lisa_comp_copy">

<?php if(Yii::app()->user->hasFlash('winner_mid')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('winner_mid'); ?>
</div>

<?php else: ?>

<h1>Congratulations <?php echo $model->first_name; ?>!</h1>
<h2>You have won a great prize!</h2>
<ul>
<li>A Cut, Dry &amp; Style or Colour Service plus a product (worth up to &pound;15)</li>
<p>plus</p>
<li>25% off the visit after</li>
</ul>
<p>Thats up to &pound;70 worth of prizes!!</p>


<h2>How to redeem your prize</h2>
<p>All you have to do is <strong>check the box</strong> below and you will receive a voucher via text message which you must bring along to the salon to claim each part of your prize.</p>


<?php echo $this->renderPartial('_opt_in', array('model'=>$model)); ?>

</div> <!--lisa_comp_copy-->
</div> <!--lisa_comp-->

<?php endif; ?>
