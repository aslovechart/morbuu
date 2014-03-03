<?php

/**
 * This is the model class for table "control".
 *
 * The followings are the available columns in table 'control':
 * @property integer $id
 * @property string $name
 * @property string $control_name
 *
 * The followings are the available model relations:
 * @property Permission[] $permissions
 */
class Control extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Control the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'control';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, control_name', 'required'),
            array('name, control_name', 'length', 'max' => 255),
            array('control_name', 'ext.alpha', 'allowNumbers' => true, 'allAccentedLetters' => true, 'extra' => array('_'),'message'=>'Control Name contains not allowed characters'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, control_name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'permissions' => array(self::HAS_MANY, 'Permission', 'controller_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'control_name' => 'Control Name',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('control_name', $this->control_name, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}