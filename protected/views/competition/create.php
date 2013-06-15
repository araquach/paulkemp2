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
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/ghdlogo.png" alt="ghd" width="190" height="129"/>
<p class="candy">Candy Collection<br>Styling Irons</p>
<p class="ghdtext"><span class="colours">mints, lemons &amp; violets have more fun</span><br>
Your styler, just like your hair colour, should be an expression of you. Show off your personality with a new styler from ghd IV candy collection in violet, mint or lemon. When the others see how glossy your hair is you'll leave them green with envy.
<br><strong>ghd IV candy collection is available in the salon now</strong></p>
<p>For your chance to win a set of these sought after, limited edition ghd's just answer the following question:</p>
<p class="question">How many colours options are available in the ghd Candy Collection range?</p>


<?php  echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--end #competition_copy-->
</section> <!--end #compettion-->

<?php endif ?>