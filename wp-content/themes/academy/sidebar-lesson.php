
<?php
echo do_shortcode(themex_html(ThemexLesson::$data['sidebar']));



if(!empty(ThemexLesson::$data['attachments'])) {
	get_template_part('module', 'attachments');
}

if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('lesson'));

if(!empty(ThemexCourse::$data['lessons'])) {
	get_template_part('module', 'lessons');
}

?>
