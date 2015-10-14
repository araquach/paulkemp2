<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - New team members at PK - Hairdressers in Cheshire';
?>
<?php Yii::app()->facebook->ogTags['og:title'] = "Welcoming Caleb and Leanne to the team"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "We're excited to announce two talented new stylists have joined the team. Caleb Barrie &amp; Leanne Bartlett joined PK after a lengthly recruitment drive. Check out these great introductory offers with these two extremely talented stylists"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/newstaff/pk_starters_meta.jpg"; ?>

<section id="new">

	<section id="new_copy">
	<h2>Welcoming Caleb &amp; Leanne to the team</h2>
	<p class="bold"><strong>We're excited to announce two talented new stylists have joined the team. Caleb Barrie &amp; Leanne Bartlett joined PK after a lengthly recruitment drive.</strong></p>
	<p>Caleb, 24, has been hairdressing for four and a half years, most of this time was at a busy Frodsham salon. He's a diverse stylist with a real passion for hairdressing. He can't wait to build up a new client base here at Paul Kemp Hairdressing.</p>
	<p><em>Caleb is skilled in all aspects of hairdressing but particularly loves high-fashion colouring and big, bouncy blow-dry's. He comes on board at a Stylist level</em></p>
	<p>Leanne, 19, started hairdressing three years ago and recently qualified up to NVQ level 3 in a reputable Stockton Heath salon. She joined PK with the aim to push her skills further and be part of a passionate, professional team. Leanne really stands out as a stylist who truly cares about her work.</p>
	<p><em>Leanne is a great all round stylist although her main passion lies in creating quirky, individual looks plus she has great skill in colour correction. Leanne is joining us as a Graduate Stylist.</em></p>
	
	<p><strong>To get Leanne &amp; Caleb up and running we've launched some great offers with them - available for new clients&hellip;</strong></p>
	
	<h3>Caleb's Offers</h3>
	
	<section id="new_offer_1">
	<table>
		<tr>
			<td>Cut Dry &amp; Style: &pound;29.05<br><small>usual price: &pound;43.40</small></td>
			<td>Colour &amp; Cut: &pound;65.65<br><small>usual price: &pound;97.95</small></td>
		</tr>
		<tr>
			<td>Blow Dry: &pound;19.40<br><small>usual price: &pound;28.90</small></td>
			<td>Men's Cut &amp; Style: &pound;17.50<br><small>usual price: &pound;26.20</small></td>
		</tr>
	</table>
	</section>
	

	
	<h3>Leanne's Offers</h3>
	<section id="new_offer_1">
	<table>
		<tr>
			<td>Cut Dry &amp; Style: &pound;15.35<br><small>usual price: &pound;22.90</small></td>
			<td>Colour &amp; Cut: &pound;37.40<br><small>usual price: &pound;55.80</small></td>
		</tr>
		<tr>
			<td>Blow Dry: &pound;10.25<br><small>usual price: &pound;15.30</small></td>
			
		</tr>
	</table>
	
	<p class="small">offers extended until 31/10/15, for new clients to the salon only, not with any other offer, skin test required 48 hours before any colour service<br>Mention offer at time of booking.</p>
	
	</section>
	
	
	<?php echo CHtml::link('<p class="offer">Click here to find out more about Caleb &amp; Leanne &gt;</p>',array('site/page','view'=>'news', '#'=>'NewRecruits')); ?>
	
	</section>
</section>