<?php
/* @var $this ControlController */
/* @var $model Control */

$this->breadcrumbs=array(
	'Controls'=>array('index'),
	$model->name=>array('update','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Control', 'url'=>array('create'), 'icon' => 'icon-plus-sign'),
	array('label'=>'Manage Control', 'url'=>array('index'), 'icon' => 'icon-th-list'),
);
?>

<h1>Update Control <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>