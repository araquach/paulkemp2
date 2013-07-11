<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section id="homeimage">
<!--Main bit-->
    </section>
    <section id="homecopy">
    <h2>A New Standard of Hairdressing</h2>
    <p>Paul Kemp Hairdressing is located right in the heart of Warrington town centre. Sister salon to the award winning <em><a href="http://www.jakatasalon.co.uk/" target="_blank">Jakata</a></em>, the stunning salon opened in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise.</p>
    <p>The talented hairdressing team are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing so you can just sit back, relax and enjoy the experience.</p>
    <p><em>The salon has built up a strong reputation for creating stunning, fashionable looks tailored to suit you, and your lifestyle, so if you're looking for a new <strong class="paraend">hairdressers in Warrington</strong> then look no further!</em></p>
	</section>
  
<!--NewsItems-->
    <?php echo CHtml::link('<aside id="news1">
    <h3 class="newsheader">Meet the PK team</h3>
    <p class="newspara">Read each team members profile here to find a stylist suited to your needs</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    	</aside>',array('site/page','view'=>'team')); ?>
    	
    <?php echo CHtml::link('<aside id="news2">
    <h3 class="newsheader">NEW BC Fibre Force</h3>
    <p class="newspara">a new dimension of hair repair now available at Paul Kemp Hairdressing</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    	</aside>',array('site/page','view'=>'news', '#'=>'FibreForce')); ?>
    
    <?php echo CHtml::link('<aside id="news3">
    <h3 class="newsheader">Megan promoted to Graduate Stylist</h3>
    <p class="newspara"><strong>Check out these great offers with our latest up-and-coming star</strong></p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    </aside>',array('site/page','view'=>'graduate')); ?>
    
    <?php echo CHtml::link('<aside id="news4">
    <h3 class="newsheader">Men\'s Hair Experts</h3>
    <p class="newspara">Here at PK we also excel in men\'s hairdressing. Our team wil give you the look you\'ve always wanted</p>
    <p class="newscenter"><strong>Find out more here &gt;</strong></p>
    </aside>',array('site/page','view'=>'men')); ?>	
    
    