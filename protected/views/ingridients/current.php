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
</div>