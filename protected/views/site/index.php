<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/feedback-feed.js');
?>

<section id="homeimage">
<div id="feedback_feed">
	<ul>
	<?php foreach ($model as $key => $value): ?>
		<?php echo '<li>&quot;'. $value->extra_edit . '&quot;<br>' . '<span class="client">' . ucfirst($value->FeedbackClient->first_name) . ' ' . ucfirst($value->FeedbackClient->last_name) . ' - hair by ' . strstr($value->FeedbackClient->stylist, ' ', true) . '</span></li>'?>
	
	<?php endforeach; ?>
	</ul>
</div> <!--#feedback_feed-->

    </section>
    <section id="homecopy">
    <h2>A New Standard of Hairdressing</h2>
    <p>Paul Kemp Hairdressing is located right in the heart of Warrington town centre. Sister salon to the award winning <em><a href="http://www.jakatasalon.co.uk/" target="_blank">Jakata</a></em>, the stunning salon opened in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise.</p>
    <p>The talented hairdressing team are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing so you can just sit back, relax and enjoy the experience.</p>
    <p><em>The salon has built up a strong reputation for creating stunning, fashionable looks tailored to suit you, and your lifestyle, so if you're looking for a new <strong class="paraend">hairdressers in Warrington</strong> then look no further!</em></p>
    
	</section>
  
<!--NewsItems-->
    <?php echo CHtml::link('<aside id="news1">
    <h3 class="newsheader">PK Starlight Walk</p>
    <p class="newspara">The Paul Kemp Team have been raising awareness for the St Rocco\'s Starlight Walk</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    	</aside>',array('site/page','view'=>'news', '#'=>'Starlight')); ?>
    	
    <?php echo CHtml::link('<aside id="news2">
    <h3 class="newsheader">NEW ghd Eclipse Styling Irons</h3>
    <p class="newspara">These revolutionary irons are only &pound;145 for a limited time</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    	</aside>',array('site/page','view'=>'news', '#'=>'ghdEclipse')); ?>
    
    <?php echo CHtml::link('<aside id="news3">
    <h3 class="newsheader">Great Career Opportunities</h3>
    <p class="newspara">Looking to join the PK team? Apply to be a stylist or apprentice here</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    </aside>',array('site/page','view'=>'recruitment')); ?>
    
    <?php echo CHtml::link('<aside id="news4">
    <h3 class="newsheader">Spring into <br>a new look</h3>
    <p class="newspara">we\'ve put together a selection of recent celebrity looks to inspire you</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    </aside>',array('site/page','view'=>'news', '#'=>'springLooks')); ?>	
    
    
    
    