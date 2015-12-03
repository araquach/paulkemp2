<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Competitions';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "The Paul Kemp Hairdressing Christmas Give-away"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Win a Meal for 4 at Las Ramblas PLUS £100 PK voucher, Limited Edition GHD Stylers & Hairdryer, PLUS 30 runners up prizes!"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/competition/christmas_raffle_15_meta.jpg"; ?>


<section id="competition">
<div id="competition_copy">
<h2>The PK Christmas Give-away</h2>
<h3><em>Hundreds of pounds worth of prizes to be won!</em></h3>
</div> <!--end competition_copy-->
<div id="prizes">
	<div class="prize">
		<h3>Top Prize</h3>
		
			<p>A meal for 4 at Las Ramblas
			  Wine &amp; Tapas Restaurant</p>
			<p>A £100 PK Voucher</p>
			<p>A bottle of Veuve Clicquot</p>	
		
		<p><strong>A total prize value of £400!</strong></p>
	</div> <!--.prize-->
	
	<div class="prize">
		<h3>Second Prize</h3>
	
			<p>Limited Edition 
			  GHD Stylers &amp; Hairdryer</p>
			<p>A GHD Styling wand</p>
			<p>A £50 PK Voucher</p>
			<p>A bottle of Veuve Clicquot</p>	
	
		<p><strong>A total prize value of over £300!</strong></p>
	
	</div> <!--.prize-->
	
	<div class="prize">
		<h3>PLUS 30 RUNNERS UP PRIZES</h3>
	<ul id="prize-list">
			<li>Treatments -</li>
			<li>Styling Wands -</li>
			<li>Colours -</li>
			<li>Cuts -</li>
			<li>Blowdrys -</li>
			<li>Vouchers -</li>
			<li>Champagne -</li>
			<li>Kebelo's</li>
			<p><strong>Plus loads of other prizes!</strong></p>
	</ul>	
		
	
	</div> <!--.prize-->

</div> <!--#prizes-->

<div id="prize_entry">
<p>To enter simply purchase prize draw tickets from salon reception. Tickets are £1 each and you can buy as many as you like!<br>
For every Christmas Gift pack purchased you will also receive a FREE prize draw ticket.</p>
<p>The winner will be drawn on Monday 22nd December - in time for you to pick up your prize before Christmas</p>
</div> <!--prize_entry-->

<div id="fb_like">
<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   'href' => 'http://www.paulkemphairdressing.com/prizedraw', 
   'show_faces'=>false,
   'send' => true,
   'width' => '250px'
));  ?>
</div>


</section> <!--end competition-->