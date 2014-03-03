<?php

class UserGroupController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new UserGroup;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['UserGroup'])) {
            $model->attributes = $_POST['UserGroup'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Save Data Success.');
                $this->redirect(array('index'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['UserGroup'])) {
            $model->attributes = $_POST['UserGroup'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Save Data Success.');
                $this->redirect(array('index'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $model = $this->loadModel($id);
        $model->setAttribute('active', 0);
        $model->save();
        Yii::app()->user->setFlash('success', 'Delete Data Success.');
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new UserGroup('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['UserGroup']))
            $model->attributes = $_GET['UserGroup'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionPermission($id) {
        $model = $this->loadModel($id);

        if (isset($_POST['controller_id'])) {
            $relate = array();
            foreach ($_POST['controller_id'] as $key) {
                $relate[] = array(
                    'controller_id' => $key,
                    'action_index' => intval(@$_POST['index'][$key]),
                    'action_create' => intval(@$_POST['create'][$key]),
                    'action_update' => intval(@$_POST['update'][$key]),
                    'action_delete' => intval(@$_POST['delete'][$key]),
                );
            }
            $model->permissions = $relate;
            $model->saveWithRelated('permissions');
            Yii::app()->user->setFlash('success', 'Save Permission Success.');
            $this->refresh();
        }
        $this->render('permission', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return UserGroup the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = UserGroup::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param UserGroup $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-group-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
