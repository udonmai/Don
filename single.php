<?php get_header() ?>

	<div id="container">
		<div id="content">

		<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="single-entry-title"><?php the_title() ?></h2>
				<div class="entry-meta">
					<?php $date = get_the_time('Y-m-d');
					echo "<span class='entry-date'>$date</span>";  
					echo "<span class='entry-cat'>";
					the_tags('',' &bull; ','');
					echo "</div>";
					?></div>
				<div class="entry-content">
					<?php the_content() ?>
					<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
			</div><!-- .post -->

			<div id="nav-below" class="navigation">
				<? 
					$ppl = previous_post_link( '%link', '<span class="meta-nav" title="%title">&laquo;Pre</span> ' ); 
					if($ppl != NULL) {
				?>
				<div class="navi nav-previous">
					<span><?php echo $ppl; ?>&nbsp;</span>
				</div> <? } ?>
				<? 
					$npl = next_post_link( '%link', '<span class="meta-nav" title="%title">Nxt&raquo;</span>' ); 
					if($npl != NULL) {
				?>
				<div class="navi nav-next">
					<span>&nbsp;<?php echo $npl; ?></span>
				</div> <? } ?>
			</div>

<?php comments_template() ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>
