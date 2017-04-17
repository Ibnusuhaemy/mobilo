<?php
/*
Template Name: NoTitle
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo THEME_URI; ?>js/html5.js"></script>
	<![endif]-->
	<script src="<?php echo THEME_URI; ?>js/modernizr.js"></script> <!-- Modernizr -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="site-wrap">
		<?php if(is_user_logged_in()) { ?>
		<div class="header-wrap">
			<header class="site-header">
				<div class="row">
					<div class="site-logo left">
						<a href="<?php echo SITE_URL; ?>" rel="home">
							<img src="<?php echo ThemexCore::getOption('site_logo', THEME_URI.'images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" />
						</a>
					</div>
					<!-- /logo -->
					<div class="header-options right clearfix">					
						
						<div class="login-options right">
						<?php if(is_user_logged_in()) { ?>
							<div class="button-wrap left">
								<a href="<?php echo wp_logout_url(SITE_URL); ?>" class="button dark whitebutton round">
									<img src="<?php echo THEME_URI; ?>images/icon-logout.png">
								</a>							
							</div>
							<div class="button-wrap left">
								<a href="<?php echo ThemexUser::$data['user']['profile_url']; ?>">
									<!-- <span class="button-icon register"></span><?php _e('My Profile','academy'); ?> -->
									<div class="avatar homeavatar">
									<?php echo get_avatar(ThemexUser::$data['user']['ID'], 50); ?>

								</div>
								</a>						
								<?php echo ThemexUser::$data['user']['profile']['first_name']; ?>
							</div>							
							<?php } else { ?>						
							<div class="button-wrap left tooltip login-button">
								<a href="#" class="whitebutton mini">
									<img src="<?php echo THEME_URI; ?>images/icon-signin.png" class="smallicon">
									<?php _e('Login','academy'); ?></a>
								<div class="tooltip-wrap">
									<div class="tooltip-text">
										<form action="<?php echo AJAX_URL; ?>" class="ajax-form popup-form" method="POST">
											<div class="message"></div>
											<div class="field-wrap">
												<input type="text" name="user_login" value="<?php _e('Username','academy'); ?>" />
											</div>
											<div class="field-wrap">
												<input type="password" name="user_password" value="<?php _e('Password','academy'); ?>" />
											</div>
											<div class="button-wrap left nomargin">
												<a href="#" class="button submit-button tombolmerah"><?php _e('Masuk','academy'); ?></a>
											</div>											
									
											<div class="button-wrap switch-button left">
												<a href="#" class="button dark tombolhijau" title="<?php _e('Password Recovery','academy'); ?>">
													<span class="button-icon help"></span>
												</a>
											</div>
											<input type="hidden" name="user_action" value="login_user" />
											<input type="hidden" name="user_redirect" value="<?php echo themex_value($_POST, 'user_redirect'); ?>" />
											<input type="hidden" name="nonce" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
											<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
										</form>
									</div>
								</div>
								<div class="tooltip-wrap password-form">
									<div class="tooltip-text">
										<form action="<?php echo AJAX_URL; ?>" class="ajax-form popup-form" method="POST">
											<div class="message"></div>
											<div class="field-wrap">
												<input type="text" name="user_email" value="<?php _e('Email','academy'); ?>" />
											</div>
											<div class="button-wrap left nomargin">
												<a href="#" class="button submit-button tombolmerah" ><?php _e('Reset Password','academy'); ?></a>
											</div>
											<input type="hidden" name="user_action" value="reset_password" />
											<input type="hidden" name="nonce" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
											<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
										</form>
									</div>
								</div>
							</div>
							<?php if(get_option('users_can_register')) { ?>
							<div class="button-wrap left">
								<a href="<?php echo ThemexCore::getURL('register'); ?>" class="whitebutton mini">
									<img src="<?php echo THEME_URI; ?>images/icon-signup.png" class="smallicon">
									<?php _e('Daftar','academy'); ?>
								</a>
							</div>
							<?php } ?>
						<?php } ?>
						</div>
						<!-- /login options -->										
						<!--<div class="search-form right">
							<?php get_search_form(); ?>
						</div>-->
						<!-- /search form -->
						<?php if($code=ThemexCore::getOption('sharing')) { ?>
						<div class="button-wrap share-button tooltip right">
							<a href="#" class="button dark"><span class="button-icon plus nomargin"></span></a>
							<div class="tooltip-wrap">
								<div class="corner"></div>
								<div class="tooltip-text"><?php echo themex_html($code); ?></div>
							</div>
						</div>
						<!-- /share button -->
						<?php } ?>
					</div>
					<!-- /header options -->
					<div class="mobile-search-form">
						<?php get_search_form(); ?>
					</div>
					<!-- /mobile search form -->
					<nav class="header-navigation right">
						<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_class' => 'menu' ) ); ?>
						<div class="select-menu">
							<span></span>
							<?php ThemexInterface::renderDropdownMenu('main_menu'); ?>							
						</div>
						<!--/ select menu-->
					</nav>
					<!-- /navigation -->						
				</div>			
			</header>
			<!-- /header -->
		</div>

		<?php }?>
		<?php if(is_singular('course')) { ?>
				<?php get_template_part('module', 'course'); ?>
			<?php } else { ?>
			
		
		<?php } ?>
		<!-- /featured -->
				
				<?php if(is_user_logged_in()) { ?>
				<div class="main-content greybg lowheightbg" style="margin-top:40px;">
			<div class="row">
				<!-- <center> -->

					<div class="column sevencol">
						<br><br><br><h1 style="font-size:30px;margin-bottom:0;margin-top:-10px;">Selamat Datang, <b>
						<?php 
							$current_user = wp_get_current_user();
							if(!empty($current_user->user_firstname)){
								echo $current_user->user_firstname;
							}else{
								echo $current_user->user_login;
							}
						 ?>
						<?php //echo ThemexUser::$data['user']['profile']['first_name']; ?>
					</b>!</h1>
						<h3>Sejauh mana progress belajar pemrograman mobile mu hari ini?</h3>
					</div>
					<div class="column fivecol last">
						<br><br>
						<?php if (current_user_can( 'manage_options' )) {?>
							<a href="<?php echo admin_url(); ?>" class="whitebutton right">Halaman Administrator</a>
						<?php }else{ ?>
						<a href="<?php echo ThemexUser::$data['user']['profile_url']; ?>" class="whitebutton right">Lihat Progress</a>
						<?php } ?>
					</div>
					<br><br><br><br> &nbsp <br><hr>
					
						<?php the_post(); ?>
						<?php the_content(); ?>
						<!-- <a href="<?php echo site_url(); ?>" class="whitebutton" style="margin-top:15px;">Lihat Kelas Lainnya</a> -->
					
					
				<br>
				<hr>
				<center><small>Masih bingung cara menggunakan CodeMob? Baca step by step panduan <a href="http://localhost/ngoding/panduan">disini</a> </small></center>

				<?php }else{?>
				<div class="main-content greybg bordertop nomarginloh" style="padding-bottom:0 !important;">
					<div class="treesbg">
						<div class="row">
							<?php //the_post(); ?>
							<?php //the_content(); ?>
							<div class="column sevencol">
								<img src="<?php echo THEME_URI; ?>images/transparentandroid.png" style="margin:140px 0 30px 0;">
								<h1 style="font-size:30px;margin-bottom:0;margin-top:50px;">Selamat Datang di <b>CodeMob</b>!</h1>
								<p class="lead">CodeMob adalah bahan ajar berbasis web yang digunakan untuk
								membantu siswa SMK Negeri 4 Malang dalam mempelajari materi pemrograman perangkat bergerak.</p><br>
								<div class="buttongroup">
									<div class="main-nav"><a href="#" class="cd-signin whitebutton homebutton greenbtn">Mulai Belajar</a></div>
									<a href="#feature" class="cd-signin whitebutton homebutton">Lihat Fitur</a>
								</div>
								<!-- <img src="<?php echo THEME_URI; ?>images/logoCP.png" class="left" style="height:40px;"> -->
								<!-- <img src="<?php echo THEME_URI; ?>images/logoSMK4.png" class="rigaht" style="height:40px;"> -->
							</div>
							<div class="column fivecol last">
							</div>
						</div>
				</div>
				<div class="feature" id="feature">
					<div class="row">
						<center>
						<div class="column threecol">
							<img src="<?php echo THEME_URI; ?>images/icon1.png">
							<h2>Kurikulum 2013</h2>
							<p>Materi pemrograman perangkat bergerak yang disajikan mengacu pada kurikulum 2013.</p>
						</div>
						<div class="column threecol">
							<img src="<?php echo THEME_URI; ?>images/icon2.png">
							<h2>Project Based Learning</h2>
							<p>Model yang digunakan disusun untuk memudahkan siswa dalam  kegiatan praktikum.</p>
						</div>
						<div class="column threecol">
							<img src="<?php echo THEME_URI; ?>images/icon3.png">
							<h2>Progress Belajar</h2>
							<p>Progress belajar siswa dapat dilacak secara otomatis dengan evaluasi materi di tiap babnya.</p>
						</div>
						<div class="column threecol last">
							<img src="<?php echo THEME_URI; ?>images/icon4.png">
							<h2>Belajar Mandiri</h2>
							<p>Bahan ajar dapat digunakan di kelas maupun mandiri tanpa bantuan guru.</p>
						</div>
						<div class="column twelvecol">
							<br><br>
							<hr><br>
							<!-- <img src="<?php echo THEME_URI; ?>images/logoCP.png" style="height:40px;"> -->
							<img src="<?php echo THEME_URI; ?>images/logosmk4.png" class="rigaht" style="height:40px;">
						</div>
						</center>
					</div>
				</div>
				<?php } ?>

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Login</a></li>
				<li><a href="#0">Daftar Siswa</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form ajax-form formatted-form" action="<?php echo AJAX_URL; ?>" method="POST">
					<div class="message"></div>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-email">Username</label>
						<input class="full-width has-padding has-border" id="signin-email" type="text" placeholder="Username" name="user_login">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Kata Sandi" name="user_password">
						<a href="#0" class="hide-password">Sembunyikan</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					

					<p class="fieldset">
						<a class="button secondary submit-button fullwidth tombollogin tombolhijau">Login</a>
					</p>
					<!-- <center><p class="minitext">Belum punya akun <b>CodeMob</b>? Silahkan daftar melalui menu <span class="greentext">Daftar Siswa</span> diatas.</p></center> -->
					<div class="form-loader"></div>
					<input type="hidden" name="user_action" value="login_user" />
					<input type="hidden" name="user_redirect" value="<?php echo themex_value($_POST, 'user_redirect'); ?>" />
					<input type="hidden" name="nonce" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
					<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
					</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Lupa Password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form ajax-form formatted-form" action="<?php echo AJAX_URL; ?>" method="POST">
					<div class="message"></div>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="user_login">
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="Alamat E-mail" name="user_email">
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Kata Sandi" name="user_password" >
						<a href="#0" class="hide-password">Sembunyikan</a>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Ulangi Kata Sandi"name="user_password_repeat">
						<a href="#0" class="hide-password">Sembunyikan</a>
					</p>

					

					<p class="fieldset">
						<a class="button secondary submit-button fullwidth tombollogin tombolhijau">Daftar</a>
					</p>
					<div class="form-loader"></div>
					<input type="hidden" name="user_action" value="register_user" />
					<input type="hidden" name="user_redirect" value="<?php echo themex_value($_POST, 'user_redirect'); ?>" />
					<input type="hidden" name="nonce" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
					<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
					</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lupa kata sandi? Masukkan alamat emailmu pada form dibawah ini. Kamu akan menerima notifikasi penggantian password baru via email.</p>

				<form action="<?php echo AJAX_URL; ?>" class="cd-form ajax-form formatted-form" method="POST">
					<div class="message"></div>
										
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail" name="user_email">
					</p>

					<p class="fieldset">
						<a class="button secondary submit-button fullwidth tombollogin tombolhijau">Reset Password</a>
					</p>
					<input type="hidden" name="user_action" value="reset_password" />
					<input type="hidden" name="nonce" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
					<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
	
	<script type="text/javascript" src="<?php echo THEME_URI; ?>js/main.js"></script>




<?php get_footer(); ?>








