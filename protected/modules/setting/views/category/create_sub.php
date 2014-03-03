<?php
/* @var $this CategoryController */
/* @var $model Category */




$this->menu = array(
    array('label' => 'Show Sub All', 'icon' => 'list-alt ', 'url' => $this->createUrl('category/sub/', array('id' => $id)), 'active' => Yii::app()->controller->action->id == 'sub'),
    array('label' => 'Create Sub', 'icon' => 'edit white', 'url' => $this->createUrl('category/create_sub/', array('id' => $id)), 'active' => Yii::app()->controller->action->id == 'create_sub'),
);
$sub = Category::model()->findByPk($id);
$breadcrumbs = array();
do {
    $model_cate = Category::model()->findByPk($id);
    $id = $model_cate->category_id;
    $breadcrumbs[$model_cate->name] = $this->createUrl('category/sub/', array('id' => $model_cate->id));
} while ($model_cate->category_id);
asort($breadcrumbs);

$this->breadcrumbs = array(
    'Categories' => array('index'),
        ) + $breadcrumbs + array('Manage');
?>



<?php echo $this->renderPartial('_form', array('model' => $model)); ?>