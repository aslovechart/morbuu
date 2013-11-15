<?php
/* @var $this UserGroupController */
/* @var $model UserGroup */

$this->breadcrumbs = array(
    'User Groups' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Create UserGroup', 'url' => array('create'), 'icon' => 'icon-plus-sign'),
);
?>

<h1>Manage User Groups</h1>
<?php
$this->widget('bootstrap.widgets.TbAlert', array(
    'block' => true, // display a larger alert block?
    'fade' => true, // use transitions?
    'closeText' => '&times;', // close link text - if set to false, no close link is displayed
    'alerts' => array(// configurations per alert type
        'success' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
    )
        )
);
?>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'user-group-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'template' => "{items}\n{pager}",
    'columns' => array(
        'name',
        array(
            'name' => 'active',
            'filter' => array(1 => 'Open', 0 => 'Close'),
            'type' => 'raw',
            'value' => '$data->active? \'<center><span class="label label-success">Open</span></center>\':\'<center><span class="label label-important">Close</span></center>\'',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => 'width: 50px'),
            'template' => '<center>{permission} {update} {delete}</center>',
            'buttons' => array
                (
                'permission' => array
                    (
                    'options' => array('title' => 'Permission'),
                    'label' => '<i class="icon-tasks"></i>',
                    'url' => 'Yii::app()->createUrl("member/userGroup/permission/", array("id"=>$data->id))',
                )
            ),
        ),
    ),
));
?>
