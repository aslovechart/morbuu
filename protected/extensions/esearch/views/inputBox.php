<!--<form id="searchform" action="search.php">
                                        <div class="row collapse">
                                            <div class="small-8 large-8 columns" style="margin-top:-10px;">
                                                <input name="s" type="text" class="searchInput" id="s" value="ค้นหาข้อมูล..." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                                            </div>
                                            <div class="small-4 large-4 columns" style="margin-top:-10px;">
                                                <input type="submit" class="button prefix alert" value="ค้นหา" id="submit" />
                                            </div>
                                        </div>
                                    </form>-->


<?php echo CHtml::beginForm($url, 'get', $htmlOptions) ?>
<div class="row collapse">
    <div class="small-8 large-8 columns" style="margin-top:-10px;">
        <?php //if($label) echo CHtml::label($label, 'q') ?>
        <?php //echo CHtml::textField('q', Yii::app()->request->getQuery('q'), array('class' => $htmlOptions['class'] . '-input')) ?>
        <input name="q" type="text" class="searchInput" id="q" value="" placeholder="ค้นหาข้อมูล..." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
    </div>
    <div class="small-4 large-4 columns" style="margin-top:-10px;">
        <input type="submit" class="button prefix alert" value="ค้นหา" id="submit" />
    </div>
</div>
<?php echo CHtml::endForm() ?>

