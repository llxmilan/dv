<?php

/**
 * This is the model class for table "flow_info".
 *
 * The followings are the available columns in table 'flow_info':
 * @property integer $flow_id
 * @property string $flow_name
 * @property string $flow_creator
 * @property string $flow_position
 * @property string $flow_content
 */
class FlowInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FlowInfo the static model class
	 */
	public $parameter;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'flow_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('flow_name,flow_content','required'),
			array('flow_name, flow_creator, flow_position', 'length', 'max'=>20),
			array('flow_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('flow_id, flow_name, flow_creator, flow_position, flow_content', 'safe', 'on'=>'search'),
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
			'flow_id' => 'Flow',
			'flow_name' => '流程名称',
			'flow_creator' => '流程作者',
			'flow_position' => 'Flow Position',
			'flow_content' => '流程内容',
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

		$criteria->compare('flow_id',$this->flow_id);
		$criteria->compare('flow_name',$this->flow_name,true);
		$criteria->compare('flow_creator',$this->flow_creator,true);
		$criteria->compare('flow_position',$this->flow_position,true);
		$criteria->compare('flow_content',$this->flow_content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array('pageSize'=>20),
		));
	}
	 public function getByCreator($creator)
        {
                // Warning: Please modify the following code to remove attributes that
                // should not be searched.

                $criteria=new CDbCriteria;

                $criteria->compare('flow_creator',$creator,true);

                return new CActiveDataProvider($this, array(
                        'criteria'=>$criteria,
                        'pagination'=>array('pageSize'=>20),
                ));
	}
}
