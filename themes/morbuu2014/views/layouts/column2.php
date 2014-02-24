<?php
    /**  @var $this Controller */
    $baseUrl = Yii::app()->theme->baseUrl . '/assets/';
?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="article clearfix">
    <div class="sidebar col_3 alpha ">
        <div class="bx sb-bn">
            <h1 class="font">ผู้สนับสนุน</h1>
            <div class="source">
                <a href="#" target="_blank"><img src="<?php echo $baseUrl ?>images/temp/temp_09.jpg"/></a>
            </div>
        </div>
        <div class="bx sb-rl">
            <h1 class="font">หัวข้อที่เกี่ยวข้อง</h1>
            <div>
                <?php $this->widget('ext.relatePost.RelatePost', array('category_id' => $this->relate_category_id, 'limit' => $this->relate_limit, 'offset' => $this->relate_offset)); ?>
            </div>
        </div>
        <?php
            if ($this->tag_article_id) {
                $criteria = new CDbCriteria();
                $criteria->condition = 'article_id = ' . $this->tag_article_id;
                $tag = Tag::model()->findAll($criteria);
            }
        ?>
        <div class="bx tag">
            <h1 class="font">คำยอดนิยม</h1>
            <div class="clearfix">

                <a href="#">ครูอังคณา</a>
                <a href="#">facebook</a>
                <a href="#">iPhone 5</a>
                <a href="#">หนุ่มบ้านไร่กับหวานใจไฮโซ</a>
                <a href="#">ทุ่งมะขามหย่อง</a>
                <a href="#">เรารักในหลวง</a>
                <a href="#">The new ipad</a>
            </div>
        </div>
    </div>
    <div class="col seventyfive">
        <?php echo $content; ?>

    </div>
</div>
<?php $this->endContent(); ?>