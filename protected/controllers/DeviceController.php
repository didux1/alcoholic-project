<?php

class DeviceController extends Controller
{
    /**
     * @param $name
     */
    public function actionView($name=null){
        $criteria= new CDbCriteria;
        $criteria->compare('is_ing', 0);
        $criteria->order='ing_type_rus ASC';
        if ($name!=null) {
            $criteria->compare('ing_type', $name);
            $criteria->order='ing_title ASC';
        }
        $a = Ingridients::model()->findAll($criteria);

        $this->render('view',array('devs' =>$a));
    }

    /**
     * @param $id
     */
    public function actionCurrent($id){
        $criteria= new CDbCriteria;
        $criteria->compare('id', $id);
        $current_dev = Ingridients::model()->findAll($criteria);

        $this->render('current',array('current_dev' => $current_dev));
    }
}
