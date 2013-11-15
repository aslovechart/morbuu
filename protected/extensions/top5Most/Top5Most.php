<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Top5Most
 *
 * @author e-mard
 */
class Top5Most  extends CInputWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        $criteria = new CDbCriteria();
        $criteria->condition = "active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
        $criteria->order = 'count_view desc';
        $criteria->limit = 5;
        $model = Article::model()->findAll($criteria);
        $this->render("index", array(
            'model' => $model,
        ));
    }

}

?>

