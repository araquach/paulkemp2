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
	  <img src="http://www.paulkemphairdressing.com/images/newsletter/glam_chic_12.jpg" alt="Glam Chic" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Welcome to our <?php echo date('F');?> Newsletter</strong></h1>
		<p>Hi <?php echo ucfirst($model->first_name);?>, </p>
		<p>Thank's for keeping up to date with the latest news from <strong>Paul Kemp Hairdressing</strong>. Last month we celebrated our 2<sup>nd</sup> year anniversary. It's hard to believe how fast time is flying by! Thank's for your continued support, and we can't wait to see what the next few years brings.</p>
		<p>This month sees the introduction of our latest recruit, Michelle Railton (find out more below) plus our apprentice Meg has completed her training and is now a graduate stylist. </p>
		<P><strong>Loads more has been happening in the salon, so read on&hellip;</strong></p>
	   </td>
	</tr>
	
	<tr> <!-- Michelle Railton -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.paulkemphairdressing.com/images/news_images/michelle_r_1.jpg" alt="" width="135" height="180"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Welcoming Michelle Railton to the team</strong></h1>
		<p><strong>It's been over 2 years now since we opened the doors to Paul Kemp Hairdressing and the team has progressively gone from strength to strength. We thought it was about time we brought some new blood on board, and when stylist <em>Michelle Railton</em> showed interest in joining us, we knew she would be the perfect fit.</strong></p>
		<p>Michelle, aged 25, has almost ten years experience as a hairdresser and after taking a short break from it, realised there was no other career for her (plus no other salon she wanted to work for than here at PK!)</p>
		<p>We had the chance to ask Michelle some questions about why she chose to work at Paul Kemp hairdressing, and what drives her as a hair stylist.</p>
		<p><a href="http://paulkemphairdressing.com/news.php#MichelleRailton" target="_blank" style="color: #333;">Read the interview here &gt;</a></p>
	   </td>
	</tr>
	
	
	<!--offers-->
	
	<?php switch ($model->offer){
	
	case 1:
	echo
	 '<tr> 
	   <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	   <p><img src="http://www.paulkemphairdressing.com/images/newsletter/glam_chic_3.jpg" alt="Special Offer" width="135" height="190"></p></td>
	   <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	   <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	   <strong>Take advantage of this great offer</strong></h1>
	   <p style="font-size: 22px;"><strong><span style="font-size: 34px; line-height: 1.5em;">FREE Product</span><br>with every service</strong></p>
	   <p><strong>Have a Cut, Dry &amp; Style, receive 1 FREE product<br>
	   	Have a Colour &amp; Cut receive 2 FREE products</strong></p>
	   <p>Offer exclusively for <strong>'.ucfirst($model->first_name).' '.ucfirst($model->last_name).'</strong> only.<br>Not Transferable, weekdays only </p>
	   <p><strong>Call 01925 242960 to book and mention the offer</strong></p>
	   <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>
	   Retail size products only, excludes Hair Reborn. Offer ends: August 30th 2013</p>
	  </td>
	 </tr>';
	break;
	case 2:
	echo
	'<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.paulkemphairdressing.com/images/news_images/michelle_r_2.jpg" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Take advantage of this great offer</strong></h1>
	  <p><span style="font-size: 2em">Cut &amp; Colour<br>Package</span><br>
	  <span style="font-size: .8em; line-height: 1.2em>">for only</span><br>
	  <span style="font-size: 3em; line-height: 1.2em; font-weight: bold">&pound;40</span></p>
	  <p>with Michelle</p>
	  <p>plus FREE &pound;10 product voucher</p>
	  <p>Offer exclusively for <strong>'.ucfirst($model->first_name).' '.ucfirst($model->last_name).'</strong> only.<br>Not Transferable, weekdays only </p>
	  <p><strong>Call 01925 444488 to book and mention the offer</strong></p>
	  <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>Offer ends: August 30th 2013</p>
	 </td>
	</tr>';
	break;
	}
	?>
	
	<!--end offers-->
	
	<tr> <!-- Comp Winner -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.paulkemphairdressing.com/images/news_images/ghd_candy.jpg" alt="" width="135" height="180"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Competition Winner</strong></h1>
		<p><strong>Last month we ran a competition to give you the chance to win a set of GHD candy Collection Styling irons. We were inundated with applicants, but we can have only one lucky winner!</strong></p>
		<p>Congratulations to Lisa McNamara, who is now the proud owner of this sought after styling tool.</p>
		<p>We'll be launching another great competition soon - keep an eye out on our <a href="https://www.facebook.com/PaulKempHairdressing">Facebook page</a></p>
	   </td>
	</tr>
	
	<tr> <!-- Artistic Team Collection -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.paulkemphairdressing.com/images/news_images/collection_1.jpg" alt="" width="135" height="180"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>PK Artistic Team produces new collection</strong></h1>
		<p><strong>Earlier this year the Paul Kemp artistic team got together to put together their first collection.</strong></p>
		<p>The brief was to create a set of images that would showcase the talent of the team plus represent the style of the salon. After weeks of preparation the models were booked and the outfits bought. The photo shoot went smoothly and eight beautiful looks were created&hellip;</p>
		<p><a href="http://paulkemphairdressing.com/news.php#collection" target="_blank" style="color: #333;">Find out more here &gt;</a></p>
	   </td>
	</tr>
	
	<tr> <!-- The graduate -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.paulkemphairdressing.com/images/news_images/meg.jpg" alt="" width="135" height="180"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>The Graduate</strong></h1>
		<p><strong>Training to be a hairdresser is no walk in the park! Years of intensive training, blood, sweat and tears, plus being bottom of the pecking order isn't much fun either! But it all becomes worthwhile when you get handed your certificate and you're promoted to the next level. Washing a hundred heads of hair a day soon becomes a distant memory!</strong></p>
		<p>Megan Mullaney (image left) know's how this feels as she recently got promoted to Graduate stylist here in the salon&hellip;</p>
		<p><a href="http://paulkemphairdressing.com/news.php#target" target="_blank" style="color: #333;">Read the full article &gt;</a></p>
	   </td>
	</tr>
	
	<tr> <!-- World Release -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.paulkemphairdressing.com/images/news_images/world_release.jpg" alt="Tigi World Release" width="135" height="120"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Tigi World Release</strong></h1>
		<p><strong>Last month members of the PK team headed down to London along with members of the Jakata team to be a part of Tigi's massive event - World Release 2013 at Old Billingsgate Market.</strong></p>
		<p>It was a spectacular showcase of all things Tigi, with live demonstrations and runway shows. We were lucky enough to get a sneak peak back stage to see the stylists prepping the models for the show&hellip;</p>
		<p><a href="http://paulkemphairdressing.com/news.php#WorldRelease" target="_blank" style="color: #333;">Find out more here &gt;</a></p>
	   </td>
	</tr>
		
	<!--footer-->
		
		<tr>
		  <td style="background-color: #372218;border-top:10px solid #FFFFFF;" valign="top">&nbsp;</td>
		  <td style="background-color:#372218;border-top:10px solid #FFFFFF;" valign="top">
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
		  
		   <p> Copyright (C) <?php echo date('Y');?> Paul Kemp Hairdressing Ltd. All rights reserved.</p>
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