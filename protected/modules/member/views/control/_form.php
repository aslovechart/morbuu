<?php
/* @var $this ControlController */
/* @var $model Control */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'horizontalForm',
        'type' => 'horizontal',
        'enableClientValidation' => true,
        'id' => 'control-form',
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            )
    );
    ?>
    <fieldset>

        <legend>&nbsp;</legend>
        <p class="note">Fields with <span class="required">*</span> are required.</p>


        <div class="row">
            <?php echo $form->textFieldRow($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>
        </div>
        <div class="row">
            <?php echo $form->textFieldRow($model, 'control_name', array('size' => 60, 'maxlength' => 255)); ?>
        </div>
        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'label' => 'Submit')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'reset', 'label' => 'Reset')); ?>
        </div>


        <?php $this->endWidget(); ?>
    </fieldset>
</div><!-- form -->