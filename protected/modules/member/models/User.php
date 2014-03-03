<?php

    /**
     * This is the model class for table "user".
     *
     * The followings are the available columns in table 'user':
     * @property integer $id
     * @property string $email
     * @property string $password
     * @property string $fname
     * @property string $lname
     * @property string $gender
     * @property string $birthday
     * @property string $created
     * @property string $updated
     * @property integer $active
     * @property integer $activate_mail
     * @property integer $acc_status
     * @property integer $user_group_id
     *
     * The followings are the available model relations:
     * @property Article[] $articles
     * @property UserGroup $userGroup
     */
    class User extends CActiveRecord {

        /**
         * Returns the static model of the specified AR class.
         * @param string $className active record class name.
         * @return User the static model class
         */
        public static function model($className = __CLASS__) {
            return parent::model($className);
        }

        /**
         * @return string the associated database table name
         */
        public function tableName() {
            return 'user';
        }

        /**
         * @return array validation rules for model attributes.
         */
        public function rules() {
            // NOTE: you should only define rules for those attributes that
            // will receive user inputs.
            return array(
                    array('email, password', 'required'),
                    array('active, acc_status, user_group_id', 'numerical', 'integerOnly' => true),
                    array('email, fname, lname', 'length', 'max' => 255),
                    array('gender, birthday', 'length', 'max' => 45),
                    array('created, updated', 'safe'),
                    // The following rule is used by search().
                    // Please remove those attributes that should not be searched.
                    array('id, email, fname, lname, gender, birthday, created, updated, active, acc_status, user_group_id,activate_mail', 'safe', 'on' => 'search'),
                    array('updated', 'default',
                            'value' => new CDbExpression('NOW()'),
                            'setOnEmpty' => false, 'on' => 'update'),
                    array('created,updated', 'default',
                            'value' => new CDbExpression('NOW()'),
                            'setOnEmpty' => false, 'on' => 'insert')
            );
        }

        /**
         * @return array relational rules.
         */
        public function relations() {
            // NOTE: you may need to adjust the relation name and the related
            // class name for the relations automatically generated below.
            return array(
                    'articles' => array(self::HAS_MANY, 'Article', 'user_id'),
                    'userGroup' => array(self::BELONGS_TO, 'UserGroup', 'user_group_id'),
            );
        }

        /**
         * @return array customized attribute labels (name=>label)
         */
        public function attributeLabels() {
            return array(
                    'id' => 'ID',
                    'email' => 'Email',
                    'fname' => 'Fname',
                    'lname' => 'Lname',
                    'gender' => 'Gender',
                    'birthday' => 'Birthday',
                    'created' => 'Created',
                    'updated' => 'Updated',
                    'active' => 'Active',
                    'acc_status' => 'Acc Status',
                    'user_group_id' => 'User Group',
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
            $criteria->compare('email', $this->email, true);
            $criteria->compare('fname', $this->fname, true);
            $criteria->compare('lname', $this->lname, true);
            $criteria->compare('gender', $this->gender, true);
            $criteria->compare('birthday', $this->birthday, true);
            $criteria->compare('created', $this->created, true);
            $criteria->compare('updated', $this->updated, true);
            $criteria->compare('active', $this->active);
            $criteria->compare('acc_status', $this->acc_status);
            $criteria->compare('user_group_id', $this->user_group_id);

            return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
            ));
        }

        /**
         * Returns User model by its email
         * 
         * @param string $email 
         * @access public
         * @return User
         */
        public function findByEmail($email) {
            return self::model()->findByAttributes(array('email' => $email));
        }

    }