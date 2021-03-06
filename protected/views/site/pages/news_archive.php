<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - News Archive - Hairdressers in Cheshire';

?>

<script type="text/javascript">
window.addEvent('domready', function(){
	  new Fx.Accordion($('accordion'), '#accordion .reveal', '#accordion .hidden')
	  
	  
	});
</script>

<section id="newspage">
<h2>News Archive</h2>

<?php echo CHtml::link('Click here for the latest news &gt;',array('site/page','view'=>'news')); ?>


<section id="accordion">

<article class="article">
<section class="visible">
<a name="CompWinners" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/aveda_comp.jpg" width="135" height="190">
<h3>And the winners are...</h3>
<p>The winners of our recent anniversary competition have now been drawn. We had loads of entries, so don't be disappointed if you didn't win this time. We're going to be launching another fantastic competition soon!</p>
<p>Keep visiting our site or <a href="http://www.facebook.com/PaulKempHairdressing">Facebook page</a> to keep up to date.</p>
<p class="reveal">The winners ></p>
</section> <!--end .visible-->
<section class="hidden">
<h4>Top Prize</h4>
<p>Colour and Cut package complete with choice of after care products</p>
<h5>Winners</h5>
<p>Emma Boyd &amp; Jane Poynton</p>

<h4>Runners Up</h4>
<p>Three lucky runners up each get a set of products from Tigi, Aveda or Scwarzkopf</p>
<h5>Winners</h5>
<p>Hannah Tart, Vicki Thomas &amp; Louise York</p>

<p class="offer">Congratulations to our winners!</p>
<p>Everyone who entered will receive a runners up prize - you'll be contacted by text or email with instructions on how to claim it</p>
</section> <!--end .hidden-->
<p class="author">Published by Paul</p>
<time datetime="2012-08-17" pubdate="pubdate"><p>17th August 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="competition"></a>
<section class="visible">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/aveda2.jpg" width="135" height="190" alt="Aveda"></a>
<h3>Anniversary competition launch</h3>
<p>To celebrate our first year anniversary we've launched a fantastic competition open to everyone.</p>
<p>We have hundreds of pounds-worth of prizes on offer including hair vouchers worth up to &pound;100 each plus product packs from Tigi, Schwarzkopf and Aveda.</p>
<p class="offer">All you have to do is <?php echo CHtml::link('Click Here',array('site/page','view'=>'comp')); ?> and send in your entry!</p>
<p>Entries will be accepted up to 27th July 2012, one entry per person</p>
<p>Good Luck!!</p>
</section> <!--end .visible-->
<p class="author">Published by PK</p>
<time datetime="2012-07-11" pubdate="pubdate"><p>11th July 2012</p></time>
</article> <!--end #article-->

<article class="article">
<section class="visible">
<a name="anniversary" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/balloons.jpg" width="135" height="190">
<h3>Celebrating A Successful First Year</h3>
<p>This month at Paul Kemp Hairdressing we're celebrating our first Anniversary - It's hard to believe it's a year since we opened! It's been an amazing first year with the salon growing from strength to strength.</p> 
<p>The whole team have been on board from day one, striving to offer the best service and standards. Paul Kemp Hairdressing is proving to be a fantastic success - many thanks to the team and all the clients who have been to the salon - we couldn't do it without you!</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>Throughout the month we're running competitions and features tied to our first year anniversary. Keep checking back so you don't miss out. 
Plus if you've visited the salon you automatically get the chance to win a fantastic prize!! We're rewarding top recommenders, big spenders, and the people who just can't stay away!</p>
<p>We're also running a competition open to everyone with more amazing prizes!! Check back soon to enter!</p>
<p class="offer"><strong>Thanks once again to everyone - here's to an even more amazing second year at Paul Kemp Hairdressing!</strong></p>
</section> <!--end .hidden-->
<time datetime="2012-07-03" pubdate="pubdate"><p>3rd July 2012</p></time>
</article> <!--end #article-->


<article class="article">
<section class="visible">
<a name="Tash" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/tash.jpg" alt="" width="130" height="180">
<h3>She's Ready for the Floor</h3>
<p>It's great when an apprentice works their way through their years of training and finally gets to the point where all the hard work comes into fruition. Natasha Bailey has reached that point and is just a few months off being promoted into her Junior Stylist role. </p>
<p>Natasha said <em>&quot;I can't wait to be running a busy column, I love hairdressing and even though the training is hard work, it's really exciting to be so close to becoming a stylist&quot;</em></p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>Tash is now looking to build on her skills by opening up her column and taking bookings throughout the week. If you're looking for a new style at a fantastic price then take advantage of this great offer:</p>
<p class="offerHeading">Special Introductory offer</p>
<p class="offer">Colour and Cut <br>
  with Natasha for just &pound;25!</p>
<p class="offerSmall">On first visit to salon - not with any other offer<br>
  until 29th June 2012<br>
  Skin test to be carried out 48 hrs prior to any colour service</p>
</section> <!--end .hidden-->
<time datetime="2012-05-29" pubdate="pubdate"><p>29th May 2012</p></time>
</article> <!--end #article-->


<article class="article">
<section class="visible">
<a name="LeonKate" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/leon.jpg" alt="Leon Pritchard" width="135" height="180">
<h3>New Team members join the salon</h3>
<p>The Paul Kemp team continues to grow (in both talent and numbers) with the recent introduction of Leon Pritchard and Kate O'halleran.</p>
<p>Both stylists bring a new mix of skills to the team.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/kate.jpg" width="135" height="180">
<p>Leon is 21 and joins us from Daniel Anderson Hairdressing (which recently merged into Jakata/Paul Kemp Hairdressing). He's still in the early stages of his career but is building a client base fast. He's already a big hit with the clients and has settled into the team (it's like he's been with us since day 1!)</p>
<p>Kate was formerly a stylist at sister salon Jakata - she decided she wanted a change of scenery and has relocated over here. She has loads of experience and a large regular client base. It's great to have her on board.</p>
<p><em>Look out for special offers with Leon over the coming months!</em>
</section> <!--end .hidden-->
<time datetime="2012-04-25" pubdate="pubdate"><p>25th April 2012</p></time>
</article> <!--end #article-->


<article class="article">
<section class="visible">
<a name="Aveda" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/aveda.jpg" width="135" height="100">
<h3>Aveda available exclusively at Paul Kemp Hairdressing</h3>
<p>We're excited to announce the introduction of the <strong>Aveda</strong> product range into the salon. </p>
<p>Our aim is to offer you the best selection of haircare products available. After reviewing all the ranges available we decided <strong>Aveda</strong> would fit perfectly into the salon alongside Tigi and Schwarzkopf. We recognised the brand had something different to offer whilst complimenting our existing product ranges... </p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p><strong>Aveda</strong> is a salon exclusive brand, with products tailored to your individual hair needs.</p>
<P>The products are derived from natural ingredients that are both kind to your hair/body and to the environment.</P>
<iframe width="380" height="230" src="http://www.youtube.com/embed/XLPeEcQZ5yo" frameborder="0" allowfullscreen></iframe>
<p><strong>We'll be posting news about the specific products in the range soon - so keep checking back</strong></p>
<p><a href="http://www.aveda.co.uk/" target="blank">Visit the <strong>official Aveda Website</strong> for more information</a></p>
<p><a href="http://www.facebook.com/Aveda" target="blank">Plus here's a link to <strong>Aveda on Facebook</strong></a></p>

</section> <!--end .hidden-->
<time datetime="2012-04-25" pubdate="pubdate"><p>25th April 2012</p></time>
</article> <!--end #article-->


<article class="article">
<section class="visible">
<a name="NewKebelo" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/kebelo.jpg" alt="Kebelo System" width="135" height="183">
<h3>The Award Winning Kebelo System just got better!</h3>
<p>We launched the <em>Kebelo System</em> in the salon a good few months ago</p>
<p>We've grown to absolutely love it. The smoothing and de-frizzing results have been great every time. The obvious downsides to the treatment was the time it took to do (about 3 1/2 - 4 hours!) which in turn meant it came with a high price (close to &pound;200) although everyone who's had it still said was worth every penny.</p>
<p><strong>Things changed earlier this month with a reformulated version of the product was launched.....</strong></p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/kebelo_blonde.jpg" width="135" height="190">
<p><iframe width="380" height="230" src="http://www.youtube.com/embed/FYPvkP2cois" frameborder="0" allowfullscreen class="right"></iframe></p>
<p>The new version has a reduced application time (down to 1 hour) whilst still promising to produce the same results as it's predecessor - almost hard to believe but I can safely say it's 100% true! (I've had both versions done on my hair!)</p>
<p>This is fantastic news as it means we've been able to reduce the treatment price down to <strong>just &pound;99!</strong> (this still includes the take home aftercare pack worth &pound;40) plus you can use that extra time (and money) doing something more productive (like shopping!)</p> 
<p><em>So there are absolutely no downsides now to the Kebelo Treatment.</em></p>
<p><strong>Plus for a limited time we're offering a FREE Cut, Dry and Style with every treatment!</strong></p>
<p><a href="http://www.kebelo.com/">Visit the Kebelo site for more information<a></p>
</section> <!--end .hidden-->
<time datetime="2012-04-13" pubdate="pubdate"><p>13th April 2012</p></time>
</article> <!--end #article-->

<article class="article">
<section class="visible">
<a name="candy_fixations" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/Candy-Fixations.jpg" alt="Bedhead Candy Fixations" width="135" height="97">
<h3>NEW Bedhead 'Candy Fixations'</h3>
<h4>begging to be whipped, teased, scrunched and smelt</h4>
<p>Tigi have taken inspiration from the world of sweets and created an incredible texture range to deliver volume, flexible hold, definition and root lift. Sugar was originally used in the punk era to keep the mohawks standing upright and this new range is all about the ultimate texture.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>There are five products in Candy Fixations range: Mega Whip, Glaze Haze, Totally Baked, Sugar Shock and Sugar Dust.</p>

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/megawhip.jpg" alt="Mega Whip" width="70" height="70" class="image_list">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/glaze_haze.jpg" alt="Glaze Haze" width="70" height="70" class="image_list">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/totally-baked.jpg" alt="Totally Baked" width="70" height="70" class="image_list">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/sugarshock.jpg" alt="Sugar Shock" width="70" height="70" class="image_list">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/sugar-dust.jpg" alt="Sugar Dust" width="70" height="70" class="image_list">

<ul>
	<li><h5>Mega Whip</h5><p>whips into dry hair for light texture with a flexible hold for shorter styles, or use throughout longer layers for a piecey style definition.</p></li>
	<li><h5>Glaze Haze</h5><p>a sweet treat that candy-coats each strand to fight humidity, adds shine and helps speed up drying time.</p></li>
	<li><h5>Totally Baked</h5><p>Prep your blow-dry with TIGI Bed Head Candy Fixations Totally Baked, a tasty hair meringue, for long-lasting boost of hold, volume and texture.</p></li>
	<li><h5>Sugar Shock</h5><p>Sweet waves, shocking body! Mist TIGI Bed Head Candy Fixations Sugar Shock into hair for a tousled look, or later throughout for extreme texture, fullness and hold.</p></li>
	<li><h5>Sugar Dust</h5><p>a quick fix for your style addiction. Sprinkle into roots to absorb oil and tease for instant volume, or sprinkle throughout layers for texture with staying power.</p></li>
</ul>

<p>Check out this promo video for the range</p>
<iframe width="380" height="230" src="http://www.youtube.com/embed/4YSxuWloiqw" frameborder="0" allowfullscreen class></iframe>
<p><strong>All product in the range are just &pound;9.50 for a limited time</strong></p>
</section> <!--end .hidden-->
<time datetime="2012-03-18" pubdate="pubdate"><p>18th March 2012</p></time>
</article> <!--end #article-->


<article class="article">
<section class="visible" class="anchor">
<a name="oils"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/miracleoil_light.jpg" alt="BC Oil Miracle" width="135" height="155 ">
<h3>Battle of the Oils</h3>
<p>Over the last year or so there has been an influx of Hair oils hitting the market, all offering similar claims of intense conditioning for maximum shine without weighing your hair down (the old style oil treatments left you feeling like you'd had your head dunked in a chip pan!). There are a number of brands that you might recognise: Moroccan Oil, Argan Oil, Mythic Oil etc.
Last year saw the launch of Schwarzkopf's 'Oil Miracle' and more recently Tigi S Factor's 'True Lasting Color Hair Oil'. We have both these products in the salon (both of which are popular favourites amongst the staff) but which one is better?</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<hgroup>
  	<h4>Schwarzkopf Oil Miracle:</h4>
  	<h5>Opulent Shine. Zero Gravity.</h5>
  </hgroup>
  
  <p>BC Oil Miracle Finishing Treatments are everything a hair oil should be, without overburdening.</p>
  
     
 <h5>Technology</h5>
 
 <p>The unique Evaporating Technology used in the BC Oil Miracle Finishing Treatments allows an even spreading of the product for opulent shine and caressable softness without leaving residues on the hair or overburdening it.
 It is composed of a carrier oil and a precious botanical oil. The carrier oil spreads extremely finely, ensuring that the precious botanical oil is dispersed in a very fine layer – then evaporates while drying. Only the precious oil is left in an ultra-light layer on the hair.</p>
 <iframe width="380" height="230" src="http://www.youtube.com/embed/6f7oj7mtuk8" frameborder="0" allowfullscreen></iframe>
 
 <h5>The Results</h5>
  
 <ul class="tigilist">
 	<li>Weightless smoothing</li>
 	<li>Opulent shine</li>
 	<li>Very smooth cuticles and closed hair surface</li>
 </ul>

 <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/tigi_oil.jpg" alt="Tigi S Factor True Lasting Colour" width="135" height="155 ">
 <hgroup>
 	<h4>S-Factor True Lasting Colour</h4>
 	<h5>Hair Oil that shines, softens &amp; seals</h5>
 </hgroup>
 <p>This dual styling and finishing oil infused with ultra-sheer micro-shine oils helps protect colour while imparting surreal shimmer.</p>
 <p>Dispense one pump into palm of hand and run through towel dried hair for smoothness and heat protection during styling. Adjust amount and application to your hair’s length and density</p>
 <p><em>Expert Tip: Finish style by applying to dry hair to smooth frizz and fly-aways.</em></p>
 <h4>The Verdict</h4>
 <p>Both Oils are perfect for prepping the hair before blow-drying. A tiny amount is applied which initially feels like it could be too oily but once applied to the hair it absorbs in - any excess evaporates away.
 They control frizz, enhance shine, speed up blow-drying time and leave the hair soft and silky.</p>
 <h5>So which ones the best?</h5>
 <p>The verdict's out on this one, the <em>Schwarzkopf</em> is a little pricier at <strong>&pound;24.95</strong> but the 2 different options (light and normal to thick hair) offers a more tailored choice. The <em>Tigi</em> oil give great results and probably has the edge in terms of fragrance (I'm yet to find a Tigi product that doesn't smell amazing!). The lower price point will probably appeal too at <strong>under &pound;20</strong></p>
 <p><strong>It's really just down to which brand appeals to you more.</strong></p>
</section> <!--end .hidden-->
<time datetime="2012-03-18" pubdate="pubdate"><p>18th March 2012</p></time>
</article> <!--end #article-->



<article class="article">
<section class="visible">
<a name="takemeout" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/take-me-out2.jpg" alt="Paul and Katy on Take Me Out - The Gossip" width="150" height="170">
<h3>'Take Me Out' comes to Paul Kemp Hairdressing</h3>
<p>Did you see Paul on the '<a href="http://www.itv.com/takemeout/the-gossip/" target="_blank">Take Me Out - the Gossip</a>' on ITV2? <br>
      Take Me Out contestent and regular PK client <em>Toni 
      Anwyll</em> came in to get her hair styled by 'Paul Kemp Hairdressing' stylist Katie, and the ITV crew wanted to film it. <br>
      The crew spent the best part of the day in the salon. The footage was featured on the first edition of the show on Saturday
plus also on the adverts.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p><a href="http://www.itv.com/itvplayer/video/?Filter=299461" target="_blank">If you missed it <strong>click here</strong> to catch it on the ITV Player (until February 6th)</a> Its about 7 min 45 seconds in.</p>
</section> <!--end .hidden-->
<time datetime="2012-01-15" pubdate="pubdate"><p>15th January 2012</p></time>
</article> <!--end #article-->



<article class="article">
<section class="visible">
<a name="parkroyal" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/parkroyal.jpg" alt="Jo Richardson, Kelly Reedy, Nathan Hinds, Natasha Bailey" width="135" height="170">
<h3>You can always count on the PK Team</h3>
<p>The Paul Kemp and <a href="http://www.jakatasalon.co.uk/">Jakata</a> Team's recently joined forces to provide the hair styling for a charity fashion evening at the Park Royal Hotel, Stretton.</p>
<p>The event was organised by Joanne Richardson which raised more than &pound;1,000 for St Matthew's pre-school group. <br>
Jessobel Boutique supplied the fashion, Clarins did the make-up and the combined Jakata &amp; Paul Kemp teams provided the hair styling.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">

    <p>Paul said &quot;We love getting involved in this kind of event, especially if it's for a good cause, it's a great opportunity for us to showcase our skills&quot;</p>
    <p>The event was covered in <a href="http://cheshire.greatbritishlife.co.uk/article/st-matthews-ladies-shopping-evening-fundraiser-stretton-38098/" target="_blank">Cheshire Life Magazine (Click to see the article)</a></p>
</section> <!--end .hidden-->
<time datetime="2012-01-15" pubdate="pubdate"><p>15th January 2012</p></time></p>
</article> <!--end #article-->


<article class="article">
<section class="visible">
<a name="giftvouchers" class="anchor"></a>
<a href="images/news_images/midweek_fp_makeover.pdf" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/voucher.jpg" alt="Kebelo" width="135" height="171"></a>
    <h3>The perfect Gift this Christmas</h3>
    <p>We all struggle at times to choose the right present for our friends and family, endless browsing on-line, flicking through magazines and catalogues, usually ending with buying something out of sheer desperation! If you think you might have that dilemma this year then why not buy them something you know they'll truly appreciate - a fantastic hairstyle!</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p><em>Paul Kemp Hairdressing</em> gift vouchers come in &pound;10, &pound;20, &pound;50 and &pound;100 denominations, or you can choose a specific service, maybe our brand new <em>Kebelo Smoothing System</em>?</p>
<p><strong>Plus - If you spend over &pound;40 on vouchers before Christmas you can have any of our Schwarzkopf or Tigi limited edition gift packs for half price!</strong> (See earlier news item, offer available while stocks last)</p>
<p><em>Get your loved ones something they will truly appreciate this Christmas</em></p>
</section> <!--end .hidden-->
<time datetime="2011-12-05" pubdate="pubdate"><p>5th Decemberber 2011</p></time>

</article> <!--end #article-->


<article class="article">
<section class="visible">
<a name="Kebelo" class="anchor"></a>
<a href="images/news_images/midweek_fp_makeover.pdf" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/kebelo.jpg" alt="Kebelo" width="135" height="183"></a>
<h3>The Next Generation of Smoothing system is here!</h3>
<p>Kebelo System uses a unique three-step process to restore your hair to its optimum, conditioned look and feel, and keep it that way for as long as possible afterwards – up to 100 days of gloriously smooth and shiny hair. That's a lot of stress-free, frizz-free, care-free days.</p>
<p><strong>It's the end of frizz,<br>
    it's the beginning of shine;<br>
    it's the foundation of beautiful hair.</strong></p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">

<p>This new treatment is going down a storm in the salon. If you've had or considered having a Brazilian Blow-Dry or a Keratin Treatment, then this is the next generation of them and coud be perfect for you.</p>
<p><strong>Prices around &pound;180 (includes aftercare products worth &pound;40)</strong><br>
  plus for a limited time: <strong>FREE Cut, Dry &amp; Style or Color Gloss with every treatment</strong></p>
<p><a href="http://www.kebelo.com/" target="_blank">Find out more here&gt;</a></p>
</section> <!--end .hidden-->
<time datetime="2011-12-05" pubdate="pubdate"><p>5th December 2011</p></time>
</article> <!--end #article-->


<article class="article">
<section class="visible">
<a name="midweek" class="anchor"></a>
 <a href="images/news_images/midweek_fp_makeover.pdf" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/midweek_fp_makeover.jpg" width="135" height="167"></a>
    <h3>Christmas Party Styling Ideas</h3>
    <p>Izzy and Kelly were given the challenge of creating two completely different looks each for a Midweek Guardian feature. The focus was on styling hair for the Christmas party season.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p><a href="images/news_images/midweek_fp_makeover.pdf" target="_blank">To see the results of the makeover click here &gt;</a></p>
</section> <!--end .hidden-->
<time datetime="2011-11-09" pubdate="pubdate"><p>9th November 2011</p></time>
</article> <!--end #article-->


<article class="article">
<section class="visible">
<a name="gifts" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/bedheadchristmas.jpg" width="135" height="122">
<h3>Christmas Gift packs now available</h3>
<p>The salon recently took delivery of a whole host of Christmas goodies - it felt like Christmas had come early! The team had a great time trying to find a place to display everything - we're talking box loads! We have gift packs from <em>Schwarzkopf Osis</em> and <em>BC</em> ranges, <em>Tigi Bedhead, S-Factor</em> and <em>Catwalk</em> ranges plus the red hot <em>ghd</em> limited edition Scarlet gift sets (in 2 varieties).</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/tigi_xmas_getvolume2.jpg" width="135" height="109">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/tigi_xmas_texlustre.jpg" width="135" height="97">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/osis_get_volume.jpg" width="135" height="146">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/ghd_scarlet.jpg" width="135" height="132">
 <h4>Tigi Bedhead</h4>
    <p>The <em>Bedhead</em> sets come in 
  	six varieties to suit every hair type/texture. the most popular products are packaged together for a must have Christmas present. If you need advice on choosing the right set, pop into the salon for some advice.</p>
    <h4>Tigi Catwalk</h4>
    <p>Tigi have definately pulled one out of the bag with this years<em> Catwalk</em> gift sets. Along with all the usual favourite products, the standout set is the <strong>Copious Curls</strong> pack 
    which includes the must-have <strong>Tigi Curl Stick</strong> (one of our favourite styling tools) bundled with <strong>Curls Rock Amplifier</strong></p>
    <h4>Tigi S-Factor</h4>
    <p>The high-end<em> S-Factor</em> range   
    has been a huge hit in the salon and the Christmas gift packs will make a fantastic present for anyone who looks after their hair.</p>  
<h4>Schwarzkopf</h4>
<p>We have all the  <em>Schwarzkopf</em> sets from each range: <em>BC Repair Rescue</em> and <em>Color Save, Osis</em> twin packs, plus the fantastic new <em>3D Men</em> packs. If you need help choosing the right one, don't hesitate to give us a call.</p>
<h4>ghd Scarlet Collection Sets</h4>
<p>The limited edition Christmas<em> ghd</em> sets are  seriously sought after  and always the first product we sell out of! This years sets are the most desireable yet. Beautifully presented in a gift box, the deluxe set comes complete with red clutch bag and travel drier. Be sure to put them on your wish list.</p>
</section> <!--end .hidden-->
<time datetime="2011-11-04" pubdate="pubdate"><p>4th November 2011</a></p></time>
</article> <!--end #article-->


<article class="article">
<section class="visible">
<a name="redken" class="anchor"></a>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/Redken_Tribe_1.jpg" width="135" height="165">
<h3>Victorious Hairdresser  wins trip to New York</h3>
<p>A Paul Kemp  stylist made a huge impression at the grand final of the Redken NYC Awards in London - winning an all expenses paid trip to New York! </p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/Redken_Tribe_2.jpg" width="135" height="165">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/Redken_Tribe-3.jpg" width="135" height="165">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/Redken_Tribe-4.jpg" width="135" height="115">
<p><em>Isobelle Lamb </em>teamed up with <em>Natalie Doxey</em> to produce a fashion forward look based around the theme of 'Shapes and Shadows' which they had to recreate for the final time in front of a panel of influential judges. The panel included two times British hairdresser of the year Angelo Seminara, along with other big industry names like Lee Stafford. </p>
	<p>To get to this stage in the competition was tough - It all started with photoshoots carried out in sister salon Jakata's studio back in February, which involved weeks of pre-planning by the artistic team. Images for all three categories were submitted to the competition. The Jakata hair team were picked for a place in each category at the regional finals - selected from thousands of other entries. The team travelled to London where they recreated their looks. Two out of the three looks were selected to win a place in the national final! 'Style Innovator' and 'Male Expert' categories. Unfortunately the male model had to pull out due to other modeling commitments and the competition didn't allow substitutions - gutted!
	  <p>The grand final arrived on 12th September. Once again the artistic team travelled down to London to support Izzy and Nat. The hair style had to once again be recreated - this time competing against all the regional winners - eight in the category. <br>
	    Izzy said "we never expected to get a place in the final, the standards of the competition were so high, I have never been so nervous in my life." <br>
	    The Brixton academy was the venue for the annual Redken Tribe event - a huge hairdressing and fashion show, this is where the big announcement was made. The Team won their category outright,
	    
	    they  couldn't believe it. <br>
	    Natalie said "I was so shocked that we won. I was convinced we got it wrong during the judging"
	    
	    The team soaked up the glory and partied into the early hours. <br>
    <p><strong>
	      Izzy and Nat now look forward to a whole host of prizes including hair photoshoots, media/press coverage, plus a trip to New York.</strong></p>
<p><a href="http://www.facebook.com/media/set/?set=a.10150338797271866.368488.62812381865&type=1" target="_blank"><br>
      See more pictures from the event here &gt;</a></p>
</section> <!--end .hidden-->
<time datetime="2011-10-25" pubdate="pubdate"><p>29th October 2011<a name="hj"></a></p></time>
</article> <!--end #article-->



<article class="article">
<section class="visible">
<a name="hj" class="anchor"></a>
<a href="images/news_images/hj_article.pdf" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/HJ_PR.jpg" width="135" height="165"></a>
<h3>Why did we opt to open a second hairdressing salon in Warrington Town Centre?</h3>
  	<p>An article featured in this weeks <em>Hairdressers Journal</em> speaks to <em>Jakata Hair &amp; Beauty </em>owner Adam Carter about the history of Jakata and the recent launch of <em>Paul Kemp Hairdressing</em>.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p><a href="images/news_images/hj_article.pdf" target="_blank">To read the full article click here&gt; </a></p>
<br>
<p>Visit the <em>Hairdressers Journal</em> website for all the latest industry news:<br>
 <a href="http://www.hji.co.uk/Home/" target="_blank">www.hji.co.uk</a></p>
</section> <!--end .hidden-->
<time datetime="2011-10-25" pubdate="pubdate"><p>25th October 2011</p></time>
</article> <!--end #article-->


</section> <!--end #accoordion-->