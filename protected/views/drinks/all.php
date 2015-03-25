<?php
/* @var $this DrinksController */
//var_dump($drinks);
$cat=$drinks[0]->drink_type_rus;
?>
<div class='list'>
    <h3><?=$cat?></h3>
<?php
    foreach($drinks as $drink){
        if ($cat!= $drink->drink_type_rus){
            $cat=$drink->drink_type_rus;
            echo CHtml::openTag('div',array('class'=>'list'));
            echo CHtml::tag('h3',array(),$cat);
            echo CHtml::closeTag('div');
        }
?>
        <div class="list-item-drinks">
            <a href='<?=Yii::app()->createUrl('/drinks/current',array('id'=>$drink->id))?>'><img src='<?=$drink->drink_img?>' alt='<?=$drink->drink_title?>'><?=$drink->drink_title?></a>
        </div>
<?php
    }
?>








