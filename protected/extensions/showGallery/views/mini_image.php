<div class="small-12 large-2 columns">
    <a href="<?php echo Yii::app()->createUrl('/'.$row->id.'-'.$row->url_rewrite) ?>" >
        <?php if ($row->image_over): ?>
            <img src="<?php echo $row->image_over ?>" class="th radius" />
        <?php else: ?>
            <img src="http://placehold.it/600x500&text=[ad]" class="th radius" />
        <?php endif; ?>
    </a>
    <h4 class="title_post text-center "><a href="<?php echo Yii::app()->createUrl('/'.$row->id.'-'.$row->url_rewrite) ?>" ><?php echo $row->name?></a></h6>
</div>