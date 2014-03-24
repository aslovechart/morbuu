<?php
    $criteria = new CDbCriteria();
    $criteria->condition = "category_id = $category_id and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
    $criteria->order = ' created asc';
    $criteria->limit = $limit;
    $criteria->offset = $offset;
    $model_cate = Article::model()->findAll($criteria);
    foreach ($model_cate as $row):
        ?>
        <li class="rd">
            <a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>" class="thumb"  target="_blank">
                <?php if ($row->image_over): ?>
                    <img src="<?php echo $row->image_over ?>" />
                <?php else: ?>
                    <img src="http://placehold.it/120x100&text=[No Image]" />
                <?php endif; ?>
            </a>
            <?php $name = explode(' :', $row->name); ?>
            <p class="font"><a href="<?php echo Yii::app()->createUrl('/' . $row->id . '-' . $row->url_rewrite) ?>" target="_blank"><?php echo @$name[0] ?></a></p>
            <p class="between"><?php echo @$name[1] ?></p>
        </li>
    <?php endforeach; ?>
