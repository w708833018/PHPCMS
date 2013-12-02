<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","slider"); ?>
<div id="content">
	<div class="uk-container uk-container-center">
		<!-- Main -->
		<main class="uk-width-1-1">
			<div id="main">
			<?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
			<?php $num++?>
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<div class="menu">
						<h2><?php echo $r['catname'];?></h2>
						<span class="sub">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f75240b4f6197018030c210d31d46bb7&action=category&catid=%24r%5Bcatid%5D&num=5&order=listorder+ASC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$info = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'5',));}?>
							<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['catname'];?></a>/<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</span>
						<span class="more">
							<a href="<?php echo $r['url'];?>" target="_blank">MORE</a>
						</span>
					</div>
				</div>
				<div class="uk-width-1-1">
					<div class="uk-grid tm-mix">
						<span class="uk-width-medium-1-3">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8512261e8c9ab0ca807657418ae91efa&action=lists&catid=%24r%5Bcatid%5D&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
             				<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
							<div class="tm-focus">
								<div class="thumb">
									<a href="<?php echo $v['url'];?>" target="_blank">
									<img src="<?php echo thumb($v[thumb],273,135);?>" alt="<?php echo $v['title'];?>">
									<div class="uk-overlay-area"></div></a>
								</div>
								<div class="info">
									<h4><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo str_cut($v[title],55);?></a></h4>
									<p><?php echo str_cut($v['description'],255);?></p>
									<small>
										<span class="uk-float-left"><i class="uk-icon-folder-open"></i><?php echo $CATEGORYS[$v['catid']]['catname'];?></span>
										<span class="uk-float-right"><i class="uk-icon-user"></i><?php echo $v['username'];?></span>
									</small>
								</div>
							</div>
							<?php $n++;}unset($n); ?>
              				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</span>
						<span class="uk-width-medium-1-3">
							<div class="tm-top">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d263cf4c4c550cea1165c616f1b2409a&action=hits&catid=%24r%5Bcatid%5D&thumb=1&num=4&order=weekviews+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$info = $content_tag->hits(array('catid'=>$r[catid],'thumb'=>'1','order'=>'weekviews DESC','limit'=>'4',));}?>
								<ul>
									<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
									<li>
										<div class="thumb"><a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],80,60);?>" alt="<?php echo $v['title'];?>"></a></div>
										<div class="info">
											<h4><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo str_cut($v[title],39);?></a></h4>
											<p><?php echo str_cut($v['description'],79);?></p>
										</div>
									</li>
									<?php $n++;}unset($n); ?>
								</ul>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</div>
						</span>
						<span class="uk-width-medium-1-3">
							<div class="tm-list">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2d9bc17706ae7b0ff7fdca4db30730d&action=lists&catid=%24r%5Bcatid%5D&num=10&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'10',));}?>
								<ul>
									<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
									<li><span><a href="<?php echo $CATEGORYS[$v['catid']]['url'];?>" target="_blank">[<?php echo $CATEGORYS[$v['catid']]['catname'];?>]</a></span><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo str_cut($v[title],54);?></a></li>
									<?php $n++;}unset($n); ?>
								</ul>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</div>
						</span>
					</div>
					<div class="uk-grid">
						<div class="uk-width-1-1">
							<div class="tm-ad"><img src="<?php echo siteurl($siteid);?>/assets/images/865_100_<?php echo $num;?>.jpg" alt=""></div>
						</div>
					</div>
				</div>
			</div>
			<!-- <?php echo $r['catname'];?> -->
			<?php $n++;}unset($n); ?>
			</div>
		</main>
		<!-- / Main -->
		<?php include template("content","sidebar"); ?>
		<!-- otherItem... -->
	</div>
</div>
<?php include template("content","footer"); ?>