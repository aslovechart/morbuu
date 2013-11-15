<?php
    /* @var $model Article */
?>
<?php foreach ($model as $row): ?>
        <figure class="clearfix">
            <a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>" class="thumb" target="_blank">
                <?php if ($row->image_over): ?>
                    <img src="<?php echo $row->image_over ?>" class="rd" />
                <?php else: ?>
                    <img src="http://placehold.it/600x500&text=[No Image]" class="rd"/>
                <?php endif; ?>
            </a>
            <figcaption>
                <p><a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>" target="_blank"><?php echo $row->name ?></a></p>
                <p>เมื่อ : <?php Yii::app()->formatday->getDatetime($row->set_time_show) ?></p>
            </figcaption>
        </figure>
<?php endforeach; ?>
