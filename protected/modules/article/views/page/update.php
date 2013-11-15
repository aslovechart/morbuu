<?php
/* @var $this NewsController */
/* @var $model Article */

$this->breadcrumbs = array(
    'Pages' => array('index'),
    $model->name => array('update', 'id' => $model->id),
    'Update',
);

?>


<?php echo $this->renderPartial('_form', array('model' => $model)); ?>