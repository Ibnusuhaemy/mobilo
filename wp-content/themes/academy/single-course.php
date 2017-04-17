<!-- TEMPLATE MENAMPILKAN SINGLE COURSE -->
<?php get_header(); ?>

<div class="course-content clearfix popup-container" <?php if(is_singular('course')) { ?>style="margin-top:60px;"<?php }?>>



	<div class="threecol column">
		<?php get_template_part('content', 'course-grid'); ?>

		<br>
		<?php if(ThemexCourse::isMember()) { ?>

		<div class="widget addwidget">
			<div class="widget-title addwidget custompad" >
				<h4 class="nomargin left"><span>PROGRESS (<?php echo ThemexCourse::$data['progress']; ?>%) </span></h4>
			</div>
		<div class="course-progress">
			<span style="width:<?php echo ThemexCourse::$data['progress']; ?>%;"></span>
		</div>
		</div>
		<?php } ?>
		
	
	<?php 
		

	if(ThemexCourse::hasMembers()) {
		get_template_part('module', 'users');
	}?>



		<!--<?php if(!empty(ThemexCourse::$data['lessons'])) { ?>
		<h1><?php _e('Lessons', 'academy'); ?></h1>
		<?php if(ThemexCourse::isMember()) { ?>
		<div class="course-progress">
			<span style="width:<?php echo ThemexCourse::$data['progress']; ?>%;"></span>
		</div>
		<?php } ?>
		<div class="lessons-listing">
			<?php foreach(ThemexCourse::$data['lessons'] as $index=>$lesson) { ?>
			<?php get_template_part('content', 'lesson'); ?>
			<?php } ?>
		</div>
		<?php } ?>-->
	</div>

	
	<div class="course-questions ninecol column last">	
		<div class="course-description widget <?php echo ThemexCourse::$data['status']; ?>-course">
		<div class="widget-content">
			<h1 class="desctitle"><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<footer class="course-footer">
				<?php get_template_part('module', 'form'); ?>
			</footer>
		</div>						
	</div>

	<br>
		<div class="tabs-container horizontal-tabs clearfix">
			<ul class="tabs clearfix">
				<li class="current"><h5 class="nomargin"><a href="#sample">Materi</a></h5></li>
				<li ><h5 class="nomargin"><a href="#sample-2">Diskusi</a></h5></li>
			</ul>
			<div class="panes">
				<div class="pane current" id="sample-tab" style="display: block;">
					<?php if(!empty(ThemexCourse::$data['lessons'])) { ?>
					<!--<h1><?php _e('Lessons', 'academy'); ?></h1>-->
					<?php if(ThemexCourse::isMember()) { ?>
					<!--<div class="course-progress">
						<span style="width:<?php echo ThemexCourse::$data['progress']; ?>%;"></span>
					</div>-->
					<?php } ?>
					<div class="lessons-listing">
						<?php foreach(ThemexCourse::$data['lessons'] as $index=>$lesson) { ?>
						<?php $counter=0; get_template_part('content', 'lesson'); ?>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
				<div class="pane" id="sample-2-tab" style="display: none;">
					<!--<h1><?php _e('Questions', 'academy'); ?></h1>-->
					<ul class="styled-list style-2 bordered">
					<?php foreach(ThemexCourse::$data['questions'] as $question) {?>
					<li><a href="<?php echo get_comment_link($question->comment_ID); ?>"><?php echo get_comment_meta($question->comment_ID, 'title', true); ?></a></li>
					<?php } ?>
					</ul>	
				</div>
			</div>
		</div>
		
	</div>
	

	<?php if((!ThemexCourse::isSubscriber() || !ThemexCourse::isMember()) && !ThemexCourse::isAuthor()) { ?>
	<div class="popup hidden">
		<?php if(!ThemexCourse::isSubscriber()) { ?>
		<h2 class="popup-text"><?php _e('Subscribe to view this content', 'academy'); ?></h2>
		<?php } else { ?>
		<h2 class="popup-text"><?php _e('Klik "Mulai Pelajari" untuk Menampilkan Konten', 'academy'); ?></h2>
		<?php } ?>
	</div>
	<!-- /popup -->
	<?php } ?>
</div>
<!-- /course content -->
<?php get_template_part('module', 'related'); ?>
<?php get_footer(); ?>