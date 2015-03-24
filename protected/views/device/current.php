<?php
/* @var $this DeviceController */

?>
<div class='ingridient'>
    <?php
    $this->widget('zii.widgets.CBreadcrumbs', array(
        'links'=>array(
            'Все девайсы'=>array('/device/view'),
            $current_dev[0]->ing_type_rus=>array('/device/view', 'name'=>$current_dev[0]->ing_type),
            $current_dev[0]->ing_title,
        ),
        'homeLink' => false,
        'htmlOptions' => array(
            'id' => 'navigation'
        )
    ));
    ?>
    <h3 id='title'><?=$current_dev[0]->ing_title?></h3>
    <p><img src='<?=$current_dev[0]->ing_img?>' alt='<?=$current_dev[0]->ing_title?>' class='float_img'><?=$current_dev[0]->ing_desc?></p>
</div>