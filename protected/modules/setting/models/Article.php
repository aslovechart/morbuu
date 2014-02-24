<?php

/**
 * This is the model class for table "article".
 *
 * The followings are the available columns in table 'article':
 * @property integer $id
 * @property string $name
 * @property string $url_rewrite
 * @property string $content
 * @property string $created
 * @property string $set_time_show
 * @property integer $active
 * @property string $image_over
 * @property integer $count_view
 * @property integer $category_id
 * @property integer $user_id
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property User $user
 * @property Tag[] $tags
 */
class Article extends CActiveRecord {

    var $tag;
    var $category_name;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Article the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'article';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, url_rewrite, content, category_id, user_id', 'required'),
            array('active, count_view, category_id, user_id, status', 'numerical', 'integerOnly' => true),
            array('name, url_rewrite, image_over', 'length', 'max' => 255),
            array('set_time_show,tag', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id,category_name, name, url_rewrite, content, created, set_time_show, active, image_over, count_view, category_id, user_id, status', 'safe', 'on' => 'search'),
            array('created', 'default',
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
            'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'tags' => array(self::HAS_MANY, 'Tag', 'article_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'url_rewrite' => 'Url Rewrite',
            'content' => 'Content',
            'created' => 'Created',
            'set_time_show' => 'Set Time Show',
            'active' => 'Active',
            'image_over' => 'Image Over',
            'count_view' => 'Count View',
            'category_id' => 'Category',
            'user_id' => 'User',
            'status' => 'Status',
            'tag' => 'Tags'
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

        $criteria->compare('t.id', $this->id);
        $criteria->compare('t.name', $this->name, true);
        $criteria->compare('t.url_rewrite', $this->url_rewrite, true);
        $criteria->compare('t.content', $this->content, true);
        $criteria->compare('t.created', $this->created, true);
        $criteria->compare('t.set_time_show', $this->set_time_show, true);
        $criteria->compare('t.active', $this->active);
        $criteria->compare('t.image_over', $this->image_over, true);
        $criteria->compare('t.count_view', $this->count_view);
        $criteria->with = array('category');
        $criteria->compare('category.name',$this->category_name, true );
        $criteria->addInCondition('t.category_id', $this->category_id);
        $criteria->compare('t.user_id', $this->user_id);

        $criteria->addCondition('t.status = 1');
        $criteria->order = 't.created desc';
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function behaviors() {
        return array('ESaveRelatedBehavior' => array(
                'class' => 'application.components.ESaveRelatedBehavior')
        );
    }

}