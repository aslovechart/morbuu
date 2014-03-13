<?php

    $criteria = new CDbCriteria();
    if ($is_group) {
        $category = Category::model()->findAll(array('condition' => 'category_id = 4', 'order' => 'name asc'));
        $category_id = CHtml::listData($category, 'id', 'id');
        $criteria->condition = "category_id in (" . implode(',', $category_id + array(0)) . ") and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
    } else {
        $criteria->condition = "category_id = $category_id and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
    }
    $criteria->order = 'set_time_show desc,created desc';
    $criteria->limit = $limit;
    $criteria->offset = $offset;
    $model_cate = Article::model()->findAll($criteria);
    foreach ($model_cate as $row):
?>
        <?php $this->widget('ext.morbuuItem.MorbuuItem', array('file_name' => $file_name, 'row' => $row)); ?>
    <?php endforeach; ?>
