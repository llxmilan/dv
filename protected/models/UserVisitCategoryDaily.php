<?php

/**
 * This is the model class for table "user_visit_category_daily".
 *
 * The followings are the available columns in table 'user_visit_category_daily':
 * @property integer $category_id
 * @property string $category_name
 * @property integer $category_video_num
 * @property integer $category_views_num
 * @property double $category_rate_avg
 * @property integer $category_comments_num
 */
class UserVisitCategoryDaily extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserVisitCategoryDaily the static model class
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
		return 'user_visit_category_daily';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_video_num, category_views_num, category_comments_num', 'numerical', 'integerOnly'=>true),
			array('category_rate_avg', 'numerical'),
			array('category_name', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('category_id, category_name, category_video_num, category_views_num, category_rate_avg, category_comments_num', 'safe', 'on'=>'search'),
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
			'category_id' => 'Category',
			'category_name' => 'Category Name',
			'category_video_num' => 'Category Video Num',
			'category_views_num' => 'Category Views Num',
			'category_rate_avg' => 'Category Rate Avg',
			'category_comments_num' => 'Category Comments Num',
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

		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('category_name',$this->category_name,true);
		$criteria->compare('category_video_num',$this->category_video_num);
		$criteria->compare('category_views_num',$this->category_views_num);
		$criteria->compare('category_rate_avg',$this->category_rate_avg);
		$criteria->compare('category_comments_num',$this->category_comments_num);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
