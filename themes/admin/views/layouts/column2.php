<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span9">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span3">
        <div id="sidebar" >
            <div class="well" style="padding: 8px 0;">
                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title' => '<h4>&nbsp;&nbsp;Operations</h4>',
                ));
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'type' => 'list',
                    'items' => $this->menu,
                    'htmlOptions' => array('class' => 'operations'),
                ));
                $this->endWidget();
                ?>
            </div>
            <div class="well" style="padding: 8px 0;">
                <?php
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'type' => 'list',
                    'items' => array(
//                        array('label' => 'LIST HEADER'),
//                        array('label' => 'Home', 'icon' => 'home', 'url' => array('/admin/'), 'active' => Yii::app()->controller->module->id == 'admin'),
//                        array('label' => 'Library', 'icon' => 'book', 'url' => '#'),
//                        array('label' => 'Application', 'icon' => 'pencil', 'url' => '#'),
                        array('label' => 'จัดการบทความ'),
//                        array('label' => 'ข่าวทั่วไป', 'icon' => 'icon-chevron-right', 'url' =>  array('/article/news/'), 'active' => Yii::app()->controller->id == 'news'),
                        array('label' => 'เที่ยวทั่วไทย', 'icon' => 'icon-chevron-right', 'url' => array('/article/travel_around_thailand/'), 'active' => Yii::app()->controller->id == 'travel_around_thailand'),
                        array('label' => 'รีวิว-บทความ', 'icon' => 'icon-chevron-right', 'url' => array('/article/review_article/'), 'active' => Yii::app()->controller->id == 'review_article'),
                        array('label' => 'กิจกรรมดีๆ', 'icon' => 'icon-chevron-right',  'url' => array('/article/activity/'), 'active' => Yii::app()->controller->id == 'activity'),                        
//                        array('label' => 'สถานที่เที่ยวยอดฮิต', 'icon' => 'icon-chevron-right', 'url' => '#'),
//                        array('label' => 'ร้านอาหาร เค้ก กาแฟ', 'icon' => 'icon-chevron-right', 'url' => '#'),
//                        array('label' => 'แหล่งท่องเที่ยว', 'icon' => 'icon-chevron-right', 'url' => '#'),
//                        array('label' => 'ที่พักแนะนำ', 'icon' => 'icon-chevron-right', 'url' => '#'),
//                        array('label' => 'โปรโมชั่นพิเศษ', 'icon' => 'icon-chevron-right', 'url' => '#'),
//                        array('label' => 'ทริป เทคนิค', 'icon' => 'icon-chevron-right', 'url' => '#'),
                        array('label' => 'สถานที่เที่ยวยอดฮิต', 'icon' => 'icon-chevron-right', 'url' => array('/article/place_hit/'), 'active' => Yii::app()->controller->id == 'place_hit'),
                        
                        array('label' => 'จัดการสมาชิก'),
                        array('label' => 'สมาชิก', 'icon' => 'user', 'url' => array('/member/user/'), 'active' => Yii::app()->controller->id == 'user'),
                        array('label' => 'กลุ่มสมาชิก', 'icon' => 'icon-indent-left', 'url' => array('/member/userGroup/'), 'active' => Yii::app()->controller->id == 'userGroup'),
                        array('label' => 'Controller System', 'icon' => 'icon-th', 'url' => array('/member/control/'), 'active' => Yii::app()->controller->id == 'control'),
                        array('label' => 'ANOTHER LIST HEADER'),
                        array('label' => 'Profile', 'icon' => 'user', 'url' => '#'),
                        array('label' => 'Settings', 'icon' => 'cog', 'url' => '#'),
                        array('label' => 'Help', 'icon' => 'flag', 'url' => '#'),
                        array('label' => 'ADMIN SETTING'),
                        array('label' => 'Category', 'icon' => 'user', 'url' => array('/article/category/'), 'active' => Yii::app()->controller->id == 'category'),
                    ),
                ));
                ?>
            </div>

        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>