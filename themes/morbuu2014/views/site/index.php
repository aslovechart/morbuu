<?php
    /* @var $this SiteController */

    $this->pageTitle = Yii::app()->name . ' เว็บนี้สำหรับเด็กมอบู';
    $baseUrl = Yii::app()->theme->baseUrl . '/assets/';
    $cs = Yii::app()->getClientScript();
?>

<!-- script cycle slider -->

<?php
    $cs->registerCssFile($baseUrl . 'javascripts/slider/slider.css');

    $cs->registerScriptFile($baseUrl . 'javascripts/slider/slider.min.js');
?>
<script language="javascript">
    $(document).ready(function() {
        $("#tabs").tabs();
        $('.slide').slides({
            preload: true,
            preloadImage: '<?php echo $baseUrl ?>javascripts/slider/images/loading.gif',
            play: 5000,
            pause: 2500,
            hoverPause: true
        });
    });
</script>
<div class="welcome clearfix">
    <div class="clearfix">
        <section class="mb-01 bx">
            <h1 class="font">MorBuu Cute</h1>
            <a href="home.php?page=article/article" target="_blank" class="thumb"><img class="rd" src="<?php echo $baseUrl ?>images/temp/temp_09.jpg"></a>
            <p class="font"><a href="home.php?page=article/article" target="_blank"># น้องพลอย</a></p>
            <p class="font">เอกวิทยาศาสตร์การอาหาร (ชั่นปีที่ 4) <br>คณะวิทยาศาสตร์</p>
        </section>
        <section class="mb-02 bx clearfix">
            <div class="slide">
                <div class="slides_container">
                    <?php $this->widget('ext.morbuuItem.ShowByCategory', array('category_id' => 3, 'file_name' => 'item_slide', 'limit' => 4)); ?>
                </div>
            </div>
            <ul class="other">
                <li><a href="#" target="_blank"><img src="<?php echo $baseUrl ?>images/mainpage/side_menu_02.jpg"/></a></li>
                <li><a href="#" target="_blank"><img src="<?php echo $baseUrl ?>images/mainpage/side_menu_01.jpg"/></a></li>
                <li><a href="#" target="_blank"><img src="<?php echo $baseUrl ?>images/mainpage/side_box.jpg"/></a></li>
            </ul>
        </section>
    </div>
    <div class="bx mb- nrt clearfix" style="margin-top: 45px;">
        <div id="tabs" class="indx-tab">
            <ul class="m-tab clearfix">
                <li><a href="#tab-1" class="font"><img src="<?php echo $baseUrl ?>images/icon/comment.png"/>รวมเรื่องเมาท์</a></li>
                <li><a href="#tab-2" class="font"><img src="<?php echo $baseUrl ?>images/icon/video.png"/>หนังใหม่</a></li>
                <li><a href="#tab-3" class="font"><img src="<?php echo $baseUrl ?>images/icon/camera.png"/>มือถือ คอมฯ</a></li>
                <li><a href="#tab-4" class="font"><img src="<?php echo $baseUrl ?>images/icon/music.png"/>เพลง MV</a></li>
                <li><a href="#tab-5" class="font"><img src="<?php echo $baseUrl ?>images/icon/game.png"/>กีฬา</a></li>

            </ul>
            <div id="tab-1" class="clearfix"> <?php $this->widget('ext.morbuuItem.Section', array('category_id' => 2, 'file_name' => 'section-tabs')); ?></div>
            <div id="tab-2" class="clearfix"><?php $this->widget('ext.morbuuItem.Section', array('category_id' => 14, 'file_name' => 'section-tabs')); ?></div>
            <div id="tab-3" class="clearfix">

                <figure class="hl">
                    <?php
                        $category = Category::model()->findAll(array('condition' => 'category_id = 4', 'order' => 'name asc'));
                        $category_id = CHtml::listData($category, 'id', 'id');

                        $criteria = new CDbCriteria();
                        $criteria->condition = "category_id in (" . implode(',', $category_id+array(0)) . ") and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
                        $criteria->order = 'set_time_show desc,created desc';
                        $criteria->limit = 1;
                        $article = Article::model()->find($criteria);
                        if (count($article)):
                            ?>
                            <a href="<?php echo Yii::app()->createUrl('/' . $article->id . '-' . $article->url_rewrite) ?>">
                                <?php if ($article->image_over): ?>
                                    <img src="<?php echo $article->image_over ?>" class="rd" />
                                <?php else: ?>
                                    <img src="http://placehold.it/600x500&text=No Image" class="rd" />
                                <?php endif; ?>
                                <figcaption><?php echo $article->name ?> <?php echo mb_substr(strip_tags($article->content), 0, 200, 'UTF-8') ?></figcaption>
                            </a>
                        <?php endif; ?>
                </figure>

                <?php $this->widget('ext.morbuuItem.ShowByCategory', array('category_id' => $category_id, 'file_name' => 'item_image_miden_name', 'limit' => 8, 'offset' => 1,'is_group'=>true)); ?>
            </div>
            <div id="tab-4" class="clearfix"><?php $this->widget('ext.morbuuItem.Section', array('category_id' => 14, 'file_name' => 'section-tabs')); ?></div>
            <div id="tab-5" class="clearfix"><?php $this->widget('ext.morbuuItem.Section', array('category_id' => 14, 'file_name' => 'section-tabs')); ?></div>

        </div>
        <div class="-09">
            <?php $this->widget('ext.morbuuItem.Section', array('category_id' => 2, 'file_name' => 'section-list')); ?>
        </div>
    </div>
    <div class="twin clearfix">
        <section class="mb-04 bx">
            <h1 class="font">MorBuu Travel</h1>
            <div class="clearfix">
                <?php $this->widget('ext.morbuuItem.ShowByCategory', array('category_id' => 3, 'file_name' => 'item_image_mini_name', 'limit' => 6)); ?>
            </div>
        </section>
        <div class="mb- bx pd">
            <div class="bn-b03">
                <img src="<?php echo $baseUrl ?>images/temp/banner_b01.jpg" class="rd" />
            </div>
        </div>
    </div>
    <section class="mb-06">
        <div class="bx inner">
            <h1 class="font">MorBuu News</h1>
            <div class="clearfix">
                <figure class="hl">
                    <?php
                        $category_id = 3;
                        $criteria = new CDbCriteria();
                        $criteria->condition = "category_id = $category_id and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
                        $criteria->order = 'set_time_show desc,created desc';
                        $criteria->limit = 1;
                        $article = Article::model()->find($criteria);
                        if (count($article)):
                            ?>
                            <a href="<?php echo Yii::app()->createUrl('/' . $article->id . '-' . $article->url_rewrite) ?>">
                                <?php if ($article->image_over): ?>
                                    <img src="<?php echo $article->image_over ?>" class="rd" />
                                <?php else: ?>
                                    <img src="http://placehold.it/600x500&text=No Image" class="rd" />
                                <?php endif; ?>
                                <figcaption><?php echo $article->name ?> <?php echo mb_substr(strip_tags($article->content), 0, 200, 'UTF-8') ?></figcaption>
                            </a>
                        <?php endif; ?>
                </figure>
                <?php $this->widget('ext.morbuuItem.ShowByCategory', array('category_id' => $category_id, 'file_name' => 'item_image_miden_name', 'limit' => 8, 'offset' => 1)); ?>
            </div>
        </div>
    </section>
    <div class="twin clearfix">
        <section class="mb-03">
            <div class="bx inner">
                <h1 class="font ">หอพัก / ร้านอาหาร / ร้านค้า</h1>
                <!--<img src="<?php echo $baseUrl ?>images/heading/buu-girl.png" class="title" />-->
                <?php $this->widget('ext.morbuuItem.Section', array('category_id' => 2, 'file_name' => 'section-list')); ?>
            </div>
        </section>
        <section class="mb-04 bx">
            <h1 class="font">VIDEO CLIP</h1>
            <div class="clearfix">
                <?php $this->widget('ext.morbuuItem.ShowByCategory', array('category_id' => 3, 'file_name' => 'item_image_mini_name', 'limit' => 8)); ?>
            </div>
        </section>
    </div>
    <section class="-07 bx">
        <h1 class="font">MorBuu Boy & Girl</h1>
        <div class="clearfix">
            <?php $this->widget('ext.morbuuItem.ShowByCategory', array('category_id' => 2, 'file_name' => 'item_image_lage_name', 'limit' => 5)); ?>
        </div>
    </section>
    <section class="-05 bx">
        <h1 class="font">Horoscope</h1>
        <ul class="clearfix">
            <?PHP for ($i = 1; $i <= 12; $i++) { ?>
                    <li class="rd">
                        <a href="#" class="thumb"><img src="<?php echo $baseUrl ?>images/horo/01.png"></a>
                        <p class="font">ราศรีกรกกฎ</p>
                        <p class="between">15 พฤศจิกายน - 15 ธันวาคม</p>
                    </li>
                <?PHP } ?>
        </ul>
    </section>
    <div class="bx -lnk clearfix">
        <p class="font">คณะต่างๆในมหาวิทยาลัย</p>
        <div class="clearfix">
            <a href="http://edu.buu.ac.th/" target="_blank" rel="nofollow">คณะศึกษาศาสตร์</a>
            <a href="http://fineart.buu.ac.th/" target="_blank" rel="nofollow">คณะศิลปกรรมศาสตร์</a>
            <a href="http://nurse.buu.ac.th/" target="_blank" rel="nofollow">คณะพยาบาลศาสตร์</a>
            <a href="http://ph.buu.ac.th/" target="_blank" rel="nofollow">คณะสาธารณสุขศาสตร์</a>
            <a href="http://sci.buu.ac.th/" target="_blank" rel="nofollow">คณะวิทยาศาสตร์</a>
            <a href="http://eng.buu.ac.th/" target="_blank" rel="nofollow">คณะวิศวกรรมศาสตร์</a>
            <a href="http://huso.buu.ac.th/" target="_blank" rel="nofollow">คณะมนุษยศาสตร์และสังคมศาสตร์</a>
            <a href="http://bmc.buu.ac.th/" target="_blank" rel="nofollow">คณะโลจิสติกส์</a>
            <a href="http://css.buu.ac.th/" target="_blank" rel="nofollow">คณะวิทยาศาสตร์การกีฬา</a>
            <a href="http://buuic.buu.ac.th/" target="_blank" rel="nofollow">คณะวิทยาลัยนานาชาติ</a>
            <a href="http://thaimed.buu.ac.th/" target="_blank" rel="nofollow">คณะแพทย์แผนไทยอภัยภูเบศร</a>
            <a href="http://med.buu.ac.th/" target="_blank" rel="nofollow">คณะแพทยศาสตร์</a>
            <a href="http://polsci-law.buu.ac.th/" target="_blank" rel="nofollow">คณะรัฐศาสตร์และนิติศาสตร์</a>
            <a href="http://mt.buu.ac.th/" target="_blank" rel="nofollow">คณะการจัดการและการท่องเที่ยว</a>
            <a href="http://alliedhs.buu.ac.th/" target="_blank" rel="nofollow">คณะสหเวชศาสตร์</a>
            <a href="http://geo.buu.ac.th/" target="_blank" rel="nofollow">คณะภูมิสารสนเทศศาสตร์</a>
            <a href="http://informatics.buu.ac.th/" target="_blank" rel="nofollow">คณะวิทยาการสารสนเทศ</a>
            <a href="#" target="_blank" rel="nofollow">คณะเภสัชศาสตร์</a>
            <a href="http://gspa.buu.ac.th/" target="_blank" rel="nofollow"> คณะวิทยาลัยการบริหารรัฐกิจ</a>
            <a href="http://ex-mba.edu/" target="_blank" rel="nofollow">วิทยาลัยพาณิชยศาสตร์</a>
            <a href="http://rmcs.buu.ac.th/" target="_blank" rel="nofollow">วิทยาลัยวิทยาการวิจัยและวิทยาการปัญญา</a>
        </div>
    </div>
</div>