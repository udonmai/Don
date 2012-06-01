<?php get_header() ?>

	<div id="container">
		<div id="content">
			
			<div class="section">
				<h2>LATEST</h2>
				<ul>
				<?php $my_query = new WP_Query('posts_per_page=7');				
						while ( $my_query->have_posts() ) : $my_query->the_post() ?>

				<li id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s', 'sandbox' ), the_date( 'D, M d, Y', '', '', false ), get_the_time() ) ?></abbr></span>
					<span class="sep"> —  </span>
					<span class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></span>
				</li><!-- .post -->

				<?php endwhile; ?>
				</ul>
			</div>

			<div class="section">
				<h2>about me</h2>
				<blockquote><p>很高兴我们能够在这里相遇 :)</p></blockquote>
				<p style="display:none;">在网络的大部分角落，我都以id <strong>udonmai</strong> 出现XD 
				大部分时候的昵称是「麦町」。其实我在设法思考该取什么昵称的时候，还真的不知道它原来是斑点狗的别称= =，仅仅是当初自己非常喜欢「麦」迪，而「町」又非常有田园和日本的感觉。。
				而udon，也就是乌冬的日文假名的罗马拼音，mai，既是「舞」的日文假名的罗马字母拼音，还是「麦」的中文读音。。</p>
				<p>目前是个学生，同时对互联网颇为感兴趣，所以平时更多地会关注这方面的一些信息。
				对web作为客户端有较高的热情，同时也有深入了解后端底层相关知识的渴望。数据存储及分布式相关的内容也希望有所涉及。 </p>
				<p>钦慕日本，源于它的那份认真。日本的工业设计和日本人的一些礼节以及对待文化的态度都是它深深吸引我的地方。目前正计划前往以展开进一步的学业。</p>
				<p>同时也喜欢一切美好的事物。美好的概念很宽泛，也许也仅仅是针对我个人而言。比如New Age音乐中那一串串天籁般的音符，比如「深夜食堂」中那一幕幕恬美温馨的故事，比如MUJI的一些衣物，比如一些优雅干练的汉字字体，再比如新海城动画中，那空灵的苍穹。</p>
				<p>正因为如此，我越发希望自己能够创造能被很多人认为是美好的事物，应用如是。而如果单考虑应用，我希望它不仅仅是UI的美好，支撑它的逻辑代码也应该美好 :)</p>
				<br>
				<p>你可以在这里找到我：</p>
				<ul class="me">
					<li>关注我的 <a class="reference external" href="https://twitter.com/udonmai" target="_blank">Twitter</a></li>
					<li>发一封 <a class="reference external" href="mailto:udonmai@gmail.com">邮件</a> 给我</li>
					<li>了解我在 <a class="reference external" href="http://github.com/udonmai" target="_blank">Github</a> 上折腾什么</li>
				</ul>
			</div>

			<div class="section">
				<h2>about my work</h2>
				<p>我的个人项目都在 <a href="http://github.com/udonmai/" target="_blank">Github</a> 上，但鉴于自己的才艺尚未令自己满意，非常欢迎大大们的有力吐槽。</p>
				<p><a href="/project/" target="_blank">项目页</a> 整理中...</p>
			</div>

			<div class="section">
				<h2>about this website</h2>
				<p>Blog建立于10年伊始，由Wordpress驱动，但是要说自豪可能已经比较勉强了吧。</p>
				<p>主题是自己在 <a href="http://www.plaintxt.org/#sandbox" target="_blank">sandbox</a> 的基础上一点点搭建起来的，创意来源是 <a href="http://lepture.com/" target="_blank">lepture前辈的博客</a> ，并经过他本人的同意 XD</p>
				<p>该项目在 <a href="http://github.com/udonmai/Don/" target="_blank">Github</a> 上，吐槽什么的其实也没什么啦。。</p>
			</div>

			
			<div class="section">
				<h2>find me elsewhere</h2>
				<ul class="simple">
					<li><a href="https://twitter.com/udonmai/" target="_blank">Twitter</a></li>
					<li><a href="http://github.com/udonmai/" target="_blank">Github</a></li>
					<li><a href="http://www.douban.com/people/udonmai/" target="_blank">豆瓣</a></li>
					<li><a href="http://www.zhihu.com/people/udonmai" target="_blank">知乎</a></li>
					<li><a href="http://www.v2ex.com/member/udonmai" target="_blank">V2EX</a></li>
					<li><a href="https://plus.google.com/106581352947677307747/posts/" target="_blank">Google plus</a></li>
					<li><a href="http://udonmai.minus.com/" target="_blank">Minus</a></li>
					<li><a href="http://www.readability.com/udonmai/latest/" target="_blank">Readability</a></li>
				</ul>
			</div>			

		</div><!-- #content -->
	</div><!-- #container -->


<?php //get_sidebar() ?>
<?php get_footer() ?>
