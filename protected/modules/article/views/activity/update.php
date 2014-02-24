<?php
    /* @var $this Travel_around_thailandController */
    /* @var $model Article */

    $this->breadcrumbs = array(
            'Activity' => array('index'),
            $model->name => array('update', 'id' => $model->id),
            'Update',
    );

    $this->menu = array(
            array('label' => 'Add News', 'icon' => 'edit', 'url' => array('create'), 'linkOptions' => array(
                            'class' => 'btn btn-small btn-danger',
                    ),),
    );
?>

<div class="page-header position-relative">
    <h1>
        Activity
        <small>
            <i class="icon-double-angle-right"></i>
            Edit
        </small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>