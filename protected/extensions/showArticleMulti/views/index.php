<?php foreach ($once as $row): ?>
    <div class="small-12 large-12 columns">
        <a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>">
            <?php if ($row->image_over): ?>
                <img src="<?php echo $row->image_over ?>" class="th radius" />
            <?php else: ?>
                <img src="http://placehold.it/600x500&text=[ad]" class="th radius" />
            <?php endif; ?>
        </a>
    </div>
    <div class="small-12 large-12 columns"><h6 class="title_post">
            <a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>"><?php echo $row->name ?></a></h6></div>
<?php endforeach; ?>
<div class="small-12 large-12 columns">
    <ul style="padding-left:20px;">
        <?php
        foreach ($model as $row):
            ?>
            <li><span class="list_post"><a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>"><?php echo $row->name ?> </a></span></li>
        <?php endforeach; ?>
    </ul>
</div>	