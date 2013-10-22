<?php

/**
 * This is the model class for table "offer". Used for special limited, personalised offers.
 *
 * The followings are the available columns in table 'offer':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile
 * @property string $email
 * @property string $first_stylist
 * @property string $last_stylist
 * @property string $first_visit
 * @property string $last_visit
 * @property integer $number_visits
 */
class Offer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Offer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'offer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, first_name, last_name, mobile, email, first_stylist, last_stylist, first_visit, last_visit, number_visits', 'required'),
			array('id, number_visits', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, email, first_stylist, last_stylist', 'length', 'max'=>256),
			array('mobile', 'length', 'max'=>16),
			array('first_visit, last_visit', 'length', 'max'=>22),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, mobile, email, first_stylist, last_stylist, first_visit, last_visit, number_visits', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'mobile' => 'Mobile',
			'email' => 'Email',
			'first_stylist' => 'First Stylist',
			'last_stylist' => 'Last Stylist',
			'first_visit' => 'First Visit',
			'last_visit' => 'Last Visit',
			'number_visits' => 'Number Visits',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('first_stylist',$this->first_stylist,true);
		$criteria->compare('last_stylist',$this->last_stylist,true);
		$criteria->compare('first_visit',$this->first_visit,true);
		$criteria->compare('last_visit',$this->last_visit,true);
		$criteria->compare('number_visits',$this->number_visits);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}