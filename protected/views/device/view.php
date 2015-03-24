<?php
/* @var $this DeviceController */
$cat=$devs[0]->ing_type_rus;
?>
    <h3><?=$cat?></h3>
<?php
foreach ($devs as $dev) :
    if($cat!= $dev->ing_type_rus) {
       $cat = $dev->ing_type_rus;
    echo CHtml::openTag('div',array('class'=>'list'));
    echo CHtml::tag('h3',array(),$cat);
    echo CHtml::closeTag('div');
    }
    ?>

    <div class="list-item">
        <a href='<?= Yii::app()->createUrl('/device/current',array('id' => $dev->id))?>'><img src='<?=$dev->ing_img?>' alt='<?=$dev->ing_title?>'><?=$dev->ing_title?></a>
    </div>

<?php
endforeach;
?>
