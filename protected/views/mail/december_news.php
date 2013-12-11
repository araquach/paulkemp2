<!DOCTYPE HTML>

<title>Paul Kemp Hairdressing News- <?php echo date('F Y');?></title>

<html>
<body>

<table width="100%" cellpadding="10" cellspacing="0">

	<tr>
	<td valign="top" align="center">
	<table width="657" cellpadding="0" cellspacing="0" style="border: 1px solid #999;">
	<tr>
	<td>
	<table width="657" cellpadding="0" cellspacing="0">
	<table width="657" cellpadding="0" cellspacing="0">
	<tr>
	<a href="http://www.paulkemphairdressing.com/news.php" style="text-decoration: none; font-size: .7em; color: #999; text-align:left;">Read these news stories at our web site</a>
	</td>
	</tr>
	
	<!--header-->
	<tr>
	<td height="224" align="left" valign="middle" style="background-color:#FFFFFF;border-top:0px solid #333333;"><center>
	  <a href="http://www.paulkemphairdressing.com"><img src="http://paulkemphairdressing.com/images/newsletter/masthead_aug13.jpg" alt="Paul Kemp Hairdressing 01925 444488" width="657" height="224" style="border-style: none"></a></td>
	</tr>
	</table>
	<!--end header-->
	
	<table width="657" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
	
	<tr> <!-- Intro -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.paulkemphairdressing.com/images/newsletter/ballball.jpg" alt="" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Welcome to our <?php echo date('F');?> Newsletter</strong></h1>
		<p>Hi <?php echo ucfirst($model->first_name);?>, </p>
		<p>It's hard to believe Christmas is almost here again! We're in the midst of our busiest season with most of our prime time slots already taken! The team are well prepped and with the introduction of our latest apprentice Ashley on hand things are pretty much guaranteed to go smoothly.</p>
		<p>The salon is stocked up with all our latest Christmas gift packs plus we have the new limited edition GHD's, special edition Tangle Teezers and a whole host of other gift ideas - including our Paul Kemp Hairdressing gift vouchers.</p>
		<p><strong>So read on and we look forward to seeing you in the salon soon...</strong></p>
	   </td>
	</tr>
	
	<tr> <!-- Paul Leaving -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.paulkemphairdressing.com/images/newsletter/paul_exit.jpg" alt="Paul Kemp left the salon" width="135" height="180"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Paul Kemp no longer at the salon</strong></h1>
		<p><strong>At the end of September Paul Kemp decided to leave the salon. He resigned and has gone on to pursue something else.</strong></p>
		<p>The salon continues as usual with team leader Kellie Reedy still at the helm.</p>
		<p>Salon owner Adam Carter said "It's business as usual at PK - the team are stronger than ever. 
		We can't apologise enough for Paul's quick departure and any inconvenience it may have caused to his clients but our other stylists are on hand to ensure a smooth transition."</p>
		<p>Many people are asking the question of whether the salon name will remain. A full rebrand is both costly and time consuming so the name will stay for a good while longer but will inevitably change in the future.</p>
		<p><strong>If you were a regular client of Paul's please contact the salon to find out the great offers we're running.</strong></p>
	   </td>
	</tr>
	
	<!--offers-->
	
	<?php switch ($model->offer){
	
	case 1: // for women
	echo
	 '<tr> 
	   <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	   <p><img src="http://www.paulkemphairdressing.com/images/newsletter/glam.jpg" alt="Special Offer" width="135" height="190"></p></td>
	   <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	   <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	   <strong>Last Minute Gap Filling Offer</strong></h1>
	   <p>If you have a tendency to leave things a little last minute don\'t despair, there\'s a chance we can still get you sorted. People often have to cancel last minute this time of year - which leaves us with appointment slots that we\'d love to fill!</p>
	   <p><strong>Call the salon on the day and if you can fill one of our gaps you\'ll get your hair done at a special price.</strong> We can\'t guarantee we\'ll have availability and you\'re not able to specify a stylist - but you are guaranteed a fully qualified stylist or senior stylist.</p>
	   <p style="font-size: 22px;"><strong><span style="font-size: 34px; line-height: 1.5em;">30% OFF</span><br>your hair services</strong></p>
	   <p>Offer exclusively for <strong>'.ucfirst($model->first_name).' '.ucfirst($model->last_name).'</strong> only.<br>Not Transferable, weekdays only </p>
	   <p><strong>Call 01925 444488 to book and mention the offer</strong></p>
	   <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>Offer ends: December 31st 2013</p>
	  </td>
	 </tr>';
	break;
	case 2: // second womens offer
	echo
	'<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.paulkemphairdressing.com/images/newsletter/glam.jpg" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Last Minute Gap Filling Offer</strong></h1>
	  <p>If you have a tendency to leave things a little last minute don\'t despair, there\'s a chance we can still get you sorted. People often have to cancel last minute this time of year - which leaves us with appointment slots that we\'d love to fill!</p>
	  <p><strong>Call the salon on the day and if you can fill one of our gaps you\'ll get your hair done at a special price.</strong> We can\'t guarantee we\'ll have availability and you\'re not able to specify a stylist - but you are guaranteed a fully qualified stylist or senior stylist.</p>
	  <p><strong><span style="font-size: 24px; line-height: 1.5em;">Last Minute Blowdry</p>
	  <p><strong>Call on the day:</strong><br>
	  	if we have a spare 30-45 minute gap get</p>
	  	<p style="font-size:20px;font-weight:bold; line-height:1.6em;">A Blow-Dry for just &pound;10<br>
	  	A Curly Blow for just &pound;15</p>
	  	
	  <p>Offer exclusively for <strong>'.ucfirst($model->first_name).' '.ucfirst($model->last_name).'</strong> only.<br>Not Transferable, weekdays only </p>
	  <p><strong>Call 01925 444488 to book and mention the offer</strong></p>
	  <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>Offer ends: December 31st 2013</p>
	 </td>
	</tr>';
	break;
	case 3: // mens offer
	echo
	'<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.paulkemphairdressing.com/images/newsletter/men.jpg" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Last Minute Gap Filling Offer</strong></h1>
	  <p>If you have a tendency to leave things a little last minute don\'t despair, there\'s a chance we can still get you sorted. People often have to cancel last minute this time of year - which leaves us with appointment slots that we\'d love to fill!</p>
	  <p><strong>Call the salon on the day and if you can fill one of our gaps you\'ll get your hair done at a special price.</strong> We can\'t guarantee we\'ll have availability and you\'re not able to specify a stylist - but you are guaranteed a fully qualified stylist or senior stylist.</p>
	  <p><strong><span style="font-size: 24px; line-height: 1.5em;">Last Minute Men\'s Cut</p>
	  <p><strong>Call on the day:</strong><br>
	  	if we have availability book in for</p>
	  	<p style="font-size:20px;font-weight:bold; line-height:1.6em;">A Men\'s Cut & Style for just &pound;12<br>
	  	A Men\'s Express Cut for just &pound;8</p>
	  	
	  <p>Offer exclusively for <strong>'.ucfirst($model->first_name).' '.ucfirst($model->last_name).'</strong> only.<br>Not Transferable, weekdays only </p>
	  <p><strong>Call 01925 444488 to book and mention the offer</strong></p>
	  <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>Offer ends: December 31st 2013</p>
	 </td>
	</tr>';
	break;
	}
	?>
	
	<!--end offers-->
	
	<tr> <!-- Aveda Christmas -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.paulkemphairdressing.com/images/newsletter/aveda_christmas.jpg" alt="Aveda Christmas Gifts" width="135" height="180"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Give something a little different this Christmas</strong></h1>
		<p><strong>Here at Paul Kemp Hairdressing we stock a wide range of products from Schwarzkopf, Tigi, GHD and Aveda. During this festive season each product company bring out their own Christmas gift sets. If you're looking for something a little different as a gift this Christmas then check out our Aveda packs.</strong></p>
		<p>Each set contains limited edition, miniature versions of your favourite Aveda products, giving the opportunity for your friends and family to try them out for themselves. The limited-edition gift sets feature certain products that are available only during the Christmas season.</p>
		<p><a href="http://paulkemphairdressing.com/news.php#AvedaChristmas" target="_blank" style="color: #333;">Find out more here &gt;</a></p>
	   </td>
	</tr>
	
	<tr> <!-- GHD -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.paulkemphairdressing.com/images/newsletter/eclipse.jpg" alt="" width="135" height="180"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>A New Styler for a New Era</strong></h1>
		<p><strong>Ghd have always come up with the goods when it comes to producing the best styling irons on the market. The PK team were eager to get their hands on the new Eclipse iron which claims to revolutionise styling on hard-to-tame hair.</strong></p>
		<p>With a recent reduction in price to &pound;145 the new addition to the GHD family could make a great Christmas gift.</p>
		<p>The irons arrived in the salon a few months ago and we had chance to have a good play with them and put them to the test.</p>
		<p><p><a href="http://paulkemphairdressing.com/news.php#ghdEclipse" target="_blank" style="color: #333;">Find out more here &gt;</a></p></p>
	   </td>
	</tr>
	
	<!--footer-->
		
		<tr>
		  <td style="background-color: #333333;border-top:10px solid #FFFFFF;" valign="top">&nbsp;</td>
		  <td style="background-color:#333333;border-top:10px solid #FFFFFF;" valign="top">
		  <span style="text-align:left;font-size:10px;color:#FFFFFF;font-family:verdana;">
			Paul Kemp Hairdressing Ltd <br />
		  <br />
		  <a href="mailto:adamcarter@jakatasalon.co.uk">Unsubscribe</a>: Just Return this e-mail with 'unsubscribe' as the subject <br />
		  <p>
			Paul Kemp Hairdressing<br>
			83 Sankey Street<br>
			Warrington<br>
			WA1 1SL
		  </p>
		
			<p>Telephone:<br />
			01925 444488</p>
		  
		   <p> Copyright (C) 2013 Paul Kemp Hairdressing Ltd. All rights reserved.</p>
		   </span>
		   </td>
		   		</tr>
				 </table>
			</td>
		</tr>
		</table>
		</tr>
	
	</table>
	<!--end footer-->
	
</body>
</html>