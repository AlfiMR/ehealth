<?php

/**
 * This is the model class for table "rumah_sakit".
 *
 * The followings are the available columns in table 'rumah_sakit':
 * @property integer $id
 * @property string $nama_rumah_sakit
 * @property string $alamat
 * @property string $no_tlp
 * @property string $image
 */
class RumahSakit extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rumah_sakit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_rumah_sakit, alamat, no_tlp, image', 'required'),
			array('nama_rumah_sakit', 'length', 'max'=>255),
			array('no_tlp', 'length', 'max'=>15),
			array('image', 'length', 'max'=>50),
			array('image','file','types'=>'jpg, png, bmp, gif'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama_rumah_sakit, alamat, no_tlp, image, id_user', 'safe', 'on'=>'search'),
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
			'nama_rumah_sakit' => 'Nama Rumah Sakit',
			'alamat' => 'Alamat',
			'no_tlp' => 'No Tlp',
			'image' => 'Image',
			'id_user' => 'Id User',
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
		$criteria->compare('nama_rumah_sakit',$this->nama_rumah_sakit,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_tlp',$this->no_tlp,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('id_user',$this->id_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RumahSakit the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
