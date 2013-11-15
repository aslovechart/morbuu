<?php /* @var $this Controller */ ?>

<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="description" content="ยิ้มกว้างๆ แล้วเดินทางท่องเที่ยวไปกับเราทีมงาน SmileTravel ตอน ลุยบางแสน ดินแดนแสนสุข" />
		<meta name="keywords" content="สถานที่ท่องเที่ยว,แหล่งท่องเที่ยว,บางแสน,ที่เที่ยวบางแสน" />
        <?php
        $baseUrl = Yii::app()->theme->baseUrl . '/assets';
        $cs = Yii::app()->getClientScript();
        $cs->registerCssFile($baseUrl . '/css/normalize.css');
        $cs->registerCssFile($baseUrl . '/css/foundation.css');
        $cs->registerCssFile($baseUrl . '/css/style.css');
       // $cs->registerCssFile($baseUrl . '/css/flex-slider/flexslider.css');
        $cs->registerCssFile($baseUrl . '/css/noscript.css');
        $cs->registerCssFile($baseUrl . '/css/themes/default/default.css');
        $cs->registerCssFile($baseUrl . '/css/nivo-slider.css');

        Yii::app()->clientScript->registerCoreScript('jquery');
        ?>
    </head>
    <body>
        <div class="row" style="background-color:#ffffff;">
            <div class="small-12 large-12 columns" style="margin-top:15px; border-radius:2px 2px 0 0;">
                <div class="row">
                    <div class="small-12 large-4 columns">
                        <a href="http://www.smiletravel.in.th/"><img src="<?php echo $baseUrl . '/' ?>images/logo-02.png" /></a>
                    </div>
                    <div class="small-12 large-8 columns">
                        <!-- TopNav Banner Ads 600x75 -->
                        <p style="text-align:right;"><img src="http://placehold.it/600x75&text=[Ads Banner]" /></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="small-12 large-12 columns" style="margin-bottom:-30px;">
                    <nav class="top-bar">
                        <!--  Mobile area  -->
                        <ul class="title-area">
                            <li class="name">
                                <h1><a href="http://www.smiletravel.in.th/"><img src="<?php echo $baseUrl . '/' ?>images/home.png"/></a></h1>
                            </li>
                            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                        </ul>
                        <!--  End Mobile area  -->


                        <section class="top-bar-section">
                            <!-- Left Nav Section -->
                            <ul class="left">
                                <li class="divider"></li>
                                <li class="has-dropdown"><a>เที่ยวทั่วไทย</a>
                                    <ul class="dropdown">
                                        <?php
                                        $category = Category::model()->findAll(array('condition' => 'category_id = 1  and active = 1 and status = 1', 'order' => 'name asc'));
                                        foreach ($category as $row):
                                            ?>
                                            <li><a href="<?php echo Yii::app()->createUrl('category/view/', array('id' => $row->id)) ?>"><?php echo $row->name ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="has-dropdown"><a>รีวิว-บทความ</a>
                                    <ul class="dropdown">
                                        <?php
                                        $category = Category::model()->findAll(array('condition' => 'category_id = 3  and active = 1 and status = 1', 'order' => 'name asc'));
                                        foreach ($category as $row):
                                            ?>
                                            <li><a href="<?php echo Yii::app()->createUrl('category/view/', array('id' => $row->id)) ?>"><?php echo $row->name ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="has-dropdown"><a>กิจกรรมดีๆ</a>
                                    <ul class="dropdown">
                                        <?php
                                        $category = Category::model()->findAll(array('condition' => 'category_id = 4  and active = 1 and status = 1', 'order' => 'name asc'));
                                        foreach ($category as $row):
                                            ?>
                                            <li><a href="<?php echo Yii::app()->createUrl('category/view/', array('id' => $row->id)) ?>"><?php echo $row->name ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
<!--                                <li class="divider"></li>
                                <li class="has-dropdown"><a>สถานที่เที่ยวยอดฮิต</a>
                                    <ul class="dropdown">
                                        <?php
                                        $category = Category::model()->findAll(array('condition' => 'category_id = 16', 'order' => 'name asc' ,'limit'=>10));
                                        foreach ($category as $row):
                                            ?>
                                            <li><a href="<?php echo Yii::app()->createUrl('category/view/', array('id' => $row->id)) ?>"><?php echo $row->name ?></a></li>
                                        <?php endforeach; ?>
                                        <li class="divider"></li>
                                        <li><a>ดูทั้งหมด...</a></li>
                                    </ul>
                                </li>-->

                            </ul>

                            <!-- Right Nav Section -->
                            <ul class="right">
                                <li class="has-dropdown"><a href="<?php echo Yii::app()->createUrl('about_us/') ?>">เกี่ยวกับเรา</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo Yii::app()->createUrl('contact_us/') ?>">ติดต่อทีมงาน</a></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('user_guide/') ?>">คำแนะนำการใช้งาน</a></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('faq/') ?>">คำถามที่พบบ่อย</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('contact_adv/') ?>">ติดต่อลงโฆษณา</a></li>
                                    </ul>
                                </li>
                                <li class="has-form">
                                  <?php $this->widget('ext.esearch.SearchBoxPortlet',array('id'=>'searchform'));?>  
                                    
                                    
                                </li>
                            </ul>
                        </section>
                    </nav>
                </div>
            </div>

            <?php echo $content ?>

        </div>
        <footer class="row" >
            <div class="large-12 columns" style="background-color:#ffffff; margin-bottom:20px; border-radius:0 0 8px 8px; ">
                <div class="row">
                    <div class="small-12 large-4 columns">
                        <img src="<?php echo $baseUrl . '/' ?>images/logo-02.png" />
                    </div>
                    <div class="small-12 large-8 columns">
                        <div class="row">
                            <div class="small-6 large-4 columns">
                                <ul class="footer_list_post" style="padding-left:10px;">
                                    <li class="notype">ข้อมูลเว็บไซต์</li>
                                    <li><a href="<?php echo Yii::app()->createUrl('about_us/') ?>">เกี่ยวกับเรา</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('contact_us/') ?>">ติดต่อ</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('contact_adv/') ?>">ลงโฆษณา</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('policy/') ?>">นโยบาย</a></li>
                                </ul>
                            </div>
                            <div class="small-6 large-4 columns">
                                <ul class="footer_list_post" style="padding-left:10px;">
                                    <li class="notype">เงื่อนไขการใช้บริการ</li>
                                    <li><a href="<?php echo Yii::app()->createUrl('user_guide/') ?>">คำแนะนำการใช้งาน</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('faq/') ?>">คำถามที่พบบ่อย</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('more_infomation/') ?>">ข้อมูลเพิ่มเติม</a></li>
                                </ul>
                            </div>
                            <div class="small-12 large-4 columns">
                                <span>
                                    <a href="#"><img src="<?php echo $baseUrl . '/' ?>images/facebook.png"/></a> 
                                    <a href="#"><img src="<?php echo $baseUrl . '/' ?>images/twitter.png"/></a> 					
                                    <a href="#"><img src="<?php echo $baseUrl . '/' ?>images/google.png"/></a>
                                    <a href="#"><img src="<?php echo $baseUrl . '/' ?>images/email.png"/></a>
                                    <a href="#"><img src="<?php echo $baseUrl . '/' ?>images/feed.png"/></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 large-12 columns">
                        <p style="margin-bottom:-30px;text-align:center;font-size:1.151em;font-family: thaisanslite_r1; font-weight:bold;">Copyright &copy; 2013 <a href="#">SmileTravel.in.th</a> | All right reserved. Develop by <em>BuuScript-Team</em>. </p>
						
                        <p style="text-align:center;margin:-65px 0;">
							<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="free statistics" ><script  type="text/javascript" >
try {Histats.start(1,2380998,4,238,241,20,"00010101");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2380998&101" alt="free statistics" border="0"></a></noscript>
<!-- Histats.com  END  -->
						</p>
                        <p style="margin-top:-30px;text-align:center;font-size:1.151em;font-family: thaisanslite_r1; font-weight:bold;">Page Load Time : <?php echo Yii::getLogger()->getExecutionTime()?> s</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
<script>
    document.write('<script src=<?php echo $baseUrl ?>/js/vendor/' +
        ('__proto__' in {} ? 'zepto' : 'jquery') +
        '.js><\/script>')
</script>
<?php
$cs->registerScriptFile($baseUrl . '/js/foundation.min.js');
//        $cs->registerScriptFile($baseUrl . '/js/docs.js');
?>

<script>
    $(document).foundation();
</script>
