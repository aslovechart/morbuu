<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Users' => array('index'),
    'Manage',
);


?>

<h1>Manage Users</h1>


<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'user-group-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'template' => "{items}\n{pager}",
    'columns' => array(
        'email',
        'fname',
        'lname',
        'user_group_id',

        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => 'width: 50px'),
            'template' => '<center>{update} {delete}</center>',
        ),
    ),
));
?>
