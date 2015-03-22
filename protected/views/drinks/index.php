<?php
/* @var $this DrinksController */
$recipe = preg_split('/(?=[А-Я])/u', $drink->drink_recipe,-1,PREG_SPLIT_NO_EMPTY);
?>
<div class='cocktail'>
    <div class='drink_info'>
        <h3><?=$drink->drink_title?></h3>
        <img src='<?=$drink->drink_img?>' alt='<?=$drink->drink_title?>' class='cocktail_img'>
        <div class='text'>
            <h4>Как приготовить</h4>
            <ol>
<?php
                foreach ($recipe as $item){
                    echo CHtml::tag('li',array(),$item);
                }
?>
            </ol>
            <h4>Легенда коктейля</h4>
            <p><?=$drink->drink_history?></p>
        </div>
    </div>
    <div class='tables'>
        <div class='table_ing'>
            <table>
                <caption>Ингридиенты</caption>
<?php
                foreach($drink->many_many as $ing){
                    if ($ing->is_ing==1){
                         echo CHtml::openTag('tr');
                         echo CHtml::openTag('td');
                         echo CHtml::link($ing->ing_title, Drinks::ingUrls($ing->id));
                         echo CHtml::closeTag('td');
                         echo CHtml::closeTag('tr');
                    }
                }
?>
            </table>
        </div>
    </div>
    <div class='table_devices'>
        <table>
            <caption>Девайсы</caption>
<?php
                foreach($drink->many_many as $ing){
                    if ($ing->is_ing==0){
                        echo CHtml::openTag('tr');
                        echo CHtml::openTag('td');
                        echo CHtml::link($ing->ing_title, Drinks::ingUrls($ing->id));
                        echo CHtml::closeTag('td');
                        echo CHtml::closeTag('tr');
                    }
                }
?>
        </table>
    </div>
</div>