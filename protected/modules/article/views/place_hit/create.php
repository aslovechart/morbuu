<?php
/* @var $this Travel_around_thailandController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Travel Around Thailand'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Article', 'url'=>array('index')),
);
?>

<h1>Create Travel Around Thailand</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>