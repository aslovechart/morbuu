<?php

class CategoryController extends Controller {

    public $layout = '//layouts/column3';

//    public function actionIndex() {
//        $this->render('index');
//    }

    public function actionView($id) {
        $model = Category::model()->findByPK($id);
        if (!$model->category_id) {
            throw new CHttpException('ไม่พบข้อมูล');
        }


        $criteria = new CDbCriteria();
        $criteria->condition = "category_id =" . $model->id . " and active = 1 and status = 1 and UNIX_TIMESTAMP(set_time_show) < " . strtotime(date('Y-m-d'));
        $criteria->order = 'set_time_show desc,id desc';
        $item_count = Article::model()->count($criteria);
        $type = 2;
//        if ($model->category_id == 1) {
//            $this->layout = '//layouts/column2';
//            $type = 1;
//        }
        $pages = new CPagination($item_count);
        $pages->setPageSize($this->page);
        $pages->applyLimit($criteria);
        $this->render('view', array(
            'model' => $model,
            'article' => Article::model()->findAll($criteria),
            'item_count' => $item_count,
            'page_size' => $this->page,
            'items_count' => $item_count,
            'pages' => $pages,
            'type' => $type));
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