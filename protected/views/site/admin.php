<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section id="admin">

<div id="admin_copy">

	<h1>Management Admin</h1>
	
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Feedback Results', 'url'=>array('feedback/index')),
			array('label'=>'Stylist Job Applicants', 'url'=>array('stylist/index')),
			array('label'=>'Apprentice Job Applicants', 'url'=>array('apprentice/index')),
			array('label'=>'Company Offer Entries', 'url'=>array('applicant/index')),
			array('label'=>'Competition Entrants', 'url'=>array('competition/index')),			
		),
	)); ?>

</div>

</section> <!--end #admin-->    