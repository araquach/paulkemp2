<script type="text/javascript">
window.addEvent('domready', function(){
	  
	  var myAccordion = new Fx.Accordion($$('.reveal'), $$('.elements'), {
	      display: 0,
	      alwaysHide: true
	  });
	  
});
</script>

<?php if(Yii::app()->user->hasFlash('stylist')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('stylist'); ?>
</div>

<?php else: ?>

<div id="application">
<h1>Join the team: Stylist Position</h1>
<p class="applink"><?php echo CHtml::link("Click here to apply for an apprentice position", array('apprentice/create')); ?></p>
<p class="application">Please complete ALL sections of the form before submitting your application.</p>
<p class="application">We will contact you as soon as a position becomes available.</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--end app_bground-->

<?php endif; ?>