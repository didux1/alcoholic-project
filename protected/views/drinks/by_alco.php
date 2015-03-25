<?php
/* @var $this DrinksController */
//var_dump($drinks);
if ($drinks[0]->is_alco === '1'){
    $cat='Алкогольные';
}
elseif ($drinks[0]->is_alco === '0'){
    $cat='Безалкогольные';
}
?>
<div class='list'>
    <h3><?=$cat?></h3>
<?php
    foreach($drinks as $drink){
?>
        <div class="list-item-drinks">
            <a href='<?=Yii::app()->createUrl('/drinks/current',array('id'=>$drink->id))?>'><img src='<?=$drink->drink_img?>' alt='<?=$drink->drink_title?>'><?=$drink->drink_title?></a>
        </div>
<?php
    }
?>








