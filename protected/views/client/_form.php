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
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address1'); ?>
		<?php echo $form->textField($model,'address1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pcode'); ?>
		<?php echo $form->textField($model,'pcode',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opt_in_out'); ?>
		<?php echo $form->textField($model,'opt_in_out'); ?>
		<?php echo $form->error($model,'opt_in_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis100'); ?>
		<?php echo $form->textField($model,'dis100'); ?>
		<?php echo $form->error($model,'dis100'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis50'); ?>
		<?php echo $form->textField($model,'dis50'); ?>
		<?php echo $form->error($model,'dis50'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis25'); ?>
		<?php echo $form->textField($model,'dis25'); ?>
		<?php echo $form->error($model,'dis25'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enter Prize Draw' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->