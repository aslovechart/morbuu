
<?php
/* @var $model Article */
?>
<div class="header-grid-content"><h3 class="grid-title">Last Recent Post</h3></div>
<ul class="side-nav" style="padding-left:10px;">
    <?php foreach ($model as $row): ?>
        <li><a href="<?php echo Yii::app()->createUrl('/'.$row->id.'-'.$row->url_rewrite) ?>"><?php echo $row->name?></a></li>
    <?php endforeach; ?>
</ul>