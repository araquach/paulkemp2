<?php
/* @var $this ValentineController */
/* @var $model Valentine */

$this->breadcrumbs=array(
	'Valentines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Valentine', 'url'=>array('index')),
	array('label'=>'Manage Valentine', 'url'=>array('admin')),
);
?>

<h1>Create Valentine</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>