<?php
/* @var $this ClientController */
/* @var $model Client */
?>

<div id="lisa_comp">
<div id="lisa_comp_copy">
<h1>You've been selected to enter a special PK prize draw!</h1>

<p>As a loyal Paul Kemp Hairdressing client we're offering you the chance to win some amazing prizes!</p>
<p>You should have received a <strong>unique 5 digit code</strong> via text, email or post.</p>
<p>Simply enter your number in the box below and press the 'Enter' button to see if you have won one of our amazing prizes!</p>
<p>We have FREE hairdressing services on offer plus we're giving away product packs and styling tools (including a set of GHD's!)</p>
<p>Good Luck!</p>

<?php echo $this->renderPartial('_id_form', array('model'=>$model)); ?>
</div> <!--lisa_comp_copy-->
</div> <!--lisa_comp-->
