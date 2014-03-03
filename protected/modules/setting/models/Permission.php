<?php

/**
 * This is the model class for table "permission".
 *
 * The followings are the available columns in table 'permission':
 * @property integer $id
 * @property integer $user_group_id
 * @property integer $action_index
 * @property integer $action_create
 * @property integer $action_update
 * @property integer $action_delete
 * @property integer $controller_id
 *
 * The followings are the available model relations:
 * @property Control $controller
 * @property UserGroup $userGroup
 */
class Permission extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Permission the static model class
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
		return 'permission';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_group_id, controller_id', 'required'),
			array('user_group_id, action_index, action_create, action_update, action_delete, controller_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_group_id, action_index, action_create, action_update, action_delete, controller_id', 'safe', 'on'=>'search'),
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
			'controller' => array(self::BELONGS_TO, 'Control', 'controller_id'),
			'userGroup' => array(self::BELONGS_TO, 'UserGroup', 'user_group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_group_id' => 'User Group',
			'action_index' => 'Action Index',
			'action_create' => 'Action Create',
			'action_update' => 'Action Update',
			'action_delete' => 'Action Delete',
			'controller_id' => 'Controller',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('user_group_id',$this->user_group_id);
		$criteria->compare('action_index',$this->action_index);
		$criteria->compare('action_create',$this->action_create);
		$criteria->compare('action_update',$this->action_update);
		$criteria->compare('action_delete',$this->action_delete);
		$criteria->compare('controller_id',$this->controller_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}