<?php
/* @var $this ClientController */
/* @var $model Client */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'dis100'); ?>
		<?php echo $form->checkBox($model,'dis100'); ?>
		<?php echo $form->error($model,'dis100'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis50'); ?>
		<?php echo $form->checkBox($model,'dis50'); ?>
		<?php echo $form->error($model,'dis50'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis25'); ?>
		<?php echo $form->checkBox($model,'dis25'); ?>
		<?php echo $form->error($model,'dis25'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->