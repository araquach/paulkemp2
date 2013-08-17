<?php

/**
 * This is the model class for table "feedback_stylist".
 *
 * The followings are the available columns in table 'feedback_stylist':
 * @property integer $id
 * @property string $stylist
 * @property integer $salon
 * @property integer $active
 */
class FeedbackStylist extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FeedbackStylist the static model class
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
		return 'feedback_stylist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stylist, salon, active', 'required'),
			array('salon', 'numerical', 'integerOnly'=>true),
			array('stylist', 'length', 'max'=>120),
			array('active', 'boolean', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, stylist, salon, active', 'safe', 'on'=>'search'),
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
			'Feedbacks' => array(self::HAS_MANY, 'FeedbackStylist', 'stylist_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'stylist' => 'Your Stylist',
			'salon' => 'Salon',
			'active' => 'Active?',
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
		$criteria->compare('stylist',$this->stylist,true);
		$criteria->compare('salon',$this->salon);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}