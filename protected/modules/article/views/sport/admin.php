<?php

    /* @var $this NewsController */
    /* @var $model Article */

    $this->breadcrumbs = array(
            'Sport' => array('index'),
            'Manage',
    );

    $this->menu = array(
            array('label' => 'Add New', 'icon' => 'edit', 'url' => array('create'), 'linkOptions' => array(
                            'class' => 'btn btn-small btn-danger',
                    ),),
    );
?>
<div class="page-header position-relative">
    <h1>
        Sport
        <small>
            <i class="icon-double-angle-right"></i>
            Manage
        </small>
    </h1>
</div>
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
            'id' => 'article-grid',
            'type' => 'striped bordered condensed',
            'dataProvider' => $model->search(),
            'template' => "{items}\n{pager}",
            'filter' => $model,
            'enableSorting' => false,
            'columns' => array(
                    'name',
                    array(
                            'name' => 'category_name',
                            'filter' => $option_category,
                            'type' => 'raw',
                            'value' => '$data->category->name'
                    ),
                    'set_time_show',
                    array(
                            'name' => 'active',
                            'filter' => array(1 => 'Open', 0 => 'Close'),
                            'type' => 'raw',
                            'value' => '$data->active? \'<center><span class="label label-success">Open</span></center>\':\'<center><span class="label label-important">Close</span></center>\'',
                    ),
                    array(
                            'class' => 'bootstrap.widgets.TbButtonColumn',
                            'htmlOptions' => array('style' => 'width: 50px'),
                            'template' => '<center>{update} {delete}</center>',
                    ),
            ),
    ));
?>
