<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ShowIndex extends CInputWidget {

    public $category_id;

    public function init() {
        parent::init();
    }

    public function run() {
        $this->render("index", array(
            'category_id' => $this->category_id,
        ));
    }

}

?>