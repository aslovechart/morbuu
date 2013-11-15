<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ShowGallery extends CInputWidget {

    public $type;
    public $row;

    public function init() {
        parent::init();
    }

    public function run() {
        $this->render($this->type."_image", array(
            'row' => $this->row,
        ));
    }

}

?>