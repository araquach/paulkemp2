<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - The Team - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Paul Kemp Hairdressing - The Team"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "The Paul Kemp team comprises of ten skilled stylists ready to give you the new look you've been waiting for!"; ?>
<?php  Yii::app()->facebook->ogTags['og:image'] =  "http://www.paulkemphairdressing.com/images/exit/pk_replacers.jpg" ; ?>

<section id="team">
<ul>
	<li><p class="up">Shell</p></li>
	<li><p>Kel</p></li>
	<li><p class="up">Jo</p></li>
	<li><p>Izzy</p></li>
	<li><p class="up">Kate</p></li>
	<li><p>Tash</p></li>
	<li><p class="up">Leon</p></li>
</ul>
      
      	
      	
       <?php echo CHtml::link('<section id="kel">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/kel.jpg" alt="Kelly Reedy" width="133" height="168">Kelly Reedy - Senior Stylist</h3>
        <p>Salon manager Kelly has 14 years experience working in Warrington town centre.  She is the team leader of the salon. She specialises in long hair styliny and is also one of the extension experts within the salon.</p>
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
        <p>Michelle is a highly skilled hairdresser with loads of experience. She is rapidly becoming a very highly sought after stylist in the salon. She especially loves soft, natural styles and men\'s indie/mod cutting.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Kate : &pound;96*</p>
        </section>', array('site/page','view'=>'team_michelle')); ?>
        
      	<?php echo CHtml::link('<section id="leon">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/leon.jpg" width="133" height="168" alt="Leon Pritchard">Leon Pritchard - Stylist</h3>
        <p>Leon has quickly built up a strong reputation for his skills in cutting, colouring &amp; styling hair. He\'s a big hit in the salon due to his friendly personality. He has grown to be a pivotal member of the team and is fast expanding his ever growing client base. </p>
        <p class="teamprice">Average Cut &amp; Colour price with Leon : &pound;96*</p>
        </section>', array('site/page','view'=>'team_leon')); ?>
        
        <?php echo CHtml::link('<section id="caleb">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/caleb.jpg" width="133" height="168" alt="Caleb Barrie">Caleb Barrie - Stylist</h3>
        <p>Caleb is a diverse stylist with a real passion for hairdressing. He\'s a recent addition to the team. He’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry’s.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Caleb : &pound;96*</p>
        </section>', array('site/page','view'=>'team_caleb')); ?>
        
        <?php echo CHtml::link('<section id="tash">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/tash.jpg" width="133" height="168" alt="Natasha Bailey">Tash Bailey - Stylist</h3>
        <p>Tash\'s passion for hairdressing is apparent from the minute you meet her. She loves creative colouring and cutting plus she\'s highly skilled in styling hair.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Tash : &pound;76*</p>
        </section>', array('site/page','view'=>'team_tash')); ?>
        
        <?php echo CHtml::link('<section id="ashley">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/ashley.jpg" width="133" height="168" alt="Ashley Tennant">Ashley Tennant - Graduate Stylist</h3>
        <p>Ashley recently qualified and is now a Gradutae stylist within the team. She is developing at an extremely fast rate and will be moving up the ranks quickly.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Ashley : &pound;55*</p>
        </section>', array('site/page','view'=>'team_ashley')); ?>
        
        <?php echo CHtml::link('<section id="leanne">
        <h3><img src="' . Yii::app()->request->baseUrl . '/images/staff/leanne.jpg" width="133" height="168" alt="Leanne Bartlett">Leanne Bartlett - Graduate Stylist</h3>
        <p>Leanne recently joined the team after working at a reputable salon in Stockton Heath. Her passion lies in creating quirky, individual looks and is skilled in colour correction.</p>
        <p class="teamprice">Average Cut &amp; Colour price with Leanne : &pound;55*</p>
        </section>', array('site/page','view'=>'team_leanne')); ?>
        
        </section>
        
	</section>        
          
    <section id="teambottom">
        <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
    </section>