<?php

    class Talk_of_the_townController extends Controller {

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
            $model = new Article;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['Article'])) {
                
                $model->attributes = $_POST['Article'];
                $model->setAttribute('category_id', 2);
                $model->setAttribute('user_id', Yii::app()->user->id);
                if ($model->save()) {
                    $relate = array();
                    $arr_tag = explode(',', $_POST['Article']['tag']);
                    if (is_array($arr_tag)) {
                        foreach ($arr_tag as $tag) {
                            $relate[] = array('name' => trim($tag));
                        }
                    }
                    $model->tags = $relate;
                    $model->saveWithRelated('tags');
                    Yii::app()->user->setFlash('success', 'Save Data Success.');
                    $this->redirect(array('index'));
                }
            }
            if (!$model->set_time_show)
                $model->setAttribute('set_time_show', date('Y-m-d'));

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

            if (isset($_POST['Article'])) {
                $model->attributes = $_POST['Article'];

                if ($model->save()) {
                    $relate = array();
                    $arr_tag = explode(',', $_POST['Article']['tag']);
                    if (is_array($arr_tag)) {
                        foreach ($arr_tag as $tag) {
                            if (trim($tag))
                                $relate[] = array('name' => trim($tag));
                        }
                    }

                    $model->tags = $relate;
                    $model->saveWithRelated('tags');
                    Yii::app()->user->setFlash('success', 'Save Data Success.');
                    $this->redirect(array('index'));
                }
            }
            $arr_tag = CHtml::listData($model->tags, 'id', 'name');
            $model->setAttribute('tag', implode(',', $arr_tag));
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
            $model = new Article('search');
            $model->unsetAttributes();  // clear any default values
            if (isset($_GET['Article']))
                $model->attributes = $_GET['Article'];
            $model->setAttribute('category_id', array(2));
            $this->render('admin', array(
                    'model' => $model,
            ));
        }

        /**
         * Returns the data model based on the primary key given in the GET variable.
         * If the data model is not found, an HTTP exception will be raised.
         * @param integer $id the ID of the model to be loaded
         * @return Article the loaded model
         * @throws CHttpException
         */
        public function loadModel($id) {
            $model = Article::model()->findByPk($id);
            if ($model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
            return $model;
        }

        /**
         * Performs the AJAX validation.
         * @param Article $model the model to be validated
         */
        protected function performAjaxValidation($model) {
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'article-form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
        }

    }

    