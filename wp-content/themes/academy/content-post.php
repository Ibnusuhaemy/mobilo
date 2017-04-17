<article <?php post_class('post clearfix'); ?>>
	<?php if(has_post_thumbnail()) { ?>
	<div class="column fivecol post-image">
		<div class="bordered-image thick-border">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('normal'); ?></a>
		</div>
	</div>
	<div class="post-content column sevencol last">
	<?php } else { ?>
	<div class="post-content">
	<?php } ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php if(!ThemexCore::checkOption('post_date')) { ?>
			
			<?php if(!ThemexCore::checkOption('post_author')) { ?>
			<div class="post-author" style="margin-top:-10px;">
				<time class="post-date nomargin" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format')); ?></time>
				&nbsp;<?php _e('oleh : ', 'academy'); ?> <?php the_author_posts_link(); ?></div>
			<?php } ?>
			<?php } ?>
			<br>
		<?php 
		if(isset($GLOBALS['content'])) {
			echo $GLOBALS['content'];
		} else {
			the_excerpt();
		}
		?>
		<footer class="post-footer">
			<a href="<?php the_permalink(); ?>" class="button small tombolmerah"><?php _e('Baca Selengkapnya','academy'); ?></a>
			<?php if(comments_open()) { ?>
			<div class="post-comment-count"><?php comments_number('0','1','%'); ?></div>
			<?php } ?>
			
		</footer>
	</div>
</article>