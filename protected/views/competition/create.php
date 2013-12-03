<?php
/* @var $this CompetitionController */
/* @var $model Competition */
$this->pageTitle=Yii::app()->name . ' - WIN an Aveda in-salon experience';
?>

<!--<div id="overlay"></div> 
<section id="competition">-->


<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="competition_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>


<div id="competition_copy">
<!--<p class="big comp_end">The competition is now closed - look out for another one soon!</p>-->

<h1>WIN AN</h1>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/aveda_logo.png" alt="ghd" width="300" height="100"/>
<h2>In-salon Experience</h2>
<h3>worth over &pound;150!</h3>

<p class="question">Aveda use a very special hand made paper for the packaging of their Christmas gift sets. Where is this paper made?</p>


<?php  echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--end #competition_copy-->
</section> <!--end #competion-->

<?php endif ?>