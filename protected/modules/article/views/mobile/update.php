<?php
    /* @var $this Travel_around_thailandController */
    /* @var $model Article */

    $this->breadcrumbs = array(
            'Phone & Mobile' => array('index'),
            $model->name => array('update', 'id' => $model->id),
            'Update',
    );

    $this->menu = array(
            array('label' => 'Show All', 'icon' => 'list-alt ', 'url' => array('index'), 'active' => Yii::app()->controller->action->id == 'index'),
            array('label' => 'Create', 'icon' => 'edit ', 'url' => array('create'), 'active' => Yii::app()->controller->action->id == 'create'),
    );
?>

<div class="page-header position-relative">
    <h1>
       Phone & Mobile
        <small>
            <i class="icon-double-angle-right"></i>
            Edit
        </small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>