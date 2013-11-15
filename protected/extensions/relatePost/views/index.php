<?php
/* @var $model Article */
?>
<!--  Other posts  -->
<div class="row">
    <div class="small-12 large-12 columns">
        <div class="header-grid-content-blue"><h3 class="grid-title">Relate posts</h3></div>
    </div>
    <div class="small-12 large-12 columns">
		<div style="padding-bottom:10px;">	
			<ul class="side-nav" style="padding:0 5px;">
				<?php foreach ($model as $row): ?>
					<li style="border-bottom:1px dotted #999;padding:5px;">
						<span style="float:left; margin-top:3px; margin-right:10px" class="label radius"><?php echo date('d M Y', strtotime($row->set_time_show)) ?></span>
						<a href="<?php echo Yii::app()->createUrl('/'.$row->id.'-'.$row->url_rewrite) ?>"><?php echo $row->name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>						
		</div>
	</div>
</div>
<!--  Other posts  -->