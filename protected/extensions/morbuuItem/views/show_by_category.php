<?php

    $criteria = new CDbCriteria();
    $criteria->condition = "category_id = $category_id and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
    $criteria->order = 'set_time_show desc,created desc';
    $criteria->limit = $limit;
    $criteria->offset = $offset;
    $model_cate = Article::model()->findAll($criteria);
    foreach ($model_cate as $row):
?>
        <?php $this->widget('ext.morbuuItem.MorbuuItem', array('file_name' => $file_name, 'row' => $row)); ?>
    <?php endforeach; ?>
