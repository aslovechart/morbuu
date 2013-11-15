<?php

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of Tabsection
     *
     * @author apichart
     */
    class Tabsection extends CInputWidget {

        public $category_id;
        public $file_name;

        public function init() {
            parent::init();
        }

        public function run() {
            $this->render($this->file_name, array(
                    'category_id' => $this->category_id,
            ));
        }

    }

?>
