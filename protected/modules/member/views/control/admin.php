<?php
/* @var $this ControlController */
/* @var $model Control */

$this->breadcrumbs = array(
    'Controls' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Create Control', 'url' => array('create'), 'icon' => 'icon-plus-sign'),
);
?>

<h1>Manage Controls</h1>
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
        'control_name',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => 'width: 50px'),
            'template' => '<center>{update} {delete}</center>',
        ),
    ),
));
?>
