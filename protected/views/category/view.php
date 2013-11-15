<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $article Article */
$this->pageTitle = Yii::app()->name . ' '.$model->name ;
?>
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