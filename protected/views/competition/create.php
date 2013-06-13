<?php
/* @var $this CompetitionController */
/* @var $model Competition */
?>
<section id="competition">

<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="competition_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>

<div id="competition_copy">
<!--<p class="big comp_end">The competition is now closed - look out for another one soon!</p>-->

<h1>WIN</h1>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/ghdlogo.png" alt="GHD" width="200" height="134"/>
<p class="candy">Candy Collection<br>Styling Irons</p>
<p>For your chance to win a set of GHD Candy Collection Styling Irons just answer the following question:</p>
<p class="question">Wht are GHD's so damn good?</p>


<?php  echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--end #competition_copy-->
</section> <!--end #compettion-->

<?php endif ?>