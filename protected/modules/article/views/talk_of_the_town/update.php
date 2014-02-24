<?php
    /* @var $this NewsController */
    /* @var $model Article */

    $this->breadcrumbs = array(
            'Talk of the town' => array('index'),
            $model->name,
    );

    $this->menu = array(
            array('label' => 'Add New', 'icon' => 'edit', 'url' => array('create'), 'linkOptions' => array(
                            'class' => 'btn btn-small btn-danger',
                    ),),
    );
?>
<div class="page-header position-relative">
    <h1>
        Talk of the town
        <small>
            <i class="icon-double-angle-right"></i>
            Edit
        </small>
    </h1>
</div>


<?php echo $this->renderPartial('_form', array('model' => $model)); ?>