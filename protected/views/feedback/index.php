<?php
/* @var $this FeedbackController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bha Inputs',
);

$this->menu=array(
	array('label'=>'Create Feedback', 'url'=>array('create')),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>

<h1>Bha Inputs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
