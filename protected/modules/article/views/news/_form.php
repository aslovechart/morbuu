<?php
/* @var $this NewsController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'article-form',
        'type' => 'horizontal',
        'enableClientValidation' => true,
        'id' => 'control-form',
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
            <?php echo $form->textFieldRow($model, 'name', array('size' => 60, 'maxlength' => 255, 'class' => 'span7 friendlyURL')); ?>
        </div>

        <div class="row">
            <?php echo $form->textFieldRow($model, 'url_rewrite', array('size' => 60, 'maxlength' => 255, 'class' => 'span7 url_rewrite')); ?>
        </div>

        <div class="row">
            <div class="control-group ">
                <?php echo $form->labelEx($model, 'content', array('class' => 'control-label required')); ?>
                <div class="controls">
                    <div class="span7" style="padding: 0;margin: 0;">

                        <?php
                        $this->widget('application.extensions.eckeditor.ECKEditor', array(
                            'model' => $model,
                            'attribute' => 'content',
                            'config' => array(
                                'height' => '400px',
                                'width' => '100%',
                                'filebrowserBrowseUrl' => Yii::app()->baseUrl . '/ckfinder/ckfinder.html',
                                'filebrowserImageBrowseUrl' => Yii::app()->baseUrl . '/ckfinder/ckfinder.html?Type=Images',
                                'filebrowserFlashBrowseUrl' => Yii::app()->baseUrl . '/ckfinder/ckfinder.html?Type=Flash',
                                'filebrowserUploadUrl' => Yii::app()->baseUrl . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                'filebrowserImageUploadUrl' => Yii::app()->baseUrl . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                'filebrowserFlashUploadUrl' => Yii::app()->baseUrl . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>           
            <?php //echo $form->textAreaRow($model, 'content', array('rows' => 6, 'cols' => 50, 'class' => 'span7'));  ?>
        </div>

        <div class="row">
            <?php //echo $form->textFieldRow($model, 'set_time_show');  ?>
            <div class="control-group ">
                <?php echo $form->labelEx($model, 'set_time_show', array('class' => 'control-label')); ?>
                <div class="controls">
                    <div>
                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'model' => $model,
                            'attribute' => 'set_time_show',
                            'value' => date("d-m-Y", mktime() + 60 * 60 * 24),
                            'htmlOptions' => array(
                                'size' => '20', // textField size
                                'maxlength' => '10', // textField maxlength
                            ),
                            'options' => array('dateFormat' => 'yy-mm-dd', 'minDate' => 'new Date()',),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="control-group ">
                <?php echo $form->labelEx($model, 'tag', array('class' => 'control-label')); ?>
                <div class="controls ">
                    <div >
                        <?php
                        $tag = Tag::model()->findAll(array('group'=>'name'));
                        $arr_tag = CHtml::listData($tag, 'id', 'name');
                        explode(',',implode(',',$arr_tag));
                        ?>
                        <?php
                        $this->widget('application.extensions.multicomplete.MultiComplete', array(
                            'model' => $model,
                            'attribute' => 'tag',
                            'splitter' => ',',
                            'source' => explode(',',implode(',',$arr_tag)),
                            //'sourceUrl' => 'search.html',
                            // additional javascript options for the autocomplete plugin
                            'options' => array(
                                'minLength' => '2',
                            ),
                            'htmlOptions' => array(
                                'size' => '60',
                                'class' => 'span7'
                            ),
                        ));
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="control-group ">
                <?php echo $form->labelEx($model, 'image_over', array('class' => 'control-label')); ?>
                <div class="controls ">
                    <div >
                        <?php if (!$model->isNewRecord && $model->image_over!=''):?>
                            <span class="img_over"><img src="<?php echo $model->image_over?>" width="100"/></span>
                        <?php else:?>
                            <span class="img_over"></span>
                        <?php endif;?>
                        
                        <?php echo $form->hiddenField($model, 'image_over'); ?>
                        <?php $this->widget('ext.finder.EImageFinder', array('fieldName' => 'Article_image_over')); ?>
                    </div>
                </div>

            </div>
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
        <?php $this->endWidget(); ?>
    </fieldset>
</div><!-- form -->


<?php
Yii::app()->clientScript->registerScript('friendlyURL', "
 $('.friendlyURL').live('keyup',function(){
            $('.url_rewrite').val(str2url($(this).val().replace(/^[0-9]+\./, ''), 'UTF-8'));
        });
        $('.url_rewrite').live('keyup',function(){
            $(this).val(str2url($(this).val().replace(/^[0-9]+\./, ''), 'UTF-8'));
        });
function str2url(str,encoding,ucfirst)
{
	str = str.toUpperCase();
	str = str.toLowerCase();

	str = str.replace(/[\u0105\u0104\u00E0\u00E1\u00E2\u00E3\u00E4\u00E5]/g,'a');
	str = str.replace(/[\u00E7\u010D\u0107\u0106]/g,'c');
	str = str.replace(/[\u010F]/g,'d');
	str = str.replace(/[\u00E8\u00E9\u00EA\u00EB\u011B\u0119\u0118]/g,'e');
	str = str.replace(/[\u00EC\u00ED\u00EE\u00EF]/g,'i');
	str = str.replace(/[\u0142\u0141]/g,'l');
	str = str.replace(/[\u00F1\u0148]/g,'n');
	str = str.replace(/[\u00F2\u00F3\u00F4\u00F5\u00F6\u00F8\u00D3]/g,'o');
	str = str.replace(/[\u0159]/g,'r');
	str = str.replace(/[\u015B\u015A\u0161]/g,'s');
	str = str.replace(/[\u00DF]/g,'ss');
	str = str.replace(/[\u0165]/g,'t');
	str = str.replace(/[\u00F9\u00FA\u00FB\u00FC\u016F]/g,'u');
	str = str.replace(/[\u00FD\u00FF]/g,'y');
	str = str.replace(/[\u017C\u017A\u017B\u0179\u017E]/g,'z');
	str = str.replace(/[\u00E6]/g,'ae');
	str = str.replace(/[\u0153]/g,'oe');
	str = str.replace(/[\u013E\u013A]/g,'l');
	str = str.replace(/[\u0155]/g,'r');

	str = str.replace(/[^a-z0-9ก-๙\s\'\:\/\[\]-]/g,'');
	str = str.replace(/[\s\'\:\/\[\]-]+/g,' ');
	str = str.replace(/[ ]/g,'-');
	str = str.replace(/[\/]/g,'-');

	if (ucfirst == 1) {
		c = str.charAt(0);
		str = c.toUpperCase()+str.slice(1);
	}

	return str;
}        
");
?>
        
