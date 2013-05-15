<?php

/**
 * This is the model class for table "user_visit_daily".
 *
 * The followings are the available columns in table 'user_visit_daily':
 * @property string $video_id
 * @property string $uploader
 * @property integer $age
 * @property string $category
 * @property integer $length
 * @property integer $views
 * @property double $rate
 * @property integer $ratings
 * @property integer $comments
 * @property string $related_1
 * @property string $related_2
 * @property string $related_3
 * @property string $related_4
 * @property string $related_5
 * @property string $related_6
 * @property string $related_7
 * @property string $related_8
 * @property string $related_9
 * @property string $related_10
 * @property string $related_11
 * @property string $related_12
 * @property string $related_13
 * @property string $related_14
 * @property string $related_15
 * @property string $related_16
 * @property string $related_17
 * @property string $related_18
 * @property string $related_19
 * @property string $related_20
 */
class videoinfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return videoinfo the static model class
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
		return 'user_visit_daily';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('age, length, views, ratings, comments', 'numerical', 'integerOnly'=>true),
			array('rate', 'numerical'),
			array('video_id, uploader, category, related_1, related_2, related_3, related_4, related_5, related_6, related_7, related_8, related_9, related_10, related_11, related_12, related_13, related_14, related_15, related_16, related_17, related_18, related_19, related_20', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('video_id, uploader, age, category, length, views, rate, ratings, comments, related_1, related_2, related_3, related_4, related_5, related_6, related_7, related_8, related_9, related_10, related_11, related_12, related_13, related_14, related_15, related_16, related_17, related_18, related_19, related_20', 'safe', 'on'=>'search'),
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
			'video_id' => 'Video',
			'uploader' => 'Uploader',
			'age' => 'Age',
			'category' => 'Category',
			'length' => 'Length',
			'views' => 'Views',
			'rate' => 'Rate',
			'ratings' => 'Ratings',
			'comments' => 'Comments',
			'related_1' => 'Related 1',
			'related_2' => 'Related 2',
			'related_3' => 'Related 3',
			'related_4' => 'Related 4',
			'related_5' => 'Related 5',
			'related_6' => 'Related 6',
			'related_7' => 'Related 7',
			'related_8' => 'Related 8',
			'related_9' => 'Related 9',
			'related_10' => 'Related 10',
			'related_11' => 'Related 11',
			'related_12' => 'Related 12',
			'related_13' => 'Related 13',
			'related_14' => 'Related 14',
			'related_15' => 'Related 15',
			'related_16' => 'Related 16',
			'related_17' => 'Related 17',
			'related_18' => 'Related 18',
			'related_19' => 'Related 19',
			'related_20' => 'Related 20',
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

		$criteria->compare('video_id',$this->video_id,true);
		$criteria->compare('uploader',$this->uploader,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('length',$this->length);
		$criteria->compare('views',$this->views);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('ratings',$this->ratings);
		$criteria->compare('comments',$this->comments);
		$criteria->compare('related_1',$this->related_1,true);
		$criteria->compare('related_2',$this->related_2,true);
		$criteria->compare('related_3',$this->related_3,true);
		$criteria->compare('related_4',$this->related_4,true);
		$criteria->compare('related_5',$this->related_5,true);
		$criteria->compare('related_6',$this->related_6,true);
		$criteria->compare('related_7',$this->related_7,true);
		$criteria->compare('related_8',$this->related_8,true);
		$criteria->compare('related_9',$this->related_9,true);
		$criteria->compare('related_10',$this->related_10,true);
		$criteria->compare('related_11',$this->related_11,true);
		$criteria->compare('related_12',$this->related_12,true);
		$criteria->compare('related_13',$this->related_13,true);
		$criteria->compare('related_14',$this->related_14,true);
		$criteria->compare('related_15',$this->related_15,true);
		$criteria->compare('related_16',$this->related_16,true);
		$criteria->compare('related_17',$this->related_17,true);
		$criteria->compare('related_18',$this->related_18,true);
		$criteria->compare('related_19',$this->related_19,true);
		$criteria->compare('related_20',$this->related_20,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
