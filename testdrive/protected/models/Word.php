<?php

/**
 * This is the model class for table "tbl_word".
 *
 * The followings are the available columns in table 'tbl_word':
 * @property integer $id
 * @property string $new_word
 * @property string $ipa
 * @property string $from_lgt
 * @property string $to_lgt
 * @property string $trans
 * @property string $memo
 * @property string $remember
 */
class Word extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_word';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('new_word, ipa, from_lgt, to_lgt, trans, memo, remember', 'required'),
			array('new_word, trans, memo', 'length', 'max'=>255),
			array('ipa', 'length', 'max'=>256),
			array('from_lgt, to_lgt, remember', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, new_word, ipa, from_lgt, to_lgt, trans, memo, remember', 'safe', 'on'=>'search'),
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
			'new_word' => 'New Word',
			'ipa' => 'Ipa',
			'from_lgt' => 'From Lgt',
			'to_lgt' => 'To Lgt',
			'trans' => 'Trans',
			'memo' => 'Memo',
			'remember' => 'Remember',
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
		$criteria->compare('new_word',$this->new_word,true);
		$criteria->compare('ipa',$this->ipa,true);
		$criteria->compare('from_lgt',$this->from_lgt,true);
		$criteria->compare('to_lgt',$this->to_lgt,true);
		$criteria->compare('trans',$this->trans,true);
		$criteria->compare('memo',$this->memo,true);
		$criteria->compare('remember',$this->remember,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Word the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
