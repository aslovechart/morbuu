<?php

class LoginController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            'oauth' => array(
                // the list of additional properties of this action is below
                'class' => 'ext.hoauth.HOAuthAction',
                // Yii alias for your user's model, or simply class name, when it already on yii's import path
                // default value of this property is: User
                'model' => 'User',
                // map model attributes to attributes of user's social profile
                // model attribute => profile attribute
                // the list of avaible attributes is below
                'attributes' => array(
                    'email' => 'email',
                    'fname' => 'firstName',
                    'lname' => 'lastName',
                    'gender' => 'genderShort',
                    'birthday' => 'birthDate',
                    // you can also specify additional values, 
                    // that will be applied to your model (eg. account activation status)
                    'acc_status' => 1,
                ),
            ),
            // this is an admin action that will help you to configure HybridAuth 
            // (you must delete this action, when you'll be ready with configuration, or 
            // specify rules for admin role. User shouldn't have access to this action!)
            'oauthadmin' => array(
                'class' => 'ext.hoauth.HOAuthAdminAction',
            ),
        );
    }

    public function actionIndex() {
        $this->render('index');
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}