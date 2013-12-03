<?php
/* @var $this CompetitionController */
/* @var $model Competition */
$this->pageTitle=Yii::app()->name . ' - WIN an Aveda in-salon experience';
?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/competition/aveda_christmas_meta.jpg"; ?>
<?php Yii::app()->facebook->ogTags['og:title'] = "Win an Aveda In-Salon Experience"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "A Colour & Cut Package plus 3 Free Aveda products altogether worth over £150 each for 3 lucky winners!"; ?>

<!--<div id="overlay"></div> -->
<section id="competition">


<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="competition_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>


<div id="competition_copy">
<!--<p class="big comp_end">The competition is now closed - look out for another one soon!</p>-->

<h1>WIN AN</h1>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/aveda_logo.png" alt="Aveda" width="300" height="100"/>
<h2>In-salon Experience</h2>
<h3>worth over &pound;150!</h3>

<p>We're giving 3 lucky people the chance to win a full Aveda salon experience. The package includes a <em>Colour service plus Cut, Dry &amp; Style</em> with a senior stylist complimented by an Aveda treatment tailored to your hair <strong>plus</strong> a selection of 3 Aveda products to take home. <strong>Each prize is worth over £150!</strong></p>
<p>5 runners up will each receive an Aveda Christmas Gift set.</p>

<p class="question">Aveda use a very special hand made paper for the packaging of their Christmas gift sets. Where is this paper made?</p>


<?php  echo $this->renderPartial('_form', array('model'=>$model)); ?>
<p>One entry per person. Closing Date 27/12/13<br></p>
<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   'href' => 'http://www.paulkemphairdressing.com/competition', 
   'show_faces'=>true,
   'send' => true,
   'width' => '250px'
));  ?>
</div> <!--end #competition_copy-->
</section> <!--end #competion-->


<?php endif ?>