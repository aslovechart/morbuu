<?php

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of Horoscope
     *
     * @author apichart
     */
    class Horoscope extends CInputWidget {

        public $category_id;
        public $limit;
        public $file_name;
        public $offset = 0;

        public function init() {
            parent::init();
        }

        public function run() {
            $this->render("horoscope", array(
                    'category_id' => $this->category_id,
                    'file_name' => $this->file_name,
                    'limit' => $this->limit,
                    'offset' => $this->offset,
                
            ));
        }

    }

?>
