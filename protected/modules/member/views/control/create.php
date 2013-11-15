<?php
/* @var $this ControlController */
/* @var $model Control */

$this->breadcrumbs=array(
	'Controls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Control', 'url'=>array('index'), 'icon' => 'icon-th-list'),
);
?>

<h1>Create Control</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>