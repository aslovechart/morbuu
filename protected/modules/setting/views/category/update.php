<?php
    /* @var $this CategoryController */
    /* @var $model Category */

    $this->breadcrumbs = array(
            'Categories' => array('index'),
            'Update',
    );

    $this->menu = array(
            array('label' => 'Add New', 'icon' => 'edit', 'url' => array('create'), 'linkOptions' => array(
                            'class' => 'btn btn-small btn-danger',
                    ),),
    );
?>

<div class="page-header position-relative">
    <h1>
        Categories
        <small>
            <i class="icon-double-angle-right"></i>
            Edit
        </small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>