<?php
    /* @var $model Article */
    $this->pageTitle = Yii::app()->name . ' - ' . $model->name;
    $this->breadcrumbs = array(
            $model->category->name => Yii::app()->createUrl('category/view', array('id' => $model->category->id)),
            $model->name,
    );
    $this->relate_category_id = $model->category_id;
?>

<div class="bx article">
    <h1 class="font at"><?php echo $model->name ?></h1>
    <article class="data">
        <!-- style มาจาก editor ภายใน -->
        <?php echo $model->content ?>
        <!-- สิ้นสุด style มาจาก editor ภายใน -->
    </article>
    <footer class="share clearfix">
        <p class="font">แบ่งปัน :</p>
        <div class="fb_like">
            <div class="fb-like" data-href="<?php echo Yii::app()->getBaseUrl(true) . '/' . $model->id . '-' . $model->url_rewrite ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=1421110408116945";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
        </div>
        <div class="fb_share">
            <div id="fb-root"></div>
            <div class="fb-share-button" data-href="<?php echo Yii::app()->getBaseUrl(true) . '/' . $model->id . '-' . $model->url_rewrite ?>" data-type="button_count"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=1421110408116945";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
        </div>
    </footer>
</div>
<div class="bx">
    <div class="heading two clearfix">
        <h1 class="font">ความคิดเห็น</h1>
    </div>
    <div class="facebook_comment">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=1421110408116945";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-comments" data-href="<?php echo Yii::app()->getBaseUrl(true) . '/' . $model->id . '-' . $model->url_rewrite ?>" data-numposts="20" data-width="728"></div>
    </div>
</div>
