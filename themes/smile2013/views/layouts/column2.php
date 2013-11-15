<?php /**  @var $this Controller */
$baseUrl = Yii::app()->theme->baseUrl . '/assets/';
?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="small-12 large-12 columns" style="border-bottom:5px solid #EFEFEF;">
    <div class="row">
        <div class="small-12 large-8 columns">
            <?php echo $content; ?>
        </div>
        <div class="small-12 large-4 columns">
            <!-- Sidebar Banner Ads 300x250 -->
<p>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- smiletravel_300_250 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-0764508351380077"
     data-ad-slot="7392269522"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</p>

            <div class="row" style="padding-bottom:15px;">
				<div class="small-12 large-12 columns">
					<div class="header-grid-content"><h3 class="grid-title">Facebook Fanpage</h3></div>
					<div class="fb-like-box" data-href="http://www.facebook.com/pages/Smiletravel/146446642190429" data-width="300" data-height="420" data-show-faces="true" data-stream="false" data-header="false"></div>
				</div>
			
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