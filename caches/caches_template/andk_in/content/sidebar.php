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
	<section class="box1">
		<div class="hd">
			<h3>本周热门阅读</h3>
		</div>
		<div class="bd">
			<ul class="uk-list uk-list-striped">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=19653da1d27b1fe49bd8d33951a4fbc1&sql=SELECT+h.%60weekviews%60%2Cn.%60title%60%2Cn.%60url%60%2Cn.%60style%60+FROM+%60v9_hits%60+AS+h%2C%60v9_news%60+AS+n+WHERE+substring_index%28h.%60hitsid%60%2C+%27-%27%2C+-1%29%3Dn.%60id%60+AND+n.%60status%60%3D99+ORDER+BY+h.%60weekviews%60+DESC&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT h.`weekviews`,n.`title`,n.`url`,n.`style` FROM `v9_hits` AS h,`v9_news` AS n WHERE substring_index(h.`hitsid`, \'-\', -1)=n.`id` AND n.`status`=99 ORDER BY h.`weekviews` DESC',)).'19653da1d27b1fe49bd8d33951a4fbc1');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT h.`weekviews`,n.`title`,n.`url`,n.`style` FROM `v9_hits` AS h,`v9_news` AS n WHERE substring_index(h.`hitsid`, '-', -1)=n.`id` AND n.`status`=99 ORDER BY h.`weekviews` DESC LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><span><?php echo number_format($r[weekviews]);?>次浏览</span><i class="uk-icon-caret-right"></i><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"<?php echo title_style($r[style]);?>><?php echo str_cut($r[title],42);?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
	</section>
	<!-- 本周热门阅读 -->
	<?php } else { ?>
	<section class="box1">
		<div class="hd">
			<h3>本周【<?php echo $CAT['catname'];?>】阅读排行</h3>
		</div>
		<div class="bd">
			<ul class="uk-list uk-list-striped">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ab64f457b64e1b43d601919ea6788933&action=hits&catid=%24catid&num=10&order=weekviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'weekviews DESC',)).'ab64f457b64e1b43d601919ea6788933');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'weekviews DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><span><?php echo number_format($r[views]);?>次浏览</span><i class="uk-icon-caret-right"></i><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"<?php echo title_style($r[style]);?>><?php echo str_cut($r[title],42);?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
	</section>
	<!-- 本周【<?php echo $CAT['catname'];?>】阅读排行 -->
	<?php } ?>
	<section class="tm-ad box1">
		<div class="hd"><h3>留下你斑驳的笔迹</h3></div>
		<div class="bd">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f309b12708dacb8e5122f5fe4eccff75&sql=SELECT+setting+FROM+phpcms_poster+WHERE+spaceid+%3D+1+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM phpcms_poster WHERE spaceid = 1 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<?php eval("\$narry =$r[setting];"); ?>
				<a href="<?php echo $narry['1']['linkurl'];?>" target="_blank"><img src="<?php echo $narry['1']['imageurl'];?>" alt="<?php echo $narry['1']['alt'];?>"></a>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</section>
	<!-- ADS 160×160. -->
	<section class="tm-top box1">
		<div class="hd"><h3>安妮推荐阅读</h3></div>	
		<div class="bd">
			<ul>
			<?php if(!$catid) { ?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=89e075f6268f798283a3e975d0edd71d&action=position&posid=2&thumb=1&order=listorder+DESC&num=8&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'2','thumb'=>'1','order'=>'listorder DESC',)).'89e075f6268f798283a3e975d0edd71d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','thumb'=>'1','order'=>'listorder DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
			<?php } else { ?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9ac214c27c01b3bb152bfef887c79fa6&action=position&posid=2&thumb=1&order=listorder+DESC&num=5&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'2','thumb'=>'1','order'=>'listorder DESC',)).'9ac214c27c01b3bb152bfef887c79fa6');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','thumb'=>'1','order'=>'listorder DESC','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
			<?php } ?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li>
				<div class="thumb"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],80,60);?>" alt="<?php echo $r['title'];?>"></a></div>
				<div class="info">
					<h4><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r['title'],39);?></a></h4>
					<p><?php echo str_cut(strip_tags(str_ireplace("　"," ",$r[description])),79);?></p>
				</div>
			</li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
	</section>
	<!-- 安妮推荐阅读 -->
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