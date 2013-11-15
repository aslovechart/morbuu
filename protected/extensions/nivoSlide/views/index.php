<?php
/* @var $model Article */
?>
<div id="slider" class="nivoSlider">
    <?php foreach ($model as $row): ?>
        <?php if ($row->image_over): ?>
            <a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>">
                <img src="<?php echo $row->image_over ?>" class="th radius"  data-thumb="images/01.jpg" title="<?php echo $row->name?>" height="300" /> 
            </a>
        <?php endif; ?>

    <?php endforeach; ?>
</div>