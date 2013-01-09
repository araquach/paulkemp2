<div id="recruitBlank">

<?php

$this->menu=array(
	array('label'=>'List Stylist', 'url'=>array('index')),
	array('label'=>'Update Stylist', 'url'=>array('update', 'id'=>$model->stylist_id)),
	array('label'=>'Delete Stylist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stylist_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stylist', 'url'=>array('admin')),
);
?>

<h1>View Stylist #<?php echo $model->stylist_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stylist_id',
		'date',
		'first_name',
		'second_name',
		'address1',
		'address2',
		'address3',
		'postcode',
		'email',
		'phone',
		'mobile',
		array('name'=>'experiance', 
			'value'=>CHtml::encode($model->getExperianceText())
			),
		array('name'=>'position', 
			'value'=>CHtml::encode($model->getPositionText())
			),
		array('name'=>'client_base', 
			'value'=>CHtml::encode($model->getClientBaseText())
			),
		array('name'=>'qualifications', 
			'value'=>CHtml::encode($model->getQualificationText())
			),
		'cutting_skills',
		'colour_knowledge',
		'colour_skills',
		'men',
		'extensions_weave',
		'extensions_ind',
		'extensions_other',
		'chem_straighten',
		'braz_blow',
		'hair_up',
		'awards',
		'about_you',
		'why_hairdressing',
		'why_jakata',
				
	),
)); ?>

</div> <!--#recruitBlank-->


