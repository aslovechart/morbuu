<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />



        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php Yii::app()->bootstrap->register(); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/styles.css" />
    </head>

    <body>

        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'brandUrl' => Yii::app()->getBaseUrl(true),
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => 'Home', 'icon' => 'home white', 'url' => array('/myadmin/')),
                        array('label' => 'Articles', 'icon' => 'icon-bullhorn icon-white', 'url' => array('/site/page', 'view' => 'about'),
                            'items' => array(
                                array('label' => 'เที่ยวทั่วไทย', 'url' => array('/article/travel_around_thailand/')),
                                array('label' => 'รีวิว บทความ', 'url' => array('/article/review_article/')),
                                array('label' => 'กิจกรรมดีๆ', 'url' => array('/article/activity/'),),
                        )),

                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Settings', 'icon' => 'cog white', 'url' => '#',
                            'items' => array(
                                array('label' => 'Pages', 'url' => array('/article/page/')),
                                array('label' => 'Category', 'url' => array('/article/category/')),
                                '---',
                                array('label' => 'Members', 'url' => array('/member/user/')),
                                array('label' => 'Member Groups', 'url' => array('/member/userGroup/')),
                                array('label' => 'Controller System', 'url' => array('/member/control/')),
                                '---',
                                array('label' => 'Facebook Like Button', 'url' => '#'),
                                array('label' => 'Facebook FanPage', 'url' => '#'),
                                '---',
                                array('label' => 'Standard Website', 'url' => '#'),
                            )
                        ),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'icon' => 'icon-off icon-white', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ),
            ),
        ));
        ?>

        <div class="container" id="page">

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'homeLink' => CHtml::link('Home', Yii::app()->createUrl('myadmin')),
                    'links' => $this->breadcrumbs,
                    'separator' => '→',
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>


            <div class="clear"></div>
            <hr>

                <footer>

                    <div id="footer">
                        Copyright &copy; <?php echo date('Y'); ?> by Buuscript.<br/>
                        All Rights Reserved.<br/>

                    </div><!-- footer -->
                </footer>

        </div><!-- page -->
        <script>
            $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
        </script>
        <?php
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/bootstrap_switch/js/bootstrap-switch.js');
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/bootstrap_switch/stylesheets/bootstrap-switch.css');
        ?>
    </body>
</html>
