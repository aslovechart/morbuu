<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Update',
);

$this->menu = array(
    array('label' => 'Show All', 'icon' => 'list-alt ', 'url' => array('index'), 'active' => Yii::app()->controller->action->id == 'index'),
    array('label' => 'Create', 'icon' => 'edit ', 'url' => array('create'), 'active' => Yii::app()->controller->action->id == 'create'),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>