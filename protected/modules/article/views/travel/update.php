<?php

    /* @var $this Travel_around_thailandController */
    /* @var $model Article */

    $this->breadcrumbs = array(
            'เที่ยวทั่วไทย' => array('index'),
            $model->name => array('update', 'id' => $model->id),
            'Update',
    );

    $this->menu = array(
            array('label' => 'Add New', 'icon' => 'edit', 'url' => array('create'), 'linkOptions' => array(
                            'class' => 'btn btn-small btn-danger',
                    ),),
    );
?>


<?php echo $this->renderPartial('_form', array('model' => $model)); ?>