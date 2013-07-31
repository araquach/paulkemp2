<?php
/* @var $this ApplicantController */

$this->pageTitle=Yii::app()->name . ' - Company Special Offer';

?>

<section id="company">
<div id="company_offer">
<h1>EXPERIENCE A NEW STANDARD OF HAIRDRESSING</h1>

<h2>50% OFF</h2>

<p>Paul Kemp Hairdressing is a luxurious hair salon right in the heart of Warrington town centre. Sister salon to the award winning <em>Jakata Hair and Beauty team</em>, the stunning salon opened back in June 2011, with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise.</p>
<p>We want you and your colleagues to experience what we have to offer...<br> get <strong>50% off your first visit</strong> plus an <strong>ongoing 10% discount.</strong></p>

<?php echo CHtml::link('<strong>Click Here</strong> to claim your 50% off Voucher',array('applicant/create')); ?>

<p>voucher delivered via SMS Message</p>

</div> <!--company_applicant-->
</section> <!--end #company-->