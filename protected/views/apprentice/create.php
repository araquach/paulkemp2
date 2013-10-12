<script type="text/javascript">
window.addEvent('domready', function(){
	  
	  var myAccordion = new Fx.Accordion($$('.reveal'), $$('.elements'), {
	      display: 0,
	      alwaysHide: true
	  });
	  
});
</script>

<?php if(Yii::app()->user->hasFlash('apprentice')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('apprentice'); ?>
</div>

<?php else: ?>

<div id="application">
<h1>Join the team: Apprentice Position</h1>
<p class="applink"><?php echo CHtml::link("Click here to apply for a stylist position", array('stylist/create')); ?></p>
<p class="application">At Paul Kemp Hairdressing all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.</p>
<p class="application"><em>Our aim is to train and develop our apprentices to the highest level, in the shortest possible time. This requires the highest level of commitment from you. If you have the passion to do whatever it takes to be a top stylist then Paul Kemp Hairdressing can help you to get there!</em></p>
<p class="application">Please complete ALL sections of the form before submitting your application.</p>
<p class="application">We will contact you as soon as a position becomes available.</p>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>

<?php endif; ?>