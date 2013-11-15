<?php
/* @var $this Travel_around_thailandController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->name=>array('update','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Article', 'url'=>array('create')),
	array('label'=>'Manage Article', 'url'=>array('index')),
);
?>

<h1>Update Article</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>