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
	public function actionView($name){
		$criteria= new CDbCriteria;
		$criteria->compare('ing_type', $name);
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

    public function actionAll(){
        $criteria = new CDbCriteria;
        $criteria->select = array('ing_type');
        $criteria->addCondition('is_ing = 1');
        $criteria->distinct=true;
        $ing_types=Ingridients::model()->findAll($criteria);
        foreach ($ing_types as $ing_type){
            $this->actionView($ing_type->ing_type);
        }
      //  $this->render('all',array('types' =>$ing_types));
    }

}
