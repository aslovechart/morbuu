<?php

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of MorbuuItem1
     *
     * @author apichart
     */
    class MorbuuItem extends CInputWidget {

        public $file_name;
        public $row;

        public function init() {
            parent::init();
        }

        public function run() {
            $this->render($this->file_name, array(
                    'row' => $this->row,
            ));
        }

    }

?>
