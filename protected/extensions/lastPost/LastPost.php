<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LastPost
 *
 * @author e-mard
 */
class LastPost extends CInputWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        $criteria = new CDbCriteria();
        $criteria->condition = "active = 1 and status = 1 and category_id <> 26 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
        $criteria->order = 'set_time_show desc';
        $criteria->limit = 8;
        $model = Article::model()->findAll($criteria);
        $this->render("index", array(
            'model' => $model,
        ));
    }

}

?>
