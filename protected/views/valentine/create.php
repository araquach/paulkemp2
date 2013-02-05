<?php
/* @var $this ValentineController */
/* @var $model Valentine */
?>
<section id="competition">

<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="competition_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>

<div id="competition_copy">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/valentines_logo.png" alt="Valentines" width="298" height="197"/>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/mr_laus.png" alt="Valentines" width="320" height="85"/>
<p>For your chance to win this amazing prize, just answer the following question:</p>
<p class="question">Where is Mr Lau's Restaurant located?</p>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--end #competition_copy-->
</section> <!--end #compettion-->

<?php endif ?>