<?php

/**
 * This is the model class for table "flow_schedule".
 *
 * The followings are the available columns in table 'flow_schedule':
 * @property integer $fs_id
 * @property string $fs_name
 * @property string $fs_type
 * @property integer $fs_reload
 * @property integer $fs_delta
 */
class FlowSchedule extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FlowSchedule the static model class
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
		return 'flow_schedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fs_id, fs_reload, fs_delta', 'numerical', 'integerOnly'=>true),
			array('fs_name, fs_type', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fs_id, fs_name, fs_type, fs_reload, fs_delta', 'safe', 'on'=>'search'),
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
			'fs_id' => 'Fs Id',
			'fs_name' => '流程名称',
			'fs_type' => '流程类型',
			'fs_reload' => '是否重载',
			'fs_delta' => '间隔时间',
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

		$criteria->compare('fs_id',$this->fs_id);
		$criteria->compare('fs_name',$this->fs_name,true);
		$criteria->compare('fs_type',$this->fs_type,true);
		$criteria->compare('fs_reload',$this->fs_reload);
		$criteria->compare('fs_delta',$this->fs_delta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
