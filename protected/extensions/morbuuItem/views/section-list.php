<?php
    $criteria = new CDbCriteria();
    $criteria->condition = "category_id = $category_id and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
    $criteria->order = 'set_time_show desc,created desc';
    $criteria->limit = 1;
    $article = Article::model()->find($criteria);
    if (count($article)):
?>
<a class="hl rd" href="<?php echo Yii::app()->createUrl('/' . $article->id . '-' . $article->url_rewrite) ?>" target="_blank">
    <?php if ($article->image_over): ?>
            <img src="<?php echo $article->image_over ?>" class="rd" />
        <?php else: ?>
            <img src="http://placehold.it/600x500&text=No Image" class="rd" />
    <?php endif; ?>
    <p><?php echo $article->name ?></p>
</a>
<?php endif;?>
<ul>
    <?php $this->widget('ext.morbuuItem.ShowByCategory', array('category_id' => $category_id, 'file_name' => 'item_list_name', 'limit' => 4, 'offset' => 1)); ?>
</ul>