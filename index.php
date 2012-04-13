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
				<p>udonmai</p>
			</div>

			<div class="section">
				<h2>about my work</h2>
				<p></p>
			</div>

			<div class="section">
				<h2>about this website</h2>
				<p></p>
			</div>

			
			<div class="section">
				<h2>find me elsewhere</h2>
				<p></p>
			</div>			

		</div><!-- #content -->
	</div><!-- #container -->


<?php //get_sidebar() ?>
<?php get_footer() ?>
