<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ShowArticleMulti extends CInputWidget {

    public $category_id;

    public function init() {
        parent::init();
    }

    public function run() {
        $category = Category::model()->findAll(array('condition' => 'category_id = ' . $this->category_id, 'order' => 'name asc'));
        $categoryArr = CHtml::listData($category, 'id', 'id');

        $criteria = new CDbCriteria();
        $criteria->condition = "active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
        $criteria->addInCondition('category_id', $categoryArr);
        $criteria->order = 'set_time_show desc';
        $criteria->limit = 1;
        $once = Article::model()->findAll($criteria);
        $criteria->offset = 3;
        $model_orther = Article::model()->findAll($criteria);
        $this->render("index", array(
            'once' => $once,
            'model' => $model_orther
        ));
    }

}

?>