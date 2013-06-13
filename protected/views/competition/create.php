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
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/valentines_logo.gif" alt="Valentines" width="298" height="197"/>
<a href="http://mrlaus.com" target="_blank" class="link_image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/mr_laus.gif" alt="Valentines" width="320" height="85"/></a>
<p>For your chance to win this amazing prize, just answer the following question:</p>
<p class="question">Where is Mr Lau's Restaurant located?</p>


<?php  echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--end #competition_copy-->
</section> <!--end #compettion-->

<?php endif ?>