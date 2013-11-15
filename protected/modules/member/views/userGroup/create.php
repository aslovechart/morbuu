<?php
/* @var $this UserGroupController */
/* @var $model UserGroup */

$this->breadcrumbs=array(
	'User Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage UserGroup', 'url'=>array('index'), 'icon' => 'icon-th-list'),

);
?>

<h1>Create UserGroup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>