<?php
/* @var $this FeedbackController */
/* @var $model Feedback */

$this->breadcrumbs=array(
	'Bha Inputs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Feedback', 'url'=>array('index')),
	array('label'=>'Create Feedback', 'url'=>array('create')),
	array('label'=>'Update Feedback', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Feedback', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>

<h1>View Feedback #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'client_first',
		'client_second',
		'mobile',
		'intro',
		'consultation',
		'styling_area',
		'stylist_appearance',
		'prod_advice',
		'styling_advice',
		'internal_marketing',
		'value_for_money',
		'whole_experience',
		'end_result',
		'extra',
		'stylist_id',
	),
)); ?>
