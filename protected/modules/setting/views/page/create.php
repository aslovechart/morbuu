<?php
/* @var $this NewsController */
/* @var $model Article */

    $this->breadcrumbs = array(
            'Page Default' => array('index'),
           
    );

?>
<div class="page-header position-relative">
    <h1>
        Page Default
        <small>
            <i class="icon-double-angle-right"></i>
            Add
        </small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>