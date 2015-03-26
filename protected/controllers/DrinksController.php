<?php

class DrinksController extends Controller
{
    public  function actionAll(){
        $criteria = new CDbCriteria;
        $criteria->order='drink_type_rus DESC, drink_title ASC';
        $drinks=Drinks::model()->findAll($criteria);
        $this->render('all',array('drinks'=>$drinks));
    }

    public function actionCurrent($id){
        $criteria = new CDbCriteria;
        $criteria->compare('drink_id', $id);
        $drink=Drinks::model()->with('many_many')->findAll($criteria);
        $this->render('current',array('drink'=>$drink[0]));
    }

    public function actionByAlco($is_alco){
        $criteria = new CDbCriteria;
        $criteria->order='is_alco ASC, drink_title ASC';
        $criteria->compare('is_alco', $is_alco);
        $drinks=Drinks::model()->findAll($criteria);
        $this->render('by_alco',array('drinks'=>$drinks));
    }

    public function actionCategory($type){
        $criteria = new CDbCriteria;
        $criteria->compare('is_ing', 1);
        $criteria->compare('drink_type_en',$type);
        $drinks=Drinks::model()->with('many_many')->findAll($criteria);
        $this->render('by_type',array('drinks'=>$drinks));
    }

    public function actionByIng($id){
        $criteria = new CDbCriteria;
         $criteria->compare('ing_id', $id);
       // $criteria->compare('drink_type_en',$type);
        $dr=Drinks::model()->with('many_many')->findAll($criteria);
        $this->render('by_ing',array('dr'=>$dr));
    }


}