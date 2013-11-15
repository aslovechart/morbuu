<?php
/* @var $this Travel_around_thailandController */
/* @var $model Article */

$this->breadcrumbs=array(
	'กิจกรรมดีๆ'=>array('index'),
	'Create',
);

$this->menu = array(
    array('label' => 'Show All', 'icon' => 'list-alt', 'url' => array('index'),'active'=>Yii::app()->controller->action->id=='index'),
    array('label' => 'Create', 'icon' => 'edit white', 'url' => array('create'),'active'=>Yii::app()->controller->action->id=='create'),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>