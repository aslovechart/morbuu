<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php $baseUrl = Yii::app()->theme->baseUrl . '/'; ?>
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->

        <link href="<?php echo $baseUrl ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo $baseUrl ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!--page specific plugin styles-->

        <!--fonts-->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

        <!--ace styles-->

        <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/ace-skins.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/ace-ie.min.css" />
        <![endif]-->
        <?php Yii::app()->bootstrap->register(); ?>
        <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a href="<?php echo Yii::app()->createUrl('/myadmin') ?>" class="brand">
                        <small>
                            <i class="icon-laptop"></i>
                            Admin 
                        </small>
                    </a><!--/.brand-->

                    <ul class="nav ace-nav pull-right">
                        <li class="grey">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-tasks"></i>
                                <span class="badge badge-grey">4</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-ok"></i>
                                    4 Tasks to complete
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:65%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Hardware Upgrade</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-mini progress-danger">
                                            <div style="width:35%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Unit Testing</span>
                                            <span class="pull-right">15%</span>
                                        </div>

                                        <div class="progress progress-mini progress-warning">
                                            <div style="width:15%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-success progress-striped active">
                                            <div style="width:90%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See tasks with details
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>

                            <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-warning-sign"></i>
                                    8 Notifications
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-pink icon-comment"></i>
                                                New Comments
                                            </span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-mini btn-primary icon-user"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
                                                New Orders
                                            </span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-info icon-twitter"></i>
                                                Followers
                                            </span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See all notifications
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="green">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-envelope-alt"></i>
                                    5 Messages
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Alex:</span>
                                                Ciao sociis natoque penatibus et auctor ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Susan:</span>
                                                Vestibulum id ligula porta felis euismod ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>20 minutes ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Bob:</span>
                                                Nullam quis risus eget urna mollis ornare ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>3:15 pm</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See all messages
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    Jason
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!--/.ace-nav-->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>
        <div class="main-container container-fluid">
            <a class="menu-toggler" id="menu-toggler" href="#">
                <span class="menu-text"></span>
            </a>

            <div class="sidebar" id="sidebar">
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-small btn-success">
                            <i class="icon-signal"></i>
                        </button>

                        <button class="btn btn-small btn-info">
                            <i class="icon-pencil"></i>
                        </button>

                        <button class="btn btn-small btn-warning">
                            <i class="icon-group"></i>
                        </button>

                        <button class="btn btn-small btn-danger">
                            <i class="icon-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div>
                <?php
                    $controller_name = Yii::app()->controller->id;
                    $module_name = Yii::app()->controller->module->id;
                    $this->widget('zii.widgets.CMenu', array(
                            'encodeLabel' => false,
                            'items' => array(
                                    array('label' => '<i class="icon-dashboard"></i> Dashboard', 'icon' => 'icon-dashboard', 'url' => Yii::app()->createUrl('/myadmin'), 'active' => $controller_name == 'myadmin'),
                                    array('label' => '<i class="icon-edit"></i> Articles <b class="arrow icon-angle-down"></b>', 'url' => '#',
                                            'submenuOptions' => array('class' => 'submenu'),
                                            'items' => array(
                                                    array('label' => 'Talk of the town', 'url' => array('/article/talk_of_the_town/'), 'active' => $controller_name == 'talk_of_the_town'),
                                                    array('label' => 'News', 'url' => array('/article/news/'), 'active' => $controller_name == 'news'),
                                                    array('label' => 'Activity', 'url' => array('/article/activity/'), 'active' => $controller_name == 'activity'),
                                                    array('label' => 'Phone & Mobile*', 'url' => array('/article/mobile/'), 'active' => $controller_name == 'mobile'),
                                                    array('label' => 'Travel around thailand*', 'url' => array('/article/travel_around_thailand/'), 'active' => $controller_name == 'travel_around_thailand'),
                                            ),
                                            'linkOptions' => array('class' => 'dropdown-toggle'),
                                            'itemOptions' => array('class' => $module_name == 'article' ? 'open' : ''),
                                            'active' => $module_name == 'article'
                                    ),
                                    array('label' => '<i class="icon-group"></i> Manage User <b class="arrow icon-angle-down"></b>', 'url' => '#',
                                            'submenuOptions' => array('class' => 'submenu'),
                                            'items' => array(
                                                    array('label' => 'Users', 'url' => array('/member/user/'), 'active' => $controller_name == 'user'),
                                                    array('label' => 'User Groups', 'url' => array('/member/userGroup/'), 'active' => $controller_name == 'userGroup'),
                                            ),
                                            'linkOptions' => array('class' => 'dropdown-toggle'),
                                            'itemOptions' => array('class' => $module_name == 'member' ? 'open' : ''),
                                            'active' => $module_name == 'member'
                                    ),
                                    array('label' => '<i class="icon-cog"></i> Setting <b class="arrow icon-angle-down"></b>', 'url' => '#',
                                            'submenuOptions' => array('class' => 'submenu'),
                                            'items' => array(
                                                    array('label' => 'Page Default', 'url' => array('/setting/page/'), 'active' => $controller_name == 'page'),
                                                    array('label' => 'Categories', 'url' => array('/setting/category/'), 'active' => $controller_name == 'category'),
                                            ),
                                            'linkOptions' => array('class' => 'dropdown-toggle'),
                                            'itemOptions' => array('class' => $module_name == 'setting' ? 'open' : ''),
                                            'active' => $module_name == 'setting'
                                    ),
                                    array('label' => 'Login', 'url' => array('site/login'), 'visible' => Yii::app()->user->isGuest),
                            ),
                            'htmlOptions' => array('class' => 'nav nav-list'),
                    ));
                ?>


                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="icon-double-angle-left"></i>
                </div>
            </div>

            <div class="main-content">
                <div class="breadcrumbs" id="breadcrumbs">
<?php if (isset($this->breadcrumbs)): ?>
        <?php
        $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                'homeLink' => '<i class="icon-dashboard"></i>' . CHtml::link('Dashboard', Yii::app()->createUrl('myadmin')),
                'links' => $this->breadcrumbs,
                'separator' => '<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>',
        ));
        ?><!-- breadcrumbs -->
                        <?php endif ?>

                    <div class="nav-search" id="nav-search">
                    <?php
                        $this->widget('bootstrap.widgets.TbMenu', array(
                                'type' => 'pills ',
                                'items' => $this->menu,
                                // 'htmlOptions' => array('class' => 'nav nav-pills'),
                        ));
                    ?>
                    </div><!--#nav-search-->
                </div>

                <div class="page-content">                   
                    <div class="row-fluid">
                        <div class="span12">
<?php echo $content; ?>
                        </div>
                    </div><!--/.row-fluid-->
                </div><!--/.page-content-->


            </div><!--/.main-content-->
        </div><!--/.main-container-->    






        <script src="<?php echo $baseUrl ?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo $baseUrl ?>assets/js/ace.min.js"></script>
    </body>

</html>