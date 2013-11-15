<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'category-form',
        'type' => 'horizontal',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    ?>
    <fieldset>

        <legend>&nbsp;</legend>
        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <?php echo $form->textFieldRow($model, 'name', array('size' => 45, 'maxlength' => 45)); ?>
        </div>

        <div class="row">
            <?php echo $form->textFieldRow($model, 'ordering'); ?>
        </div>

        <div class="row">
            <div class="control-group ">
                <?php echo $form->labelEx($model, 'active', array('class' => 'control-label required')); ?>
                <div class="controls">
                    <div class="make-switch switch-small">
                        <?php echo $form->checkBox($model, 'active'); ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'label' => 'Submit')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'reset', 'label' => 'Reset')); ?>
        </div>
    </fieldset>

    <?php $this->endWidget(); ?>

</div><!-- form -->
