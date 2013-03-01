<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section id="homeimage">
<!--Main bit-->
    </section>
    <section id="homecopy">
    
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos/hair_reborn.png" alt="TIGI Hair Reborn" width="417" height="368"/>
    
    <p id="reputation">Paul Kemp Hairdressing is excited to introduce this incredible range of products available exclusively in the salon</p>
    <?php echo CHtml::link('Find out more about the range here',array('site/page','view'=>'news', '#'=>'HairReborn')); ?>
    </section>
    <section id="home_copy_hidden">
    <h2>A New Standard of Hairdressing</h2>
    <p>Paul Kemp Hairdressing is located right in the heart of Warrington town centre. Sister salon to the award winning <em><a href="http://www.jakatasalon.co.uk/" target="_blank">Jakata</a></em>, the stunning salon opened in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise.</p>
    <p>The talented hairdressing team are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing so you can just sit back, relax and enjoy the experience.</p>
    <p>The salon has built up a strong reputation for creating stunning, fashionable looks tailored to suit you, and your lifestyle, so if you're looking for a new <strong class="paraend">hairdressers in Warrington</strong> then look no further!</p>
	</section> 
  
<!--NewsItems-->
    <?php echo CHtml::link('<aside id="news1">
    <h3 class="newsheader">PK awarded Good Salon Guide 5 Star Status</h3>
    <p class="newspara">We\'re really pleased to announce this great award</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    	</aside>',array('site/page','view'=>'news', '#'=>'GoodSalonGuide')); ?>
    	
    <?php echo CHtml::link('<aside id="news2">
    <h3 class="newsheader">Limited Edition Hair Reborn Package</h3>
    <p class="newspara">A special package for new clients - worth &pound;150 for just &pound;75</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    	</aside>',array('site/page','view'=>'reborn')); ?>
    
    <?php echo CHtml::link('<aside id="news3">
    <h3 class="newsheader">Thicker, Fuller hair is yours</h3>
    <p class="newspara"><strong>Invati was recently launched by Aveda, formulated specifically for people with thinning hair</strong></p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    </aside>',array('site/page','view'=>'news', '#'=>'Invati')); ?>
    
    <?php echo CHtml::link('<aside id="news4">
    <h3 class="newsheader">Men\'s Hair Experts</h3>
    <p class="newspara">Here at PK we also excel in men\'s hairdressing. Our team wil give you the look you\'ve always wanted</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    </aside>',array('site/page','view'=>'men')); ?>	
    
    