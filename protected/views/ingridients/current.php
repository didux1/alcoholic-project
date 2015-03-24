<?php
/* @var $this IngridientsController */

?>
<div class='ingridient'>
<?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>array(
                        'Все ингридиенты'=>array('/ingridients/view'),
                        $current_ing[0]->ing_type_rus=>array('/ingridients/view', 'name'=>$current_ing[0]->ing_type),
                        $current_ing[0]->ing_title,
                    ),
                    'homeLink' => false,
                    'htmlOptions' => array(
                        'id' => 'navigation'
                    )
                ));
?>
    <h3 id='title'><?=$current_ing[0]->ing_title?></h3>
    <p><img src='<?=$current_ing[0]->ing_img?>' alt='<?=$current_ing[0]->ing_title?>' class='float_img'><?=$current_ing[0]->ing_desc?></p>
<?php
    if ($drinks_count%10 == 1 && $drinks_count%100 != 11){
        $word="коктейль";
    }
    elseif ($drinks_count%10 >= 2 && $drinks_count%10 <= 4 && $drinks_count%100 !=12 && $drinks_count%100 !=13){
        $word="коктейля";
    }
    else{
        $word="коктейлей";
    }
    if ($drinks_count > 0):
?>
<div class='cocktail_look'>
    <a href='<?=Yii::app()->createUrl('/ingridients/view', array('name' => 'wine'))?>'>Посмотри <?=$drinks_count?> <?=$word?> с ингридиентом <?=$current_ing[0]->ing_title?></a>
</div>
<?php
    endif
?>
</div>