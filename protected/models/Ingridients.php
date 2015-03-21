<?php

/**
 * This is the model class for table "ingridients".
 *
 * The followings are the available columns in table 'ingridients':
 * @property integer $id
 * @property string $ing_title
 * @property string $ing_desc
 * @property string $ing_type
 * @property string $ing_img
 * @property string $ing_type_rus
 * @property integer $is_ing
 *
 * The followings are the available model relations:
 * @property DrinkIng[] $drinkIngs
 */
class Ingridients extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ingridients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ing_title, ing_desc, ing_type, ing_img, ing_type_rus', 'required'),
			array('is_ing', 'numerical', 'integerOnly'=>true),
			array('ing_title, ing_type, ing_type_rus', 'length', 'max'=>45),
			array('ing_desc', 'length', 'max'=>3000),
			array('ing_img', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ing_title, ing_desc, ing_type, ing_img, ing_type_rus, is_ing', 'safe', 'on'=>'search'),
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
			'drinkIngs' => array(self::HAS_MANY, 'DrinkIng', 'ing_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ing_title' => 'Ing Title',
			'ing_desc' => 'Ing Desc',
			'ing_type' => 'Ing Type',
			'ing_img' => 'Ing Img',
			'ing_type_rus' => 'Ing Type Rus',
			'is_ing' => 'Is Ing',
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
		$criteria->compare('ing_title',$this->ing_title,true);
		$criteria->compare('ing_desc',$this->ing_desc,true);
		$criteria->compare('ing_type',$this->ing_type,true);
		$criteria->compare('ing_img',$this->ing_img,true);
		$criteria->compare('ing_type_rus',$this->ing_type_rus,true);
		$criteria->compare('is_ing',$this->is_ing);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ingridients the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @param array $params
	 *
	 * @return string
	 */
	public static function getCurrentUrl($params = array()) {
		return Yii::app()->createUrl('/ingridients/current', $params);
	}
}
