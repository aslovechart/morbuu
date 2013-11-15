<?php
    /* @var $this CategoryController */
    /* @var $model Category */
    /* @var $article Article */
    $this->pageTitle = Yii::app()->name . ' ' . $model->name;
    $this->relate_category_id = $model->id;
    if ($item_count < $page_size) {
        $this->relate_offset = 5;
    } else {
        $this->relate_offset = $page_size;
    }
?>

<div class="bx all-article">
    <h1 class="font at">หมวดหมู่ : <span><?php echo $model->name ?></span></h1>
    <div class="clearfix">
        <?php foreach ($article as $row): ?>
                <?php $this->widget('ext.morbuuItem.MorbuuItem', array('row' => $row, 'file_name' => 'item_category_image_mini_name')); ?>
            <?php endforeach; ?>

    </div>
    <div class="clearfix">
        <div class="paginate">
            <?php
                $this->widget('CLinkPager', array(
                        'currentPage' => $pages->getCurrentPage(),
                        'itemCount' => $item_count,
                        'pageSize' => $page_size,
                        'maxButtonCount' => 10,
                        //'nextPageLabel'=>'My text >',
                        'header' => '',
                        'htmlOptions' => array('id' => 'pagination-flickr'),
                ));
            ?>
        </div>
    </div>
</div>


<?php return; ?>
<!--  Other posts  -->
<div class="header-grid-content-blue"><h3 class="grid-title"><?php echo $model->name ?></h3></div>
<div class="row">
    <?php foreach ($article as $row): ?>
            <?php $this->widget('ext.showArticle.ShowArticle', array('row' => $row, 'type' => $type)); ?>
        <?php endforeach; ?>
</div>
<!--  Other posts  -->

<div class="small-12 large-12 columns">	
    <!-- Category Banner Ads 468x60 -->
    <p style="text-align:center;"><img src="http://placehold.it/468x60&text=[ad]" /></p>
    <div class="pagination-centered">
        <?php
            $this->widget('CLinkPager', array(
                    'currentPage' => $pages->getCurrentPage(),
                    'itemCount' => $item_count,
                    'pageSize' => $page_size,
                    'maxButtonCount' => 10,
                    //'nextPageLabel'=>'My text >',
                    'header' => '',
                    'htmlOptions' => array('class' => 'pagination'),
            ));
        ?>
        <!--        <ul class="pagination">
                    <li class="arrow unavailable"><a href="">&laquo;</a></li>
                    <li class="current"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li class="unavailable"><a href="">&hellip;</a></li>
                    <li><a href="">12</a></li>
                    <li><a href="">13</a></li>
                    <li class="arrow"><a href="">&raquo;</a></li>
                </ul>-->
    </div>
</div>