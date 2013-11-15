<?php
/**  @var $this Controller */
$baseUrl = Yii::app()->theme->baseUrl . '/assets/';
?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="small-12 large-12 columns" style="border-bottom:5px solid #EFEFEF;">
    <div class="row">
        <div class="small-12 large-2 columns">
            <!-- Sidebar-Left Banner Ads 160x600 -->
<p>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- smiletravel_160_600 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-0764508351380077"
     data-ad-slot="4438803127"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</p>

        </div>
        <div class="small-12 large-7 columns">
            <?php echo $content; ?>
        </div>
        <div class="small-12 large-3 columns">
            <!-- Sidebar Banner Ads 300x250 -->
<p>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- smiletravel_200_200 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:200px;height:200px"
     data-ad-client="ca-pub-0764508351380077"
     data-ad-slot="1345735925"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</p>

            <div class="row" style="padding-bottom:15px;">
                <div class="small-12 large-12 columns">
                    <?php $this->widget('ext.lastPost.LastPost'); ?>
                </div>	

                <div class="small-12 large-12 columns">
                    <?php $this->widget('ext.top5Most.Top5Most'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endContent(); ?>