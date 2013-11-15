<?php
/* @var $this Contact_usController */
$this->pageTitle = Yii::app()->name . ' ' . $model->name;
$this->breadcrumbs = array(
    $model->name 
);
?>
<div class="row">
    <div class="small-12 large-12 columns">
        <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'homeLink' => ' <a  href="' . Yii::app()->getBaseUrl(true) . '">หน้าแรก</a>',
                'tagName' => 'div',
                'links' => $this->breadcrumbs,
                'htmlOptions' => array('class' => 'menu breadcrumbs'),
                'inactiveLinkTemplate' => '<a  class="current">{label}</a>',
                'separator' => ''
            ));
            ?><!-- breadcrumbs -->
        <?php endif ?>
        <!--        <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li class="unavailable"><a href="#">Gene Splicing</a></li>
                    <li class="current"><a href="#">Cloning</a></li>
                </ul>-->
    </div>

    <!--  article  -->
    <article>
        <div class="small-12 large-12 columns">
            <h1 class="title_post"><?php echo $model->name ?></h1>
            

            <div class="row" style="margin-top:10px;">
                <div class="large-12 columns">
                    <?php echo $model->content ?>					
                </div>
            </div>

           

        </div>
    </article>
    <!--  article  -->

</div>
