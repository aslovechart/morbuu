<?php
    /* @var $this CategoryController */
    /* @var $model Category */




//    $this->menu = array(
//            array('label' => 'Show Sub All', 'icon' => 'list-alt white', 'url' => $this->createUrl('category/sub/', array('id' => $id)), 'active' => Yii::app()->controller->action->id == 'sub'),
//            array('label' => 'Create Sub', 'icon' => 'edit', 'url' => $this->createUrl('category/create_sub/', array('id' => $id)), 'active' => Yii::app()->controller->action->id == 'create_sub'),
//    );
    
    $this->menu = array(
            array('label' => 'Add New', 'icon' => 'edit', 'url' => $this->createUrl('category/create_sub/', array('id' => $id)), 'linkOptions' => array(
                            'class' => 'btn btn-small btn-danger',
                    ),),
    );
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
<div class="page-header position-relative">
    <h1>
        Categories 
        <small>
            <i class="icon-double-angle-right"></i>
            Sub category
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
            'id' => 'category-grid',
            'type' => 'striped bordered condensed',
            'dataProvider' => $model->search(),
            'template' => "{items}\n{pager}",
            'filter' => $model,
            'columns' => array(
                    'id',
                    'name' => 'name',
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
                            'buttons' => array
                                    (
                                    'update' => array
                                            (
                                            'url' => 'Yii::app()->createUrl("setting/category/update_sub/", array("id"=>$data->id))',
                                    ),
                                    'delete' => array
                                            (
                                            'url' => 'Yii::app()->createUrl("setting/category/delete_sub/", array("id"=>$data->id))',
                                    ),
                            ),
                    ),
            ),
    ));
?>
