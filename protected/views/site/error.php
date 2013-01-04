<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<section id="error">

<div id="error_copy">
<h2>Error <?php echo $code; ?></h2>
	
	<div class="error">
	<p><?php echo CHtml::encode($message); ?></p>
	</div> <!--.error-->
</div>

</section> <!--error-->