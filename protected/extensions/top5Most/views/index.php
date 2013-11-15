<?php
/* @var $model Article */
$i=1;
?>
<div class="header-grid-content"><h3 class="grid-title">Top 5 Most travel</h3></div>
<?php foreach ($model as $row): ?>
    <div class="row">
        <div class="small-12 large-5 columns">
            <a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>">
                <?php if ($row->image_over): ?>
                    <img src="<?php echo $row->image_over ?>" class="th radius" />
                <?php else: ?>
                    <img src="http://placehold.it/600x500&text=[ad]" class="th radius" />
                <?php endif; ?>
            </a>
        </div>
        <div class="small-12 large-7 columns">
            <span class="sidebar-toplist"><a href="<?php echo Yii::app()->createUrl('/'.$row->id.'-'.$row->url_rewrite) ?>"><?php echo $row->name ?></a></span><br/>
            <span class="label alert" style="font-size:0.805em;margin-top:10px;">Top <?php echo $i++; ?></span>
        </div>
    </div>
<?php endforeach; ?>