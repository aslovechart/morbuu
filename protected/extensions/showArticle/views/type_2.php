<div class="small-12 large-12 columns">
    <div class="row" style="border-bottom:2px solid #EDEDED;padding-bottom:10px;">		
        <div class="small-12 large-3 columns" style="padding-left:20px;">
            <?php if ($row->image_over): ?>
                <img src="<?php echo $row->image_over ?>" class="th radius" />
            <?php else: ?>
                <img src="http://placehold.it/600x500&text=[ad]" class="th radius" />
            <?php endif; ?>
        </div>
        <div class="small-12 large-9 columns" style="padding-left:10px;">
            <h5 class="title_post"><a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>"><?php echo $row->name ?></a></h5>
            <p><?php  echo mb_substr(strip_tags ($row->content),0,150,'UTF-8') ?></p>
            <span class="label" style="font-size:0.805em;"><?php echo date('d M Y', strtotime($row->set_time_show)) ?></span><span class="label alert" style="font-size:0.805em;"> <?php echo number_format($row->count_view) ?> Views</span>
        </div>
    </div>
</div>