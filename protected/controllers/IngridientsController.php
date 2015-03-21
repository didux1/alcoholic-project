<?php

class IngridientsController extends Controller
{


    public function actionIndex()
    {
        $this->render('index');
    }

	public function actionAddons()
	{

		$this->render('addons');
	}

	public function actionBeer()
	{
        $criteria= new CDbCriteria;
        $criteria->condition="ing_type = 'beer_cidre'";
        $a = Ingridients::model()->findAll($criteria);
		$this->render('beer',array('ings' =>$a));
	}

	public function actionBerries()
	{
		$this->render('berries');
	}

	public function actionBitter()
	{
		$this->render('bitter');
	}

	public function actionFruits()
	{
		$this->render('fruits');
	}

	public function actionGrassFlower()
	{
		$this->render('grassFlower');
	}


	public function actionJuice()
	{
		$this->render('juice');
	}

	public function actionLiqueur()
	{
		$this->render('liqueur');
	}

	public function actionMilkEggs()
	{
		$this->render('milkEggs');
	}

	public function actionSouceOil()
	{
		$this->render('souceOil');
	}

	public function actionSparkingWine()
	{
		$this->render('sparkingWine');
	}

	public function actionSpices()
	{
		$this->render('spices');
	}

	public function actionStrong()
	{
		$this->render('strong');
	}

	public function actionSyrup()
	{
		$this->render('syrup');
	}

	public function actionTeaCoffe()
	{
		$this->render('teaCoffe');
	}

	public function actionVegetables()
	{
		$this->render('vegetables');
	}

	public function actionVermouth()
	{
		$this->render('vermouth');
	}

	public function actionWater()
	{
		$this->render('water');
	}

	public function actionWine()
	{
		$this->render('wine');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}