<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span12">
        <div id="content">

            <?php
            $this->widget('bootstrap.widgets.TbMenu', array(
                'type' => 'pills',
                'items' => $this->menu,
                'stacked' => false,
            ));
            ?>

            <?php echo $content; ?>
        </div><!-- content -->
    </div>
</div>
<?php $this->endContent(); ?>