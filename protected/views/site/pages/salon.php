<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - The Salon - Hairdressers in Cheshire';

?>

<section id="salon">
  <section id="saloninfo">
    <h2>The Salon</h2>
    <p>With a prime position right on the corner of <em>Sankey Street</em> and <em>Springfield street</em> the salon premises is an early 1900's building that was once home to the Picturedrome and Cameo cinemas! It's taken on many guises since, but when we got hold of it we knew we wanted it to be the warmest, friendliest most relaxing salon in the area.</p>
    <p>The salon was designed to create the ultimate in relaxing environments. With cosy, defined areas, you never feel too exposed, but its still open enough to soak up the vibrant, sociable atmosphere. The warm, friendly staff are always on hand to make you feel at home. Enjoy a cappuccino, latte or a glass of wine whilst you are being pampered.</p>
    <p>If you're traveling to us by car, there are loads of car park facilities nearby. By train or bus, its only a short walk from both train stations and the bus terminal. </p>
    <?php echo CHtml::link('Map and more info here &gt;',array('site/contact', '#'=>'map' )); ?>
    
    </section>
    <div id="salonimages">
    <img name="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/salon/salon_shot_2.jpg" width="240" height="160" alt="">
    <img name="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/salon/salon_shot_1.jpg" width="240" height="160" alt="">
    <img name="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/salon/salon_shot_4.jpg" width="240" height="160" alt="">
    <img name="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/salon/salon_shot_3.jpg" width="240" height="160" alt="">
    <img name="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/salon/salon_shot_6.jpg" width="240" height="160" alt="">
    <img name="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/salon/salon_shot_5.jpg" width="240" height="160" alt="">
    </div>
</section>
