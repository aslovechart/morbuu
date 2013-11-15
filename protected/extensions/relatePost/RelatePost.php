<?php

 
class RelatePost extends CInputWidget {
    var $category_id;
    public function init() {
        parent::init();
    }

    public function run() {
        $criteria = new CDbCriteria();
        $criteria->condition = "category_id =".$this->category_id." and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
        $criteria->order = 'set_time_show desc';
        $criteria->limit = 5;
        $model = Article::model()->findAll($criteria);
        $this->render("index", array(
            'model' => $model,
        ));
    }

}

?>
