<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - The Team - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Paul Kemp Hairdressing - The Team"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "The Paul Kemp team comprises of ten skilled stylists ready to give you the new look you've been waiting for!"; ?>
<?php  Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/exit/pk_replacers.jpg" ; ?>

<section id="team">
<ul>
	<li><p class="up">Leon</p></li>
	<li><p>Jack</p></li>
	<li><p class="up">Meg</p></li>
	<li><p class="up">Michelle</p></li>
	<li><p>Kellie</p></li>
	<li><p class="up">Jo</p></li>
	<li><p>Izzy</p></li>
	<li><p class="up">Kate</p></li>
	<li><p>Tash</p></li>
</ul>
      
      	
      	
       <?php echo CHtml::link('<section id="kel">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/kel.jpg" alt="Kelly Reedy" width="133" height="168">Kelly Reedy - Senior Stylist</h3>
        <p>Salon manager Kelly has 12 years experience working in Warrington town centre.  She holds a place as a pivotal member at Paul Kemp Hairdressing. She specialises in long hair styling, she is also the extension expert within the salon.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Kelly : &pound;114*</p>
        </section>', array('site/page','view'=>'team_kel')); ?>
        
        <?php echo CHtml::link('<section id="jo">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/Jo.jpg" width="133" height="168" alt="Jo Mahoney">Jo Mahoney - Senior Stylist</h3>
        <p>Jo is a fantastic stylist with many years experience, she\'s a real long standing asset to the team. Her down to earth nature instantly puts you at ease and her hairdressing skills really shine. She loves doing men and women\'s hair. Book well in advance - she\'s a very busy stylist. </p>
        <p class="teamprice">Average Cut &amp; Colour price with Jo : &pound;114*</p>
        </section>', array('site/page','view'=>'team_jo')); ?>
        
        <?php echo CHtml::link('<section id="iz">
        <h3><img src="' . Yii::app()->request->baseUrl .'/images/staff/izzy.jpg" width="133" height="168" alt="Isobelle Lamb">Isobelle Lamb - Senior Stylist</h3>
        <p>Izzy has quickly established herself as an extremely sought after stylist. Her natural flair with creating beautiful, wearable styles has built her a strong following. Izzy recently won the National <em>Redken Style Innovator</em> award. She is also a specialist in extensions. </p>
        <p class="teamprice">Average Cut &amp; Colour price with Izzy : &pound;114*</p>
        </section>', array('site/page','view'=>'team_izzy')); ?>
        
        <?php echo CHtml::link('<section id="kate">
        <h3><img src="' . Yii::app()->request->baseUrl .'/images/staff/kate.jpg" width="133" height="168" alt="Kate O\'halloran">Kate O\'halloran - Stylist</h3>
        <p>Kate has the ability to put you instantly at ease and with her many years of experience she\'ll find a look that\'s perfect for you. Colouring, cutting and long hair styling are her specialities.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Kate : &pound;96*</p>
        </section>', array('site/page','view'=>'team_kate')); ?>
        
        <?php echo CHtml::link('<section id="michelle_r">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/michelle_r.jpg" width="133" height="168" alt="Michelle Railton">Michelle Railton - Stylist</h3>
        <p>Michelle is the latest stylist to join the team. A former stylist at Daniel Anderson Hairdressing, Michelle is a highly skilled hairdresser, she especially loves soft, natural styles and men\'s indie/mod cutting.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Kate : &pound;96*</p>
        </section>', array('site/page','view'=>'team_michelle')); ?>
        
      	<?php echo CHtml::link('<section id="leon">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/leon.jpg" width="133" height="168" alt="Leon Pritchard">Leon Pritchard - Stylist</h3>
        <p>Leon has quickly built up a strong reputation for his skills in cutting, colouring &amp; styling hair. He\'s a big hit in the salon due to his friendly personality. He came to us after working at Daniel Anderson Hairdressing and is fast expanding his ever growing client base. </p>
        <p class="teamprice">Average Cut &amp; Colour price with Leon : &pound;96*</p>
        </section>', array('site/page','view'=>'team_leon')); ?>
        
        <?php echo CHtml::link('<section id="jack">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/jack.jpg" width="133" height="168" alt="Jack Broady">Jack Broady - Stylist</h3>
        <p>Jack came onboard at the end of 2012 and is now an influential member of the team as head of training. He\'s been hairdressing since the age of 13. He loves all aspects including mens cutting &amp; styling. His speciality is cutting and colouring long hair.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Jack : &pound;96*</p>
        </section>', array('site/page','view'=>'team_jack')); ?>
        
        <?php echo CHtml::link('<section id="tash">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/tash.jpg" width="133" height="168" alt="Natasha Bailey">Tash Bailey - Graduate Stylist</h3>
        <p>Tash\'s passion for hairdressing is apparent from the minute you meet her. She loves creative colouring and cutting plus she\'s highly skilled in styling hair.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Tash : &pound;76*</p>
        </section>', array('site/page','view'=>'team_tash')); ?>
        
        <?php echo CHtml::link('<section id="meg">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/meg.jpg" width="133" height="168" alt="Megan Mullaney">Meg Mullaney - Graduate Stylist</h3>
        <p>Meg joined the team as an apprentice and quickly demonstrated her natural flair for hairdressing. After completing her training she is now a Graduate stylist in the team. Meg has great talent for hair up styling and her cutting and colouring skills are extremely strong</p>
        <p class="teamprice">Average Cut &amp; Colour price with Meg : &pound;56*</p>
        </section>', array('site/page','view'=>'team_meg')); ?>
        
        <?php echo CHtml::link('<section id="ashley">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/ashley.jpg" width="133" height="168" alt="Ashley Tennant">Ashley Tennant - Apprentice</h3>
        <p>Ashley is our newest team member and is on a fast track apprenticeship with the aim to be a graduate stylist within 6 month\'s. She is now looking to further her skills. All her training is fully supervised so you can be assured you\'ll love the end result</p>
        <p class="teamprice">Average Cut &amp; Colour price with Ashley : &pound;15*</p>
        </section>', array('site/page','view'=>'team_ashley')); ?>
        
        </section>
        
	</section>        
          
    <section id="teambottom">
        <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
    </section>