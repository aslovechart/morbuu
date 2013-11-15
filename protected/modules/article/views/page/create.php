<?php
/* @var $this NewsController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Create',
);


?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>