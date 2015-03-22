<?php

/**
 * This is the model class for table "drinks".
 *
 * The followings are the available columns in table 'drinks':
 * @property integer $id
 * @property string $drink_title
 * @property string $drink_recipe
 * @property string $drink_history
 * @property string $drink_type_en
 * @property string $drink_type_rus
 * @property string $drink_img
 * @property string $is_alco
 *
 * The followings are the available model relations:
 * @property DrinkIng[] $drinkIngs
 */
class Drinks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'drinks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('drink_title, drink_img', 'length', 'max'=>100),
			array('drink_type_en, drink_type_rus, is_alco', 'length', 'max'=>45),
			array('drink_recipe, drink_history', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, drink_title, drink_recipe, drink_history, drink_type_en, drink_type_rus, drink_img, is_alco', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'many_many' => array(self::MANY_MANY, 'Ingridients', 'drink_ing(drink_id, ing_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'drink_title' => 'Drink Title',
			'drink_recipe' => 'Drink Recipe',
			'drink_history' => 'Drink History',
			'drink_type_en' => 'Drink Type En',
			'drink_type_rus' => 'Drink Type Rus',
			'drink_img' => 'Drink Img',
			'is_alco' => 'Is Alco',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('drink_title',$this->drink_title,true);
		$criteria->compare('drink_recipe',$this->drink_recipe,true);
		$criteria->compare('drink_history',$this->drink_history,true);
		$criteria->compare('drink_type_en',$this->drink_type_en,true);
		$criteria->compare('drink_type_rus',$this->drink_type_rus,true);
		$criteria->compare('drink_img',$this->drink_img,true);
		$criteria->compare('is_alco',$this->is_alco,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Drinks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
