<?php
    /* @var $this NewsController */
    /* @var $model Article */

    $this->breadcrumbs = array(
            'News' => array('index'),
            $model->name,
    );

    $this->menu = array(
            array('label' => 'Add News', 'icon' => 'edit', 'url' => array('create'), 'linkOptions' => array(
                            'class' => 'btn btn-small btn-danger',
                    ),),
    );
?>
<div class="page-header position-relative">
    <h1>
        News
        <small>
            <i class="icon-double-angle-right"></i>
            Edit
        </small>
    </h1>
</div>


<?php echo $this->renderPartial('_form', array('model' => $model)); ?>