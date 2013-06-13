<?php
/* @var $this CompetitionController */
/* @var $model Competition */

$this->breadcrumbs=array(
	'Competition'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Competition', 'url'=>array('index')),
	array('label'=>'Create Competition', 'url'=>array('create')),
	array('label'=>'Update Competition', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Competition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>
<section id="competition">

<h1>View Competition #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'second_name',
		'mobile',
		'email',
		'answer',
		'date_entered',
		'regular',
	),
)); ?>

</section>
