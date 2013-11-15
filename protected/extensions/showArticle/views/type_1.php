<div class="small-12 large-6 columns">
    <div class="row">
        <div class="small-12 large-5 columns">
            <a href="<?php echo Yii::app()->createUrl('/'.$row->id.'-'.$row->url_rewrite) ?>">
                <?php if ($row->image_over): ?>
                    <img src="<?php echo $row->image_over ?>" class="th radius" />
                <?php else: ?>
                    <img src="http://placehold.it/600x500&text=[ad]" class="th radius" />
                <?php endif; ?>
            </a>
        </div>
        <div class="small-12 large-7 columns">
            <span class="cat-01-list"><a href="<?php echo Yii::app()->createUrl('/'.$row->id.'-'.$row->url_rewrite) ?>"><?php echo $row->name ?>  </a></span><br/>
            <span class="label" style="font-size:0.705em;margin-top:20px;"><?php echo date('d M Y', strtotime($row->set_time_show)) ?></span><span class="label alert" style="font-size:0.705em;"> <?php echo number_format($row->count_view) ?> Views</span>
        </div>
    </div>
</div>
