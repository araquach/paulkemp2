<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Competitions - Hairdressers in Cheshire';
?>


<section id="competition">
<div id="competition_copy">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/valentines_logo.png" alt="Valentines" width="298" height="197"/>
<h1>WIN A ROMANTIC<br>MEAL FOR 2 AT:</h1>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/mr_laus.png" alt="Valentines" width="320" height="85"/>
<p>We've joined forces with <strong>Mr Lau's</strong> to offer you this amazing prize.</p>
<p><strong>Mr Lau's</strong> is a new Dim Sum bar &amp; restaurant situated above <strong>Paul Kemp Hairdressing</strong>. They offer top quality Chinese food in a modern, sophisticated environment. They have loads of Asian beer's on tap and their cocktails are fantastic.</p>
<p><em>The team at <strong>PK</strong> love it, you'll regularly find us up there sampling the Dim Sum delights!</em></p>
<p class="big">We're offering one lucky couple a FREE meal at Mr Lau's, with 3 runners up receiving FREE Blow Dry's at Paul Kemp Hairdressing</p>
<?php echo CHtml::link('CLICK HERE to enter',array('valentine/create')); ?>



</div> <!--end competition_copy-->


</section> <!--end competition-->