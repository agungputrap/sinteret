<?php

/**
 * This is the model class for table "jadwal_ibadah".
 *
 * The followings are the available columns in table 'jadwal_ibadah':
 * @property integer $id
 * @property integer $gereja_id
 * @property string $jam_ibadah
 *
 * The followings are the available model relations:
 * @property Gereja $gereja
 */
class JadwalIbadah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jadwal_ibadah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gereja_id', 'numerical', 'integerOnly'=>true),
			array('jam_ibadah', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, gereja_id, jam_ibadah', 'safe', 'on'=>'search'),
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
			'gereja' => array(self::BELONGS_TO, 'Gereja', 'gereja_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'gereja_id' => 'Gereja',
			'jam_ibadah' => 'Jam Ibadah',
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
		$criteria->compare('gereja_id',$this->gereja_id);
		$criteria->compare('jam_ibadah',$this->jam_ibadah,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JadwalIbadah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
