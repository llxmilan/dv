<?php

/**
 * This is the model class for table "table_info".
 *
 * The followings are the available columns in table 'table_info':
 * @property integer $tb_id
 * @property string $tb_name
 * @property string $tb_comment
 * @property integer $tb_graph
 */
class TableInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TableInfo the static model class
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
		return 'table_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tb_id, tb_graph', 'numerical', 'integerOnly'=>true),
			array('tb_name', 'length', 'max'=>10),
			array('tb_comment', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tb_id, tb_name, tb_comment, tb_graph', 'safe', 'on'=>'search'),
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
			'tb_id' => 'Tb',
			'tb_name' => 'Tb Name',
			'tb_comment' => 'Tb Comment',
			'tb_graph' => 'Tb Graph',
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

		$criteria->compare('tb_id',$this->tb_id);
		$criteria->compare('tb_name',$this->tb_name,true);
		$criteria->compare('tb_comment',$this->tb_comment,true);
		$criteria->compare('tb_graph',$this->tb_graph);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
