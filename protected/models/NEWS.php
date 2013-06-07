<?php

/**
 * This is the model class for table "NEWS".
 *
 * The followings are the available columns in table 'NEWS':
 * @property string $NEWS_TITLE
 * @property string $NEWS_CONTENT
 * @property string $NEWS_PUbLISHDATE
 * @property string $NEWS_URL
 * @property integer $NEWS_ID
 * @property string $NEWS_IMAGEPATH
 * @property string $NEWS_SOURCE
 */
class NEWS extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NEWS the static model class
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
		return 'NEWS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NEWS_TITLE', 'length', 'max'=>50),
			array('NEWS_PUbLISHDATE, NEWS_SOURCE', 'length', 'max'=>20),
			array('NEWS_URL', 'length', 'max'=>100),
			array('NEWS_IMAGEPATH', 'length', 'max'=>1000),
			array('NEWS_CONTENT', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NEWS_TITLE, NEWS_CONTENT, NEWS_PUbLISHDATE, NEWS_URL, NEWS_ID, NEWS_IMAGEPATH, NEWS_SOURCE', 'safe', 'on'=>'search'),
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
			'NEWS_TITLE' => 'News Title',
			'NEWS_CONTENT' => 'News Content',
			'NEWS_PUbLISHDATE' => 'News Pub Lishdate',
			'NEWS_URL' => 'News Url',
			'NEWS_ID' => 'News',
			'NEWS_IMAGEPATH' => 'News Imagepath',
			'NEWS_SOURCE' => 'News Source',
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

		$criteria->compare('NEWS_TITLE',$this->NEWS_TITLE,true);
		$criteria->compare('NEWS_CONTENT',$this->NEWS_CONTENT,true);
		$criteria->compare('NEWS_PUbLISHDATE',$this->NEWS_PUbLISHDATE,true);
		$criteria->compare('NEWS_URL',$this->NEWS_URL,true);
		$criteria->compare('NEWS_ID',$this->NEWS_ID);
		$criteria->compare('NEWS_IMAGEPATH',$this->NEWS_IMAGEPATH,true);
		$criteria->compare('NEWS_SOURCE',$this->NEWS_SOURCE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}