<?php
    /* @var $this UserGroupController */
    /* @var $model UserGroup */

    $this->breadcrumbs = array(
            'User Groups' => array('index'),
            $model->name => array('update', 'id' => $model->id),
            'Update',
    );

    $this->menu = array(
            array('label' => 'Add New', 'url' => array('create'), 'icon' => 'icon-plus-sign', 'linkOptions' => array(
                            'class' => 'btn btn-small btn-danger',
                    ),),
    );
?>
<div class="page-header position-relative">
    <h1>
        Update User Group
        <small>
            <i class="icon-double-angle-right"></i>
            Manage
        </small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>