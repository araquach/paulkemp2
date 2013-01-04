<?php
/* @var $this ClientController */
/* @var $model Client */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address1')); ?>:</b>
	<?php echo CHtml::encode($data->address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address2')); ?>:</b>
	<?php echo CHtml::encode($data->address2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcode')); ?>:</b>
	<?php echo CHtml::encode($data->pcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opt_in_out')); ?>:</b>
	<?php echo CHtml::encode($data->opt_in_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dis100')); ?>:</b>
	<?php echo CHtml::encode($data->dis100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dis50')); ?>:</b>
	<?php echo CHtml::encode($data->dis50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dis25')); ?>:</b>
	<?php echo CHtml::encode($data->dis25); ?>
	<br />

	*/ ?>

</div>