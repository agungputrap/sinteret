<?php

/**
 * This is the model class for table "gereja".
 *
 * The followings are the available columns in table 'gereja':
 * @property integer $id
 * @property string $nama
 * @property integer $tipe_id
 * @property string $latitude
 * @property string $longitude
 * @property string $kota
 * @property string $alamat
 * @property boolean $tampil
 *
 * The followings are the available model relations:
 * @property HistoryGerejaView[] $historyGerejaViews
 * @property FotoGereja[] $fotoGerejas
 * @property JadwalIbadah[] $jadwalIbadahs
 * @property TipeGereja $tipe
 */
class Gereja extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gereja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipe_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>50),
			array('latitude, longitude', 'length', 'max'=>100),
			array('kota, alamat, tampil', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, tipe_id, latitude, longitude, kota, alamat, tampil', 'safe', 'on'=>'search'),
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
			'historyGerejaViews' => array(self::HAS_MANY, 'HistoryGerejaView', 'gereja_id'),
			'fotoGerejas' => array(self::HAS_MANY, 'FotoGereja', 'gereja_id'),
			'jadwalIbadahs' => array(self::HAS_MANY, 'JadwalIbadah', 'gereja_id'),
			'tipe' => array(self::BELONGS_TO, 'TipeGereja', 'tipe_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'tipe_id' => 'Tipe',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'kota' => 'Kota',
			'alamat' => 'Alamat',
			'tampil' => 'Tampil',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tipe_id',$this->tipe_id);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tampil',$this->tampil);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gereja the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
