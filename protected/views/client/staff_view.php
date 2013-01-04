
<div id="lisa_comp">
<div id="lisa_comp_copy">

<h1>Prize Redeem Form</h1>

<?php if(Yii::app()->user->hasFlash('staff_view')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('staff_view'); ?>
</div>

<?php else: ?>

<h2><?php echo $model->first_name.' '.$model->last_name; ?></h2>
<h2>Unique ID: <?php echo $model->id ?></h2>


<?php  $model->details(); ?>

<p>Click on the box each time your client redeems part of their prize:</p>

<?php echo $this->renderPartial('_staff_form', array('model'=>$model)); ?>

</div> <!--lisa_comp_copy-->
</div> <!--lisa_comp-->

<?php endif; ?>


