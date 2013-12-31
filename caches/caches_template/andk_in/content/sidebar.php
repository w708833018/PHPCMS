<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- Sidebar -->
<aside class="uk-hidden-small">
	<div id="sidebar">
	<section class="search">
		<div class="bd">
			<form class="uk-search" data-uk-search action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
				<input type="hidden" name="m" value="search"/>
				<input type="hidden" name="c" value="index"/>
				<input type="hidden" name="a" value="init"/>
				<input type="hidden" name="typeid" value="1" id="typeid"/>
				<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
				<input class="uk-search-field" type="text" name="q" placeholder="输入要搜索的关键字...">
				<button class="uk-search-close" type="reset"></button>
				<input type="submit" class="uk-button" id="searchsubmit" value="搜索">
			</form>
		</div>
		<div class="uk-clearfix"></div>
	</section>
	<!-- 站内搜索 -->
	<section class="social box1">
		<div class="hd"><h3>关注我们</h3></div>
		<div class="uk-grid">
			<div class="uk-width-1-3">
				<a href="javascript:void(0)" onclick="window.open('http://weibo.com/andkin')" class="x" target="_blank" rel="nofollow">
					<i class="uk-icon-weibo uk-icon-large"></i>
				</a>
				<span>新浪微博</span>
			</div>
			<div class="uk-width-1-3">
				<a href="#qrcode" data-uk-modal class="t">
					<i class="uk-icon-comments uk-icon-large"></i>
				</a>
				<span>微信订阅</span>
			</div>
			<div class="uk-width-1-3">
				<a href="javascript:void(0)" onclick="window.open('http://list.qq.com/cgi-bin/qf_invite?id=7fbe96fb841a59ac238168d68cbc82de3dae756e32ef1084')" class="r" target="_blank" rel="nofollow">
					<i class="uk-icon-rss uk-icon-large"></i>
				</a>
				<span>订阅邮件</span>
			</div>
		</div>
	</section>
	<div id="qrcode" class="uk-modal">
		<div class="uk-modal-dialog uk-modal-dialog-frameless" style="width:344px;margin-left:-172px;">
			<a href="" class="uk-modal-close uk-close uk-close-alt"></a>
			<img src="<?php echo siteurl($siteid);?>/assets/images/getqrcode.jpg" alt="安妮导刊微信二维码">
		</div>
	</div>
	<!-- 关注我们 -->
	<?php if(!$catid) { ?>
	<section class="weibo box2" style="margin-bottom:0;">
		<div class="hd"><h3>新浪微博</h3></div>
		<div class="bd">
			<iframe width="100%" height="620" class="share_self" frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=640&fansRow=2&ptype=0&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=3238242123&verifier=fb1431d2&dpc=1"></iframe>
		</div>
	</section>
	<!-- 新浪微博 -->
	<?php } ?>
	</div>
</aside>
<!-- / Sidebar -->