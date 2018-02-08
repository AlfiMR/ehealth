<?php

/**
 * This is the model class for table "pendaftaran_rumkit".
 *
 * The followings are the available columns in table 'pendaftaran_rumkit':
 * @property integer $id
 * @property integer $id_rumah_sakit
 * @property integer $id_poli_klinik
 * @property integer $id_pasien
 * @property string $tgl_pendaftaran
 */
class PendaftaranRumkit extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pendaftaran_rumkit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rumah_sakit, id_poli_klinik, id_pasien, tgl_pendaftaran', 'required'),
			array('id_rumah_sakit, id_poli_klinik, id_pasien', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_rumah_sakit, id_poli_klinik, id_pasien, tgl_pendaftaran, no_antrian', 'safe', 'on'=>'search'),
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
			'id_rumah_sakit' => 'Id Rumah Sakit',
			'id_poli_klinik' => 'Id Poli Klinik',
			'id_pasien' => 'Id Pasien',
			'tgl_pendaftaran' => 'Tgl Pendaftaran',
			'no_antrian' => 'No Antrian',
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
		$criteria->compare('id_rumah_sakit',$this->id_rumah_sakit);
		$criteria->compare('id_poli_klinik',$this->id_poli_klinik);
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('tgl_pendaftaran',$this->tgl_pendaftaran,true);
		$criteria->compare('no_antrian',$this->no_antrian,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PendaftaranRumkit the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
