<?php
/* @var $this HelperController */
/* @var $model Helper */
?>


<?php  $this->pageTitle=Yii::app()->name . ' - Saturday Staff'; ?>

<?php if(Yii::app()->user->hasFlash('helper')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('helper'); ?>
</div>

<?php else: ?>

<div id="application">

<h1>Saturday/Holiday staff required</h1>
<p class="application">We're on the lookout for Saturday/Holiday staff to help out during some of our busier times.</p>
<p class="application"><em>If you're looking to get an early start into a hairdressing career then this is a fantastic opportunity!</em></p>
<p class="applink"><?php echo CHtml::link("Alternatively click here to apply for an apprentice position", array('apprentice/create')); ?></p>
<p class="application">Please complete ALL sections of the form before submitting your application.</p>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--application-->
<?php endif; ?>

