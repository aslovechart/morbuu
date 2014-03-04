<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' ยิ้มกว้างๆ แล้วเดินทางไปกับเรา ตอน "ลุยบางแสน ดินแดนแสนสุข"';
$baseUrl = Yii::app()->theme->baseUrl . '/assets/';
$cs = Yii::app()->getClientScript();

?>

<div class="row">
    <div class="small-12 large-8 columns">
        <div class="slider-wrapper theme-default">
            <?php $this->widget('ext.nivoSlide.NivoSlide', array('category_id' => 1)); ?>
        </div>
    </div>
    <div class="small-12 large-4 columns">
	
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- smiletravel_300_250 -->
		<ins class="adsbygoogle"
			 style="display:inline-block;width:300px;height:250px"
			 data-ad-client="ca-pub-0764508351380077"
			 data-ad-slot="7392269522"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		
    </div>
</div>

<div class="row">
    <div class="small-12 large-8 columns">
        <div class="row">

            <div class="small-12 large-6 columns">
                <div class="small-12 large-12">
                    <div class="header-grid-content-blue"><h3 class="grid-title">ข่าวทั่วไป</h3></div>
                </div>
                <?php $this->widget('ext.showIndex.ShowIndex', array('category_id' => 2)); ?>

            </div>
            <div class="small-12 large-6 columns">
                <div class="small-12 large-12">
                    <div class="header-grid-content-orange"><h3 class="grid-title">ร้านอาหาร เค้ก กาแฟ</h3></div>
                </div>
                <?php $this->widget('ext.showIndex.ShowIndex', array('category_id' => 2)); ?>

            </div>
        </div>
        <div class="row">	


            <div class="small-12 large-6 columns">
                <div class="small-12 large-12">
                    <div class="header-grid-content-green"><h3 class="grid-title">เทศกาล ประเพณี</h3></div>
                </div>
                <?php $this->widget('ext.showIndex.ShowIndex', array('category_id' => 2)); ?>

            </div>
            <div class="small-12 large-6 columns">
                <div class="small-12 large-12">
                    <div class="header-grid-content-pink"><h3 class="grid-title">ที่พักแนะนำ</h3></div>
                </div>
                <?php $this->widget('ext.showIndex.ShowIndex', array('category_id' => 2)); ?>


            </div>

        </div>
    </div>
    <div class="small-12 large-4 columns">
        <div class="row">
            <div class="small-12 large-12 columns">
                <div class="header-grid-content"><h3 class="grid-title">Facebook Fanpage</h3></div>
                <div class="fb-like-box" data-href="http://www.facebook.com/pages/Smiletravel/146446642190429" data-width="300" data-height="420" data-show-faces="true" data-stream="false" data-header="false"></div>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1&appId=361377210597595";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div style="clear: both;"></div>

</div>

<!-- Home Banner Ads 980x150 -->
<p style="margin-bottom:5px;text-align:center;">


</p>

<div class="small-12 large-12 columns" style="background-color:#00394a; border-top:10px solid #002833; border-bottom:10px solid #002833;">	
    <div class="small-12 large-12">
        <div class="header-grid-content-nobg"><h3 class="grid-title-nobg">Image Gallery , Video , Photography</h3></div>
    </div>

    <div class="row" style="padding-bottom:10px;">	
        <?php
        $criteria = new CDbCriteria();
        $criteria->condition = "category_id = 5 and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
        $criteria->order = 'set_time_show desc';
        $criteria->limit = 3;
        $model_cate = Article::model()->findAll($criteria);
        foreach ($model_cate as $row):
            ?>
            <?php $this->widget('ext.showGallery.ShowGallery', array('type' => 'lage', 'row' => $row)); ?>
        <?php endforeach; ?>
    </div>
    <div style="clear: both;"></div>
    <div class="row" style="padding-bottom:10px;">	
        <?php
        $criteria = new CDbCriteria();
        $criteria->condition = "category_id = 2 and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
        $criteria->order = 'set_time_show   desc';
        $criteria->limit = 6;
        $criteria->offset = 4;
        $model_cate = Article::model()->findAll($criteria);
        foreach ($model_cate as $row):
            ?>
            <?php $this->widget('ext.showGallery.ShowGallery', array('type' => 'mini', 'row' => $row)); ?>
        <?php endforeach; ?>
    </div>
    <div style="clear: both;"></div>



</div>
<div class="small-12 large-12 columns" style="margin:10px 0; border-bottom:5px solid #05c200; background-color:#f2fff3;">
    <div class="row">

        <div class="small-12 large-4 columns">
            <div class="small-12 large-12">
                <div class="header-grid-content-green"><h3 class="grid-title">โปรโมชั่นพิเศษ</h3></div>
            </div>
            <?php $this->widget('ext.showIndex.ShowPlaceHit', array('category_id' => 2)); ?>

        </div>

        <div class="small-12 large-4 columns">
            <div class="small-12 large-12">
                <div class="header-grid-content-green"><h3 class="grid-title">ทริป เทคนิค</h3></div>
            </div>
            <?php $this->widget('ext.showIndex.ShowPlaceHit', array('category_id' => 2)); ?>		
        </div>

        <div class="small-12 large-4 columns">
            <div class="small-12 large-12">
                <div class="header-grid-content-green"><h3 class="grid-title">คอนเสิร์ต การแสดง</h3></div>
            </div>
            <?php $this->widget('ext.showIndex.ShowPlaceHit', array('category_id' => 2)); ?>	

        </div>

    </div>	
</div>
<?php //include "zone2.php"; ?>
<?php //include "zone3.php"; ?>
<?php $cs->registerScriptFile($baseUrl . '/js/tytabs.jquery.min.js'); ?>
<script type="text/javascript">
<!--
$(document).ready(function(){
    $("#tabsholder").tytabs({
        tabinit:"1",
        fadespeed:"fast"
    });
    $("#tabsholder2").tytabs({
        prefixtabs:"tabz",
        prefixcontent:"contentz",
        classcontent:"tabscontent",
        tabinit:"3",
        catchget:"tab2",
        fadespeed:"normal"
    });
});
-->
</script>
<?php $cs->registerScriptFile($baseUrl . '/js/jquery.nivo.slider.js'); ?>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>
<style>
    .nivoSlider { height:300px; }
</style>