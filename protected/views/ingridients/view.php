<?php
/* @var $this IngridientsController */

?>


    <h3><?=$ings[0]->ing_type_rus?></h3>
<?php
foreach ($ings as $ing) :
    ?>
    <div class="list-item">
        <a href='<?= Ingridients::getCurrentUrl(array('id' => $ing->id))?>'><img src='<?=$ing->ing_img?>' alt='<?=$ing->ing_title?>'><?=$ing->ing_title?></a>
    </div>
<?php
endforeach;
?>
