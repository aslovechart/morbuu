<?php

class CategoryController extends Controller {

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
        $model = new Category;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Category'])) {
            $model->attributes = $_POST['Category'];
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

        if (isset($_POST['Category'])) {
            $model->attributes = $_POST['Category'];
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
        $model->setAttribute('status', 0);
        $model->save();
        Yii::app()->user->setFlash('success', 'Delete Data Success.');
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new Category('search');
        $model->unsetAttributes();  // clear any default values
        $model->setAttribute('category_id', NULL);
        if (isset($_GET['Category']))
            $model->attributes = $_GET['Category'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Category the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Category::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Category $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'category-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionSub($id) {
        $model = new Category('search');
        $model->unsetAttributes();  // clear any default values
        $model->setAttribute('category_id', $id);
        if (isset($_GET['Category']))
            $model->attributes = $_GET['Category'];

        $this->render('admin_sub', array(
            'model' => $model,
            'id' => $id
        ));
    }

    public function actionCreate_sub($id) {
        $model = new Category;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Category'])) {
            $model->attributes = $_POST['Category'];
            $model->setAttribute('category_id', $id);
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Save Data Success.');
                $this->redirect(array('sub', 'id' => $id));
            }
        }

        $this->render('create_sub', array(
            'model' => $model,
            'id' => $id
        ));
    }

    public function actionUpdate_sub($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Category'])) {
            $model->attributes = $_POST['Category'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Save Data Success.');
                $this->redirect(array('sub', 'id' => $model->category_id));
            }
        }

        $this->render('update_sub', array(
            'model' => $model,
            'id' => $model->category_id
        ));
    }

    public function actionDelete_sub($id) {
        $model = $this->loadModel($id);
        $model->setAttribute('status', 0);
        $model->save();
        Yii::app()->user->setFlash('success', 'Delete Data Success.');
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('sub'));
    }

}
