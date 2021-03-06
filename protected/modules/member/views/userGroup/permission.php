<?php
    /* @var $this UserGroupController */
    /* @var $model UserGroup */
    /* @var $control Control */
    $this->breadcrumbs = array(
            'User Groups' => array('index'),
            'Permission',
    );

    $this->menu = array(
            array('label' => 'Add New', 'url' => array('create'), 'icon' => 'icon-plus-sign', 'linkOptions' => array(
                            'class' => 'btn btn-small btn-danger',
                    ),),
    );

    $control = Control::model()->findAll();
?>
<div class="page-header position-relative">
    <h1>
        <?php echo ucfirst($model->name) ?> 
        <small>
            <i class="icon-double-angle-right"></i>
            Manage
        </small>
    </h1>
</div>
<div class="form">
    <?php
        /** @var BootActiveForm $form */
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'horizontalForm',
                'type' => 'horizontal',
                'enableClientValidation' => true,
                'clientOptions' => array(
                        'validateOnSubmit' => true,
                ),
        ));
    ?>
    <fieldset>
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
        <table class="items table table-striped">
            <thead>
                <tr>
                    <th id="yw29_c0">#</th>
                    <th id="yw29_c1">Controller Name</th>
                    <th class="button-column" id="yw29_c4">Index</th>
                    <th class="button-column" id="yw29_c4">Create</th>
                    <th class="button-column" id="yw29_c4">Update</th>
                    <th class="button-column" id="yw29_c4">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($control as $row): ?>
                        <?php
                        $permission = Permission::model()->find('user_group_id=:user_group_id and controller_id = :controller_id', array(':user_group_id' => $model->id, ':controller_id' => $row->id));
                        ?>
                        <tr class="odd">
                            <td style="width: 60px"><?php echo $row->id ?></td>
                            <td><?php echo $row->name ?></td>
                            <td class="button-column">
                                <input type="hidden" name="controller_id[]" value="<?php echo $row->id ?>"/>
                                <input name="index[<?php echo $row->id ?>]" <?php echo @$permission->action_index ? 'checked' : '' ?> value="1" class="ace-switch ace-switch-2" type="checkbox">
                                <span class="lbl"></span>

                            </td>
                            <td class="button-column">

                                <div class="make-switch switch-small">
                                    <input name="create[<?php echo $row->id ?>]" <?php echo @$permission->action_create ? 'checked' : '' ?> value="1" class="ace-switch ace-switch-2" type="checkbox">
                                    <span class="lbl"></span>
                                </div>  
                            </td>
                            <td class="button-column">
                                <div class="make-switch switch-small">
                                    <input name="update[<?php echo $row->id ?>]" <?php echo @$permission->action_update ? 'checked' : '' ?> value="1" class="ace-switch ace-switch-2" type="checkbox">
                                    <span class="lbl"></span>
                                </div>  
                            </td>
                            <td class="button-column">
                                <div class="make-switch switch-small">
                                    <input name="delete[<?php echo $row->id ?>]" <?php echo @$permission->action_delete ? 'checked' : '' ?> value="1" class="ace-switch ace-switch-2" type="checkbox">
                                    <span class="lbl"></span>
                                </div>  
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'label' => 'Submit')); ?>

        </div>
    </fieldset>
    <?php $this->endWidget(); ?>
</div>
