<?php
/* @var $this UserGroupController */
/* @var $model UserGroup */

$this->breadcrumbs = array(
    'User Groups' => array('index'),
    $model->name => array('update', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'Create UserGroup', 'url' => array('create'), 'icon' => 'icon-plus-sign'),
    array('label' => 'Manage UserGroup', 'url' => array('index'), 'icon' => 'icon-th-list'),
    array('label' => 'Manage Permission', 'url' => array('index'), 'icon' => 'icon-tasks'),
);
?>

<h1>Update UserGroup </h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>