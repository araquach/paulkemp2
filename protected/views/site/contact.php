<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
$this->pageTitle=Yii::app()->name . ' - Contact Us - Hairdressing in Warrington';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Paul Kemp Hairdressing - Contact Us"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Paul Kemp Hairdressing is located on the corner of Sankey Street and Springfield Street in Warrington Town Centre
(opposite the Golden Gates)."; ?>
<?php // Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/" ; ?>

<section id="contact" class="group">
    <section id="locmap">
    <a id="map"></a>
    <h2>Contact Us</h2>
    <h3>How to find us:</h3>
    <p><strong>Paul Kemp Hairdressing</strong> is located on the corner of <em>Sankey Street</em> and <em>Springfield Street</em> in Warrington Town Centre
    (opposite the Golden Gates).</p>
   
    <div class="address"><h3>Address:</h3>
    <p>83 Sankey Street<br>
      Warrington<br>
      WA1 1SL
    </p>
    <p><strong>01925 444488</strong></p>
    </div> <!--address-->
    
    <div id="map"></div>
    
    <p>The closest parking is available at the <em>Town Hall car park </em>across the road from us. The entrance is 
  immediately after the Golden Gates. It's pay and display at a very reasonable rate.</p>		
  <h3>Opening Times:</h3>
  <ul id="times">
  <li>Monday: Closed</li>
  <li>Tuesday: 9.00 - 18.00</li>
  <li>Wednesday: 11.00 - 20.00</li>
  <li>Thursday: 11.00 - 20.00</li>
  <li>Friday: 9.00 - 18.00</li>
  <li>Saturday: 9.00 - 17.30</li>
  <li>Sunday: Closed</li>
  </ul>
  </section> <!--locmap-->
  </section> <!--contact-->

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div id="success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div id="form">
<h2>Enquiries &amp; Bookings</h2>
<p>Please fill in as much information as possible in the form below. If you wish to make an appointment state the preferred date and time plus the service you require</p>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>30,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'second_name'); ?>
		<?php echo $form->textField($model,'second_name',array('size'=>30,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'second_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email_confirm'); ?>
		<?php echo $form->emailField($model,'email_confirm',array('size'=>30,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email_confirm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>30,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>35)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->

<?php endif; ?>