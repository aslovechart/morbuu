<!DOCTYPE html>
<html>
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta charset="UTF-8"/>
        <meta name="keywords" content="ใส่คำสำคัญ"/>
        <meta name="description" content="ใส่เนื้อหาเกี่ยวกับเว็บไซต์"/>
        <meta name="author" content="Nutchapon Seelathon ,Supakorn Tatong ,Apichart Khairavi"/>

        <?php
            $baseUrl = Yii::app()->theme->baseUrl . '/assets/';
            $cs = Yii::app()->getClientScript();
            $cs->registerCssFile($baseUrl . 'stylesheets/normalize.css');
            $cs->registerCssFile($baseUrl . 'stylesheets/global.css');
            $cs->registerCssFile($baseUrl . 'javascripts/jquery-ui-1.10.3.custom.css');


            Yii::app()->clientScript->registerCoreScript('jquery');
            $cs->registerScriptFile($baseUrl . 'javascripts/jquery-ui-1.10.3.custom.min.js');
        ?>        
        <!--        <link href="stylesheets/normalize.css" rel="stylesheet" type="text/css"/>
                <link href="stylesheets/global.css" rel="stylesheet" type="text/css"/>
                <link href="javascripts/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css"/>
                <script type="text/javascript" src="javascripts/jquery-2.0.3.min.js"></script>
                <script type="text/javascript" src="javascripts/jquery-ui-1.10.3.custom.min.js"></script>-->
    </head>
    <body id="morbuu">
        <div class="topbar">
            <nav class="center clearfix">
                <article class="col_6">
                    <p>morbuu.com แสดงผลได้ดีกับ Google Chrome , Safari , Firefox , Internet Explorer 9+</p>
                </article>
                <ul class="col_6 clearfix">
                    <li><a href="home.php?module=about" target="_blank">ติดต่อเรา</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">ทดสอบความเร็ว Internet</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">ดาวน์โหลด Google Chrome</a></li>
                    <li><a href="#" target="_blank">หน้าแรก</a></li>
                </ul>
            </nav>
        </div>
        <div class="center">
            <!--Header-->
            <header class="header clearfix">
                <div class="col_4">
                    <a href="<?php echo  Yii::app()->getBaseUrl(true)?>" class="logo"><img src="<?php echo $baseUrl ?>images/logo.png"/></a>
                </div>
                <div class="col_8">
                    <div class="bn">
                        <!-- Banner 728 x 90 -->
                    </div>
                </div>
            </header>
            <!--Menu-->
            <nav class="menu sh rd">
                <ul class="clearfix">
                    <li>
                        <a href="<?php echo  Yii::app()->getBaseUrl(true)?>">
                            <p class="th font">หน้าแรก</p>
                            <p class="en">homepage</p>
                        </a>
                    </li>
                    <li>
                        <a href="home.php?page=article/all-article">
                            <p class="th font">สาวน้อย Buu</p>
                            <p class="en">buu girls</p>
                        </a>
                    </li>
                    <li>
                        <a href="home.php?page=article/all-article">
                            <p class="th font">เมาท์สนั่นมอ</p>
                            <p class="en">talk of the town</p>
                        </a>
                    </li>
                    <li>
                        <a href="home.php?page=article/all-article">
                            <p class="th font">ร้านน่ากิน</p>
                            <p class="en">restaurant</p>
                        </a>
                    </li>
                    <li>
                        <a href="home.php?page=article/all-article">
                            <p class="th font">ที่พักรอบมอ</p>
                            <p class="en">apartment flat</p>
                        </a>
                    </li>
                    <li>
                        <a href="home.php?page=article/all-article">
                            <p class="th font">เที่ยวรอบมอ</p>
                            <p class="en">around buu</p>
                        </a>
                    </li>
                    <li>
                        <a href="home.php?page=article/all-article">
                            <p class="th font">วีดีโอ</p>
                            <p class="en">video</p>
                        </a>
                    </li>
                    <li>
                        <a href="home.php?page=article/all-article">
                            <p class="th font">ดูดวง</p>
                            <p class="en">horoscope</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!--Event-->
            <section class="event clearfix">
                <article class="rd sh">
                    <span><img src="<?php echo $baseUrl ?>images/girl_01.png"/></span>
                    <p class="font">กิจกรรมใหม่ๆ ล่าสุดๆ</p>
                    <p class="font">เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่</p>
                </article>
                <a class="link rd sh" href="#">
                    <p>Click Here.</p>
                    <p class="font">อ่านรายละเอียดเพิ่มเติม</p>
                </a>
            </section>
            <?PHP
                echo $content;
            ?>
            <!--Footer-->
            <footer class="bx footer">
                <article>
                    <p>Copyright &copy; 2012 <a href="#">morbuu.com</a> All rights reserved. Do not duplicate or redistribute in any form.</p>
                    <p>เว็บไซต์นี้ไม่มีส่วนเกี่ยวข้องใดๆทั้งสิ้นกับส่วนราชการมหาวิทยาลัยบูรพาฯ เป็นเพียงเว็บไซต์สำหรับนิสิต นักศึกษาและบุคคลทั่วไปเท่านั้น <a href="#">ติดต่อทีมงาน</a></p>
                </article>
            </footer>
        </div>
    </body>
</html>