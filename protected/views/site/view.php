<?php
/* @var $model Article */
$this->pageTitle = Yii::app()->name . ' ' . $model->name;
$this->breadcrumbs = array(
    $model->category->name => Yii::app()->createUrl('category/view', array('id' => $model->category->id)),
    $model->name,
);
?>
<div class="row">
    <div class="small-12 large-12 columns">
        <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'homeLink' => ' <a  href="' . Yii::app()->getBaseUrl(true) . '">หน้าแรก</a>',
                'tagName' => 'div',
                'links' => $this->breadcrumbs,
                'htmlOptions' => array('class' => 'menu breadcrumbs'),
                'inactiveLinkTemplate' => '<a  class="current">{label}</a>',
                'separator' => ''
            ));
            ?><!-- breadcrumbs -->
        <?php endif ?>

    </div>

    <!--  article  -->
    <article>
        <div class="small-12 large-12 columns">
            <h1 class="title_post"><?php echo $model->name ?></h1>
            <span class="label"><?php echo date('d M Y', strtotime($model->set_time_show)) ?></span><span class="radius secondary label">Post by "<?php echo $model->user->fname . ' ' . $model->user->lname ?>" ( <?php echo number_format($model->count_view) ?> Views )</span>
            <p>&nbsp;</p><div id="fb-root"></div>
            <div class="fb-like" data-href="<?php echo Yii::app()->getBaseUrl(true).'/'.$model->id.'-'.$model->url_rewrite?>" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="standard" data-action="like" data-show-faces="true" data-send="false"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=361377210597595";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="row" style="margin-top:10px;">
                <div class="large-12 columns">
                    <?php echo $model->content ?>					
                </div>
            </div>

            <p><span class="label alert">Tags คำค้น  : </span> <span style="font-size:0.935em;">
                    <?php
                    foreach ($model->tags() as $row):
                        ?>
                        <a href="<?php echo Yii::app()->createUrl('site/tags/', array('name' => $row->name)) ?>"><?php echo $row->name ?></a> ,
                        <?php
                    endforeach;
                    ?>
                </span></p>

        </div>
    </article>
    <!--  article  -->

</div>
<?php $this->widget('ext.relatePost.RelatePost', array('category_id' => $model->category_id)); ?>

<div class="header-grid-content-orange"><h3 class="grid-title">แสดงความคิดเห็น</h3></div>
<div style="text-align:center;">
	<div class="fb-comments" data-href="<?php echo Yii::app()->getBaseUrl(true).'/'.$model->id.'-'.$model->url_rewrite?>" data-num-posts="30" data-width="630"></div>
</div>