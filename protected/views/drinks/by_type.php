<?php
/* @var $this DrinksController */
Yii::app()->clientScript->registerPackage('operator');
if(isset($name)){
    $msg="Коктейли с ингридиентом $name";
}
?>
<h3><?=isset($name) ? $msg : $drinks[0]->drink_type_rus?></h3>
<div class='group-list-drink'>
    <?php
        foreach($drinks as $drink){
    ?>
    <div class='row-list-drink'>
        <div class='list-drink'>
            <a href='<?=Yii::app()->createUrl('/drinks/current', array('id' => $drink->id))?>' ><img src='<?=$drink->drink_img?>'> <?=$drink->drink_title?> </a>
        </div>
    <div class='list-items-and-operators'>
        <?php
            foreach($drink->many_many as $ing){
        ?>
                <span class='operator'></span>
                <div class='list-item'>
                    <a href=<?=Drinks::ingUrls($ing->id)?>><img src=<?=$ing->ing_img?> ><?=$ing->ing_title?></a>
                </div>
        <?php
            }
        ?>
    </div>
    </div>
    <?php
        }
    ?>
</div>