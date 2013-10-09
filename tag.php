<?php get_header() ?>

	<div id="container">
		<div id="content">

			<h2 class="page-title"><?php _e( 'Tag - ', 'sandbox' ) ?> <span><?php single_tag_title() ?></span></h2>

			<div class="ach_section">
				<ul>
<?php
$num = 0;	
 while ( have_posts() ) : the_post(); 
					$num ++;
					if ($num == 1) { 
						$preyear = get_the_time('Y');
						echo "<div class='entry-year'>$preyear</div>";
					 }
					$year = get_the_time('Y'); 
					if ($num > 1 && $preyear != $year) {
						$preyear = $year;
						echo "<div class='entry-year'>$year</div>";						
					} ?>

				<li id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
					<span class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></span>
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s', 'sandbox' ), the_date( 'D, M d', '', '', false ), get_the_time() ) ?></abbr></span>
				</li>				
				<!-- .post -->

<?php endwhile; ?>
				</ul>
			</div>

			<div id="nav-below" class="navigation">
				<?php 
					//$npl =  next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ); 
					$npl = get_next_posts_link('Older posts');
					if($npl != NULL) {
				?>
				<div class="btn nav-previous left">
					<span>&nbsp;<?php echo $npl; ?></span>
				</div> 
				<?php } ?>
				<?php 
						//$ppl = get_previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) );
					$ppl = get_previous_posts_link('Newer posts');
					if($ppl != NULL) {
				?>
				<div class="btn nav-next right">
					<span><?php echo $ppl; ?>&nbsp;</span>
				</div>
				<?php } ?>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>
