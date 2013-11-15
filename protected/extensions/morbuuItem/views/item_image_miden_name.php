<figure>
    <a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>" target="_blank">
        <?php if ($row->image_over): ?>
                <img src="<?php echo $row->image_over ?>" class="rd" />
            <?php else: ?>
                <img src="http://placehold.it/600x500&text=[No Image]" class="rd"/>
        <?php endif; ?>
        <figcaption><?php echo $row->name ?></figcaption>
    </a>
</figure>
