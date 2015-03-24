<?php
/* @var $this IngridientsController */
$cat=$ings[0]->ing_type_rus;
?>
    <h3><?=$cat?></h3>
<?php
foreach ($ings as $ing) :
    if($cat!= $ing->ing_type_rus) {
       $cat = $ing->ing_type_rus;
    echo CHtml::openTag('div',array('class'=>'list'));
    echo CHtml::tag('h3',array(),$cat);
    echo CHtml::closeTag('div');
    }
    ?>

    <div class="list-item">
        <a href='<?= Ingridients::getCurrentUrl(array('id' => $ing->id))?>'><img src='<?=$ing->ing_img?>' alt='<?=$ing->ing_title?>'><?=$ing->ing_title?></a>
    </div>

<?php
endforeach;
?>
