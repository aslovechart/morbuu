<?php

    /**
     * Controller is the customized base controller class.
     * All controller classes for this application should extend from this base class.
     */
    class Controller extends CController {

        /**
         * @var string the default layout for the controller view. Defaults to '//layouts/column1',
         * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
         */
        public $layout = '//layouts/column1';

        /**
         * @var array context menu items. This property will be assigned to {@link CMenu::items}.
         */
        public $menu = array();

        /**
         * @var array the breadcrumbs of the current page. The value of this property will
         * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
         * for more details on how to specify this property.
         */
        public $breadcrumbs = array();

        public function __construct($id, $module = null) {
            parent::__construct($id, $module);
            // Set theme
            Yii::app()->theme = 'ace';

            //Set page Title
            $name = str_replace('_', ' ', ucfirst(basename($this->getId())));
            if ($this->getAction() !== null && strcasecmp($this->getAction()->getId(), $this->defaultAction))
                $pageTitle = Yii::app()->name . ' - ' . ucfirst($this->getAction()->getId()) . ' ' . $name;
            else
                $pageTitle = Yii::app()->name . ' - ' . $name;
            $this->setPageTitle($pageTitle);
        }

        public function filters() {
            return array(
                    'accessControl', // perform access control for CRUD operations
                    'postOnly + delete', // we only allow deletion via POST request
            );
        }

        public function accessRules() {
            return array(
                    array('allow', // allow authenticated users to access all actions
                            'users' => array('@'),
                    ),
                    array('deny'),
            );
        }

    }

    