<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="ru">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="shadow">
    <div class="pageHeader">
        <div class="logo"></div>
    </div>

    <div id="topnav">
        <?php /*
        <ul>
            <li><a href="index.php">Домой</a></li>
            <li><a href="shaker.php">Шейкер</a></li>
            <li><a>Коктейли</a>
                <ul>
                    <li><a href="index.php?drink_type=all">Все</a></li>
                    <li><a href="index.php?drink_type=alco">Алкогольные</a></li>
                    <li><a href="index.php?drink_type=non_alco">Безалкогольные</a></li>
                    <li><a href="index.php?drink_type=shot">Шоты</a></li>
                    <li><a href="index.php?drink_type=lounge">Лаунж</a></li>
                </ul>
            </li>
            <li><a>Ингридиенты</a>
                <ul>
                    <li><a href="index.php?ing_type=all">Все</a></li>
                    <li><a href="index.php?ing_type=strong">Крепкий алкоголь</a></li>
                    <li><a href="index.php?ing_type=liqueur">Ликеры и настойки</a></li>
                    <li><a href="index.php?ing_type=vermouth">Вермуты</a></li>
                    <li><a href="index.php?ing_type=wine">Вина</a></li>
                    <li><a href="index.php?ing_type=sparking_wine">Игристые вина</a></li>
                    <li><a href="index.php?ing_type=beer_cidre">Пиво и сидр</a></li>
                    <li><a href="index.php?ing_type=bitter">Биттеры</a></li>
                    <li><a href="index.php?ing_type=syrup">Сиропы</a></li>
                    <li><a href="index.php?ing_type=juice">Соки и морсы</a></li>
                    <li><a href="index.php?ing_type=water_drink">Вода и напитки</a></li>
                    <li><a href="index.php?ing_type=tea_coffee">Чай и кофе</a></li>
                    <li><a href="index.php?ing_type=fruit">Фрукты</a></li>
                    <li><a href="index.php?ing_type=Ice">Лед</a></li>
                    <li><a href="index.php?ing_type=milk_eggs">Мол. продукты. Яйца</a></li>
                    <li><a href="index.php?ing_type=berries">Ягоды</a></li>
                    <li><a href="index.php?ing_type=vegetables">Овощи</a></li>
                    <li><a href="index.php?ing_type=grass_flowers">Травы и цветы</a></li>
                    <li><a href="index.php?ing_type=sauces_oil">Соусы и масло</a></li>
                    <li><a href="index.php?ing_type=spices">Специи </a></li>
                    <li><a href="index.php?ing_type=addons">Добавки</a></li>
                </ul>
            </li>
            <li><a>Девайсы</a>
                <ul>
                    <li><a href="index.php?device_type=all">Все</a></li>
                    <li><a href="index.php?device_type=dishes">Посуда</a></li>
                    <li><a href="index.php?device_type=instruments">Инструменты</a></li>
                    <li><a href="index.php?device_type=decoration">Украшения</a></li>
                </ul>
            </li>
        </ul>
 */ ?>
        <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                array('label'=>'Домой', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Коктейли', 'url'=>array('/cocktails/all'),
                    'items'=>array(
                        array('label'=>'Все', 'url'=>array('/cocktails/all')),
                        array('label'=>'Алкогольные', 'url'=>array('/cocktails/alco')),
                        array('label'=>'Безалкогольные', 'url'=>array('/cocktails/non-alco')),
                        array('label'=>'Шоты', 'url'=>array('/cocktails/shot')),
                        array('label'=>'Лаунж', 'url'=>array('/cocktails/lounge')),
                    ),
                ),
                array('label'=>'Ингридиенты', 'url'=>array('/cocktails/all'),
                    'items'=>array(
                        array('label'=>'Все', 'url'=>Yii::app()->createUrl('/ingridients/all')),
                        array('label'=>'Крепкий алкоголь', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'strong'))),
                        array('label'=>'Ликеры и настойки', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'liqueur'))),
                        array('label'=>'Вермуты', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'vermouth'))),
                        array('label'=>'Вина', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'wine'))),
                        array('label'=>'Игристые вина', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'sparking_wine'))),
                        array('label'=>'Пиво и сидр', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'beer_cidre'))),
                        array('label'=>'Биттеры', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'bitter'))),
                        array('label'=>'Сиропы', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'syrup'))),
                        array('label'=>'Соки и морсы', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'juice'))),
                        array('label'=>'Вода и напитки', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'water_drink'))),
                        array('label'=>'Чай и кофе', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'tea_coffee'))),
                        array('label'=>'Фрукты', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'fruit'))),
                        array('label'=>'Мол. продукты. Яйца', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'milk_eggs'))),
                        array('label'=>'Ягоды', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'berries'))),
                        array('label'=>'Овощи', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'vegetables'))),
                        array('label'=>'Травы и цветы', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'grass_flowers'))),
                        array('label'=>'Соусы и масло', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'sauces_oil'))),
                        array('label'=>'Специи', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'spices'))),
                        array('label'=>'Добавки', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'addons'))),
                    ),
                ),
                array('label'=>'Девайсы', 'url'=>array('/cocktails/all'),
                    'items'=>array(
                        array('label'=>'Все', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'beer_cidre'))),
                        array('label'=>'Посуда', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'beer_cidre'))),
                        array('label'=>'Инструменты', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'beer_cidre'))),
                        array('label'=>'Украшения', 'url'=>Yii::app()->createUrl('/ingridients/view', array('name' => 'beer_cidre'))),
                    ),
                ),
        ))); ?>
        <hr>
    </div>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

    <div class="footer">
        <hr>
        <p id="minzdrav">ЧРЕЗМЕРНОЕ УПОТРЕБЛЕНИЕ АЛКОГОЛЯ ВРЕДИТ ВАШЕМУ ЗДОРОВЬЮ</p>
        <hr>
        <h4>&copy;2015</h4>
    </div><!-- footer -->

</div><!-- shadow -->

</body>
</html>
