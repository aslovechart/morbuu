<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ShowArticle extends CInputWidget {

    public $row;
    public $type;

    public function init() {
        parent::init();
    }

    public function run() {
        $this->render("type_" . $this->type, array(
            'row' => $this->row,
        ));
    }

}

?>
