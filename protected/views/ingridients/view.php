<?php
/* @var $this IngridientsController */
$cat1=$ings[0]->ing_type_rus;
?>
    <h3><?=$cat1?></h3>
<?php
foreach ($ings as $ing) :
    if($cat1!=$ing->ing_type_rus) {
       $cat1 =$ing->ing_type_rus;
    echo CHtml::openTag('div',array('class'=>'list'));
    echo CHtml::tag('h3',array(),$cat1);
    echo CHtml::closeTag('div');
    }
    ?>

    <div class="list-item">
        <a href='<?= Ingridients::getCurrentUrl(array('id' => $ing->id))?>'><img src='<?=$ing->ing_img?>' alt='<?=$ing->ing_title?>'><?=$ing->ing_title?></a>
    </div>

<?php
endforeach;
?>
