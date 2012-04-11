<?php get_header() ?>

	<div id="container">
		<div id="content">

			<h2 class="page-title"><?php _e( 'Tag - ', 'sandbox' ) ?> <span><?php single_tag_title() ?></span></h2>

			<div class="ach_section">
				<ul>
<?php while ( have_posts() ) : the_post() ?>

				<li id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
					<span class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></span>
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s', 'sandbox' ), the_date( 'D, M d', '', '', false ), get_the_time() ) ?></abbr></span>
				</li>				
				<div class="entry-content">
<?php the_excerpt(__( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?>
				</div>
				<!-- .post -->

<?php endwhile; ?>
				</ul>
			</div>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>
