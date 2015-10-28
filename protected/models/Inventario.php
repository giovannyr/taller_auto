<?php

/**
 * This is the model class for table "inventario".
 *
 * The followings are the available columns in table 'inventario':
 * @property integer $id
 * @property string $producto
 * @property integer $existencias
 * @property string $precio
 * @property string $unidad_venta
 *
 * The followings are the available model relations:
 * @property Servicio[] $servicios
 */
class Inventario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inventario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('existencias', 'numerical', 'integerOnly'=>true),
			array('producto', 'length', 'max'=>250),
			array('precio', 'length', 'max'=>50),
			array('unidad_venta', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, producto, existencias, precio, unidad_venta', 'safe', 'on'=>'search'),
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
			'servicios' => array(self::MANY_MANY, 'Servicio', 'inventario_servicio(inventario_id, servicio_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'producto' => 'Producto',
			'existencias' => 'Existencias',
			'precio' => 'Precio',
			'unidad_venta' => 'Unidad Venta',
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
		$criteria->compare('producto',$this->producto,true);
		$criteria->compare('existencias',$this->existencias);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('unidad_venta',$this->unidad_venta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inventario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
