<?php

/**
 * This is the model class for table "client".
 *
 * The followings are the available columns in table 'client':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $pcode
 * @property integer $opt_in_out
 * @property integer $dis100
 * @property integer $dis50
 * @property integer $dis25
 * @property integer $prize
 */
class Client extends CActiveRecord
{
	
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Client the static model class
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
		return 'client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, opt_in_out, dis100, dis50, dis25, prize', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name', 'length', 'max'=>25),
			array('phone, pcode', 'length', 'max'=>20),
			array('email, address2, city', 'length', 'max'=>50),
			array('address1', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, phone, email, address1, address2, city, pcode, opt_in_out, dis100, dis50, dis25, prize', 'safe', 'on'=>'search'),
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
			'id' => 'Unique Competition Code',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'phone' => 'Phone',
			'email' => 'Email',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'city' => 'City',
			'pcode' => 'Pcode',
			'opt_in_out' => 'Redeem Prize',
			'dis100' => 'Visit 1',
			'dis50' => 'Visit 2',
			'dis25' => 'Visit 3',
			'prize' => 'Prize',
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
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('pcode',$this->pcode,true);
		$criteria->compare('opt_in_out',$this->opt_in_out);
		$criteria->compare('dis100',$this->dis100);
		$criteria->compare('dis50',$this->dis50);
		$criteria->compare('dis25',$this->dis25);
		$criteria->compare('prize',$this->prize);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function details()
	{
		switch ($this->prize) {
		    case 0:
		        echo "<p>The following prizes can be redeemed over each visit</p><ul><li>Visit 1: A Cut &amp; Style plus two products (worth up to &pound;30)</li>
		        <li>Visit 2: 50% off this visit</li>
		        <li>Visit 3: 25% off this visit</li></ul>";
		        break;
		    case 1:
		        echo "<p>The following prizes can be redeemed over each visit</p><ul><li>Visit 1: A Colour and Cut, Dry &amp; style <p>or</p>A Cut, Dry &amp; Style plus 2 free products (worth up to &pound;25)</li>
		        <li>Visit 2: 50% off this visit</li>
		        <li>Visit 3: 25% off this visit</li></ul>";
		        break;
		    case 2:
		        echo "<p>The following prizes can be redeemed over each visit</p><ul><li>Visit 1: A Cut, Dry &amp; Style or Colour Service plus a product (worth up to &pound;15)</li>
		        <li>Visit 2: 25% off this visit</li>
		        <li>Visit 3: 10% off this visit</li></ul>";
		        break;
		    case 3:
		        echo "<p>The following prizes can be redeemed over each visit</p><ul><li>Visit 1: Two products (worth up to &pound;40 plus 20% off services)</li>
		        <li>Visit 2: 20% off this visit</li>
		        <li>Visit 3: 10% off this visit</li></ul>";
		        break;
		     case 4:
		         echo "<p>The following prizes can be redeemed over each visit</p><ul><li>Visit 1: A product (worth up to &pound;15) plus 20% off services</li>
		         <li>Visit 2: 20% off this visit</li>
		         <li>Visit 3: 10% off this visit</li></ul>";
		         break;        
		}
	}
	
	
}