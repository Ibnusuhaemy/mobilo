<?php
/*

Template Name: CustomHomepage
*/
?>

	
<!DOCTYPE html>
<?php 
	if(is_user_logged_in()) { 
		// $redirect=ThemexUser::$data['user']['profile_url'];
   		// wp_redirect($redirect,0	);
   		// wp_redirect(admin_url('admin.php?page=theme-options'));
   		// header( 'Location: http://www.shibashake.com' ) ; 

    	// exit;
    	// echo ThemexUser::$data['user']['profile_url']; 
	}


?>

<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo THEME_URI; ?>js/html5.js"></script>
	
	<![endif]-->
	<script src="<?php echo THEME_URI; ?>js/modernizr.js"></script> <!-- Modernizr -->
	
	
	<?php wp_head(); ?>
</head>
<body class="customhomepage">
		<!-- <div class="main-content"> -->
			<div class="row text-center customhomepagediv">
				<a href="<?php echo SITE_URL; ?>" rel="home">
					<img src="<?php echo THEME_URI; ?>images/biglogo.png">
				</a>
				<h1>Selamat Datang di Ngoding!</h1>
				<h2> Platform Pembelajaran Pemrograman Mobile.<!-- <br>Catat progress belajarmu dengan teman lainnya. --></h2>
				<div class="main-nav">
					<a href="#0" class="cd-signin button tombolmerah">Mulai Belajar</a>		
				</div>

			</div>





	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Login</a></li>
				<li><a href="#0">Daftar Akun</a></li>
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
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password" name="user_password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<!-- <p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p> -->

					<p class="fieldset">
						<input class="submit-button full-width tombolhijau tombollogin" type="submit" value="Login">
					</p>
					<div class="form-loader"></div>
					<input type="hidden" name="user_action" value="login_user" />
					<input type="hidden" name="user_redirect" value="<?php echo themex_value($_POST, 'user_redirect'); ?>" />
					<input type="hidden" name="nonce" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
					<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
					</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
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
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="user_email">
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="user_password" >
						<a href="#0" class="hide-password">Hide</a>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Repeat Password"name="user_password_repeat">
						<a href="#0" class="hide-password">Hide</a>
					</p>

					

					<p class="fieldset">
						<input class="submit-button full-width tombolhijau tombollogin" type="submit" value="Create Account">
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
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form action="<?php echo AJAX_URL; ?>" class="cd-form ajax-form formatted-form" method="POST">
					<div class="message"></div>
										
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail" name="user_email">
					</p>

					<p class="fieldset">
						<input class="submit-button full-width tombolhijau tombollogin" type="submit" value="Reset Password">
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

