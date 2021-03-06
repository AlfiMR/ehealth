<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property integer $id
 * @property integer $nik
 * @property string $type_pasien
 * @property string $nama_pasien
 * @property string $alamat
 * @property string $email
 * @property string $no_hp
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nik, type_pasien, nama_pasien, alamat, email, no_hp, image', 'required'),
			array('nik', 'numerical', 'integerOnly'=>true),
			array('type_pasien', 'length', 'max'=>20),
			array('nama_pasien, email', 'length', 'max'=>50),
			array('no_hp', 'length', 'max'=>15),
			array('image','file','types'=>'jpg, png, bmp, gif'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nik, type_pasien, nama_pasien, alamat, email, no_hp, image', 'safe', 'on'=>'search'),
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
			'nik' => 'Nik',
			'type_pasien' => 'Type Pasien',
			'nama_pasien' => 'Nama Pasien',
			'alamat' => 'Alamat',
			'email' => 'Email',
			'no_hp' => 'No Hp',
			'image' => 'Image',
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
		$criteria->compare('nik',$this->nik);
		$criteria->compare('type_pasien',$this->type_pasien,true);
		$criteria->compare('nama_pasien',$this->nama_pasien,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('no_hp',$this->no_hp,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
