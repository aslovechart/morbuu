<?php
/* @var $this UserGroupController */
/* @var $model UserGroup */
/* @var $control Control */
$this->breadcrumbs = array(
    'User Groups' => array('index'),
    'Permission',
);

$this->menu = array(
    array('label' => 'Manage UserGroup', 'url' => array('index'), 'icon' => 'icon-th-list'),
    array('label' => 'Create UserGroup', 'url' => array('create'), 'icon' => 'icon-plus-sign'),
);

$control = Control::model()->findAll();
?>
<h1>Permission : <?php echo $model->name ?> </h1>
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

        <legend>&nbsp;</legend>
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
                            <div class="make-switch switch-small">
                                <input type="hidden" name="controller_id[]" value="<?php echo $row->id ?>"/>
                                <input type="checkbox" name="index[<?php echo $row->id ?>]" <?php echo @$permission->action_index ? 'checked' : '' ?> value="1">
                            </div>  
                        </td>
                        <td class="button-column">

                            <div class="make-switch switch-small">
                                <input type="checkbox" name="create[<?php echo $row->id ?>]" <?php echo @$permission->action_create ? 'checked' : '' ?> value="1">
                            </div>  
                        </td>
                        <td class="button-column">
                            <div class="make-switch switch-small">
                                <input type="checkbox" name="update[<?php echo $row->id ?>]" <?php echo @$permission->action_update ? 'checked' : '' ?> value="1">
                            </div>  
                        </td>
                        <td class="button-column">
                            <div class="make-switch switch-small">
                                <input type="checkbox" name="delete[<?php echo $row->id ?>]" <?php echo @$permission->action_delete ? 'checked' : '' ?> value="1">
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
