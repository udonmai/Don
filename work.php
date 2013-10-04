<?php
/*
Template Name: Work Page
*/
?>
<?php get_header() ?>

	<div id="container">
		<div id="content">


			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">

			<div class="ach_section">
				<ul>
				<?php
				global $post;
				$num = 0;
				$cat = get_category_by_slug('work');
				$cid = $cat->term_id;
				$args = array( 'numberposts' => 1000, 'offset'=> 0, 'category' => $cid );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :	setup_postdata($post); 
					$num ++;
					if ($num == 1) { 
						$preyear = get_the_time('Y');
						echo "<div class='entry-year'>$preyear</div>";
					 }
					$year = get_the_time('Y'); 
					if ($num > 1 && $preyear != $year) {
						$preyear = $year;
						echo "<div class='entry-year'>$year</div>";						
					}
					?>
					<li id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
						<span class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></span>
						<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s', 'sandbox' ), the_date( 'D, M d', '', '', false ), get_the_time() ) ?></abbr></span>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
			

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages! ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>
