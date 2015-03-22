<?php
/* @var $this DrinksController */

$this->breadcrumbs=array(
	'Drinks',
);
$recipe = preg_split('/(?=[А-Я])/u', $drink->drink_recipe,-1,PREG_SPLIT_NO_EMPTY);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<div class='cocktail'>
    <div class='drink_info'>
        <h3><?=$drink->drink_title?></h3>
        <img src='<?=$drink->drink_img?>' alt='<?=$drink->drink_title?>' class='cocktail_img'>
        <div class='text'>
            <h4>Как приготовить</h4>

            <ol>
<?php
                foreach ($recipe as $item){
                echo "<li>$item</li>";
                }
?>
            </ol>

            <h4>Легенда коктейля</h4>
            <p><?=$drink->drink_history?></p>
        </div>
    </div>
</div>

<?php
foreach ($drink->many_many as $ing)
  echo  $ing->id." is ing - ".$ing->is_ing."<br />";
?>
