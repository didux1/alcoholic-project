<?php

class IngridientsController extends Controller
{


    public function actionIndex()
    {
        $this->render('index');
    }

	/**
	 * @param $name
	 */
	public function actionView($name = 'ice'){
		$criteria= new CDbCriteria;
		$criteria->compare('ing_type', $name);
		$a = Ingridients::model()->findAll($criteria);
		$this->render('view',array('ings' =>$a));
	}

	public function actionCurrent(){

	}

}
