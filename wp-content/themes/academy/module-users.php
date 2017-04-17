<div class="widget addwidget">
	<div class="widget-title addwidget" >
		<h4 class="nomargin left"><span><?php _e('Siswa', 'academy'); ?></span></h4>
	</div>
	<div class="widget-content clearfix">
		<div class="users-listing clearfix">
			<?php
			$counter=0;
			foreach(ThemexCourse::getMembers() as $ID) {	
				ThemexUser::refresh($ID);
				if(!empty(ThemexUser::$data['active_user'])) {
					$counter++;
					?>
					<div class="user-image <?php echo $counter==3?'last':''; ?>">
						<div class="avatar bordered-image">
							<a title="<?php echo ThemexUser::$data['active_user']['profile']['full_name']; ?>" href="<?php echo ThemexUser::$data['active_user']['profile_url']; ?>"><?php echo get_avatar($ID, 100); ?> </a>
						</div>
					</div>
					<a class="studentname" href="<?php echo ThemexUser::$data['active_user']['profile_url']; ?>"><?php echo ThemexUser::$data['active_user']['profile']['full_name']; ?></a>


					<?php 
					if($counter==1) {
						$counter=0;
						echo '<div class="clear"></div>';
					}
				}
			}
			?>
		</div>
	</div>
</div>