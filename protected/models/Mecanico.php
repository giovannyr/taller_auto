<?php

/**
 * This is the model class for table "mecanico".
 *
 * The followings are the available columns in table 'mecanico':
 * @property string $cedula
 * @property string $nombre
 * @property string $correo
 * @property string $celular
 * @property string $telefono
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property Servicio[] $servicios
 */
class Mecanico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mecanico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula', 'required'),
			array('cedula, celular, telefono', 'length', 'max'=>45),
			array('nombre', 'length', 'max'=>250),
			array('correo, direccion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula, nombre, correo, celular, telefono, direccion', 'safe', 'on'=>'search'),
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
			'servicios' => array(self::HAS_MANY, 'Servicio', 'cc_mecanico'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula' => 'Cedula',
			'nombre' => 'Nombre',
			'correo' => 'Correo',
			'celular' => 'Celular',
			'telefono' => 'Telefono',
			'direccion' => 'Direccion',
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

		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mecanico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
