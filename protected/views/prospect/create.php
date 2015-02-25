<?php
/* @var $this ProspectController */
/* @var $model Prospect */
?>

<section id="prospect">

<section id="prospect-info">

<p></p>
<p></p>
<p></p>

<img src="" alt="big enticing image" width="500" height="200" />

<p></p>
<p></p>
<p><em></em></p>


</section>

<div id="prospect_form">

<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="prospect_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>


<h2>Claim your FREE products today!</h2>
<p>We're giving away FREE products especially selected for your hair type - plus a secret FREE gift</p>
<p>Simply fill out the form below to claim yours!</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--end #prospect_form-->

<?php echo CHtml::link('Click here to go to our website', array('site/index')); ?>

</section> <!--end #prospect-->

<?php endif ?>