<?php
/* @var $this ApplicantController */
/* @var $model Applicant */
?>

<div id="company">
<?php if(Yii::app()->user->hasFlash('application')): ?>

<div class="company_success">
	<?php echo Yii::app()->user->getFlash('application'); ?>

<?php else: ?>

<div id="company_applicant">
<h1>Company Email Distribution</h1>
<p>This form is for the distribution of the email below. It is to be sent around offices of companies to promote a special offer Paul Kemp Hairdressing is running.</p>
<p>Simply paste the recipients in the box below and press 'send' to fire them out</p>

<?php echo $this->renderPartial('_distribute', array('model'=>$model)); ?>
</div> <!--#company_applicant-->
</div> <!--#company-->

<?php endif; ?>