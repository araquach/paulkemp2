<?php
/* @var $this ClientController */
/* @var $model Client */
?>
<div id="lisa_comp">
<div id="lisa_comp_copy">
<h1>Nearly there... <?php echo $model->first_name; ?>!</h1>
<h2>Just checking your details</h2>
<p>Please check the details below and then click to find out if you've won!</p>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'first_name',
		'last_name',
		'phone',
	),
)); ?>


</div> <!--lisa copy-->
</div> <!--lisa_comp-->

