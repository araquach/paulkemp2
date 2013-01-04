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
		<?php echo $form->labelEx($model,'opt_in_out'); ?>
		<?php echo $form->checkBox($model,'opt_in_out'); ?>
		<?php echo $form->error($model,'opt_in_out'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Next Step' : 'Next Step'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->