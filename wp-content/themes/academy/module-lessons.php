<?php if(ThemexCourse::isMember()) { ?>
	<div class="widget addwidget">
			<div class="widget-title addwidget custompad2" >
				<h4 class="nomargin left"><span>PROGRESS (<?php echo ThemexCourse::$data['progress']; ?>%) </span></h4>
			</div>
		
	<div class="course-progress">
				<span style="width:<?php echo ThemexCourse::$data['progress']; ?>%;"></span>
	</div>
</div>


	<form action="<?php echo themex_url(); ?>" method="POST">
		<?php if(ThemexLesson::$data['progress']!=0) { ?>
			<?php if(!ThemexCore::checkOption('lesson_retake')) { ?>
			<a href="#" class="button finish-lesson submit-button tombolabu" style="padding:11px 20px !important; display:block; text-align:center;"><span class="button-icon check"></span><?php _e('Sudah Mengerti', 'academy'); ?></a>
			<input type="hidden" name="lesson_action" value="uncomplete_lesson" />
			<input type="hidden" name="course_action" value="uncomplete_course" />
			<?php } ?>
		<?php } else if(ThemexLesson::$data['prerequisite']['progress']!=0) { ?>
			<?php if(is_singular('quiz')) { ?>
			<a href="#quiz_form" class="button submit-button tombolmerah" style="padding:11px 20px !important; display:block; text-align:center;"><span class="button-icon check"></span><?php _e('Selesai', 'academy'); ?></a>		
			<?php } else if(!empty(ThemexLesson::$data['quiz'])) { ?>
			<a href="<?php echo get_permalink(ThemexLesson::$data['quiz']['ID']); ?>" class="button tombolmerah" style="padding:11px 20px !important; display:block; text-align:center;"><span class="button-icon edit"></span><?php _e('Kerjakan Latihan', 'academy'); ?></a>
			<?php } else { ?>
			<a href="#" class="button submit-button tombolmerah" style="padding:11px 20px !important; display:block; text-align:center;"><span class="button-icon check"></span><?php _e('Tandai Sudah Mengerti', 'academy'); ?></a>
			<input type="hidden" name="lesson_action" value="complete_lesson" />
			<input type="hidden" name="course_action" value="complete_course" />
			<?php } ?>
		<?php } ?>
		<input type="hidden" name="lesson_id" value="<?php echo ThemexLesson::$data['ID']; ?>" />
		<input type="hidden" name="course_id" value="<?php echo ThemexCourse::$data['ID']; ?>" />
		<input type="hidden" name="nonce" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
		<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_lesson" />
	</form>
	<br>
	<?php } ?>


<div class="widget">
	<div class="widget-title">
		<h4 class="nomargin"><?php _e('Materi', 'academy'); ?></h4>
	</div>
	<div class="widget-content">
		<ul class="styled-list style-3">
			<?php foreach(ThemexCourse::$data['lessons'] as $lesson) { ?>
			<li class="<?php if($lesson->post_parent!=0) { ?>child<?php } ?> <?php if(ThemexLesson::getProgress($lesson->ID)==100) { ?>completed<?php } ?> <?php if($lesson->ID==ThemexLesson::$data['ID']) { ?>current<?php } ?>">
				<a href="<?php echo get_permalink($lesson->ID); ?>"><?php echo get_the_title($lesson->ID); ?></a>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>
	<br>
	<?php

	if(!empty(ThemexLesson::$data['attachments'])) {
	get_template_part('module', 'attachments');
}
	?>
<br>
	<div class="lesson-options">
				
	<?php if($prev=ThemexCourse::getAdjacentLesson(ThemexLesson::$data['ID'], false)) { ?>
	<a href="<?php echo get_permalink($prev->ID); ?>" title="<?php _e('Previous Lesson', 'academy'); ?>" class="button prev-lesson secondary tombolhijau kecil" style="padding:11px 20px !important;"><span class="button-icon nomargin prev"></span></a>
	<?php } ?>
	
	
	<?php if($next=ThemexCourse::getAdjacentLesson(ThemexLesson::$data['ID'])) { ?>
	<a href="<?php echo get_permalink($next->ID); ?>" title="<?php _e('Next Lesson', 'academy'); ?>" class="button next-lesson secondary tombolhijau kecil" style="padding:11px 20px !important;"><span class="button-icon nomargin next"></span></a>
	<?php } ?>
	<?php if(ThemexLesson::$data['ID']!=0) { ?>
	<a href="<?php echo get_permalink(ThemexCourse::$data['ID']); ?>" title="<?php _e('Close Lesson', 'academy'); ?>" class="button close-lesson secondary tombolhijau kecil" style="padding:11px 29px !important;margin-right:0 !important;"><span class="button-icon nomargin close"></span>&nbsp Tutup Materi</a>
	<?php } ?>
	
</div>

