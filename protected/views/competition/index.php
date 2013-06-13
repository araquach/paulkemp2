<?php
/* @var $this CompetitionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competition',
);

$this->menu=array(
	array('label'=>'Create Competition', 'url'=>array('create')),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>
<section id="competition">
<h1>Competition</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</section>
