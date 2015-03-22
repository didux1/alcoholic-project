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
	public function actionView($name=null){
		$criteria= new CDbCriteria;
        $criteria->order='ing_type_rus ASC';
        $criteria->compare('is_ing', 1);
        if ($name!=null) {
            $criteria->compare('ing_type', $name);
        }
            $a = Ingridients::model()->findAll($criteria);

		$this->render('view',array('ings' =>$a));
	}

    /**
     * @param $id
     */
	public function actionCurrent($id){
        $criteria= new CDbCriteria;
        $criteria->compare('id', $id);
        $current_ing = Ingridients::model()->findAll($criteria);

        $criteria_count = new CDbCriteria;
        $criteria_count->compare('ing_id', $id);
        $drinks_count= DrinkIng::model()->count($criteria_count);

        $this->render('current',array('current_ing' =>$current_ing,
                                      'drinks_count' => $drinks_count,
                     ));
	}
}
