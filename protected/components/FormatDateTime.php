<?php

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of FormatDateTime
     *
     * @author apichart
     */
    class FormatDateTime  extends CComponent{

        public function init() {
          //  parent::init();
        }

        public function getDatetime($datetime) {
            $month = Yii::app()->params['month'];
            echo date('d', strtotime($datetime)) . ' ' . $month[date('m', strtotime($datetime)) - 1] . ' ' . (date('Y', strtotime($datetime)) + 543);
        }

        //put your code here
    }

?>
