<?php

class DrinksController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionCurrent($id){
        $criteria = new CDbCriteria;
        $criteria->compare('drink_id', $id);
        $drink=Drinks::model()->with('many_many')->findAll($criteria);
        $this->render('index',array('drink'=>$drink[0]));
    }

}