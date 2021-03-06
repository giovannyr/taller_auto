<?php

/**
 * This is the model class for table "servicio".
 *
 * The followings are the available columns in table 'servicio':
 * @property integer $id
 * @property string $precio
 * @property string $fecha
 * @property string $placa_vehiculo
 * @property string $cc_mecanico
 * @property integer $lista_servicios_id
 *
 * The followings are the available model relations:
 * @property Inventario[] $inventarios
 * @property ListaServicios $listaServicios
 * @property Mecanico $ccMecanico
 * @property Vehiculo $placaVehiculo
 */
class Servicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lista_servicios_id', 'required'),
			array('lista_servicios_id', 'numerical', 'integerOnly'=>true),
			array('precio', 'length', 'max'=>100),
			array('placa_vehiculo, cc_mecanico', 'length', 'max'=>45),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, precio, fecha, placa_vehiculo, cc_mecanico, lista_servicios_id', 'safe', 'on'=>'search'),
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
			'inventarios' => array(self::MANY_MANY, 'Inventario', 'inventario_servicio(servicio_id, inventario_id)'),
			'listaServicios' => array(self::BELONGS_TO, 'ListaServicios', 'lista_servicios_id'),
			'ccMecanico' => array(self::BELONGS_TO, 'Mecanico', 'cc_mecanico'),
			'placaVehiculo' => array(self::BELONGS_TO, 'Vehiculo', 'placa_vehiculo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'precio' => 'Precio',
			'fecha' => 'Fecha',
			'placa_vehiculo' => 'Placa Vehiculo',
			'cc_mecanico' => 'Cc Mecanico',
			'lista_servicios_id' => 'Lista Servicios',
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
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('placa_vehiculo',$this->placa_vehiculo,true);
		$criteria->compare('cc_mecanico',$this->cc_mecanico,true);
		$criteria->compare('lista_servicios_id',$this->lista_servicios_id);
		$criteria->compare('lista_servicios_id',$this->lista_servicios_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
