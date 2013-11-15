<?php
$this->pageTitle = Yii::app()->name . ' - Search "'.CHtml::encode($query).'"' ;
?>
<div class="header-grid-content-blue"><h3 class="grid-title"><?php echo Yii::t('app', 'ผลการค้นหา "{query}"', array('{query}'=>CHtml::encode($query))) ?></h3></div>
<?php if($dataProvider): ?>


	<?php $this->widget($widget, CMap::mergeArray(array(
		'dataProvider'=>$dataProvider,
		'itemView'=>$this->action->getResultView(),
	), $widgetParams)); ?>
<?php else: ?>
	<?php echo Yii::t('app', 'No results found.'); ?>
<?php endif ?>