<!DOCTYPE html><?php
	include("version.php");	$subdomain = preg_replace('/^(?:([^\.]+)\.)?notestack\.me$/', '\1', $_SERVER['SERVER_NAME']);	if ($subdomain == "dev"){?><html><?php	}	else{?><html manifest="/cache.manifest"><?php	};?>
<head>	<!-- NOTESTACK HOMEPAGE -->	<!-- META -->	<title>Notestack</title>
	<link rel="icon" href="/favicon.ico" type="image/x-icon"> 
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 	<!-- STYLESHEETS -->	<link href='/css/960-grid.css?<?php echo $version; ?>' rel='stylesheet' type='text/css'>	<link href='/css/home.css?<?php echo $version; ?>' rel='stylesheet' type='text/css'>	<!-- GOOGLE FONTS -->	<link href='https://fonts.googleapis.com/css?family=Vollkorn&v1' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hammersmith+One&v2' rel='stylesheet' type='text/css'>	<link href='https://fonts.googleapis.com/css?family=Droid+Sans&v1' rel='stylesheet' type='text/css'>	<link href="../fonts/fonts.css?<?php echo $version; ?>" rel='stylesheet' type='text/css' />
	<!-- GOOGLE ANALYTICS -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-20881572-3']);
	  _gaq.push(['_trackPageview']);
		  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script></head><body><div class='fullwindow'>	<div class='container_12'>		<div class='grid_12'>			<div class='grid_8 alpha left'>				<div class='grid_8 alpha omega titles'>					<div class='title'><h1>Notestack</h1></div>					<div class='subtitle'><h3>an <a href="http://github.com/brittohalloran/notestack">open source</a> text only note app for the modern browser</h3></div>				</div>			</div>			<div class='grid_4 omega right'>				<div class='grid_4 alpha omega login'>
					<div class='login_inner'>
						<form action='' method='post' onSubmit="return false;">
							<input tabindex=1 type="text" placeholder="simplenote email" class='email' />
							<input tabindex=2 type="password" placeholder="simplenote password" class='password' />
							<input type="submit" class="login_submit"/>
						</form>
						<div class='login_message'></div>
					</div><!--login_inner-->				</div><!--login-->				<div class="under_login grid_4 alpha omega">					<div class="inner">
						<span class='under_message'>Don't have an account? <a href="https://simple-note.appspot.com/create/" target="_blank">Create one.</a></span>					</div><!--inner-->				</div><!--under_login-->			</div><!--right-->			<div class='clear pad_50'></div>			<div class='grid_12 alpha omega cards'>				<div class='grid_4 alpha html5 feature card'>					<div class='inner'>						<div class='content'>							<div class='image'></div>							<h2>HTML5 & CSS3</h2>							<p>Animations, gradients, local storage, and other things your old browser couldn't do.</p>						</div>					</div>				</div>				<div class='grid_4 keyboard feature card'>					<div class='inner'>						<div class='content'>							<div class='image'></div>							<h2>Keyboard Shortcuts</h2>							<p>Navigate with the keyboard shortcuts you already know and love.</p>						</div>					</div>				</div>				<div class='grid_4 omega simplenote feature card'>					<div class='inner'>						<div class='content'>							<div class='image'></div>							<h2>Simplenote Sync</h2>							<p>Take your notes with you on any platform. <a href="http://simplenoteapp.com/" target="_blank">Learn more</a> or find an <a href="http://simplenoteapp.com/downloads/" target="_blank">app for your platform</a>.</p>						</div>					</div>				</div>			</div>			<div class='clear pad_50'></div>
			<div class='grid_12 alpha omega footer'>				<div class='footer_inner'>					<span class='footer_left'>handcrafted by <a href="http://brittohalloran.com" target="_blank">britt o'halloran</a>   |   <a href="http://github.com/brittohalloran/notestack/issues" target="_blank">report bugs / request features / fork notestack</a></span>					<span class='footer_right'><a href="/CHANGELOG.txt?<?php echo $version; ?>"><?php echo $version; ?></a></span>				</div>			</div>		</div>	</div><!--container_12--></div><!--fullwindow-->	<!-- SCRIPTS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<?php		if ($subdomain == "dev"){	?>	<script src="../js/login.js?<?php echo $version; ?>" type="text/javascript"></script>	<?php		}		else{	?>	<script src="../js/login.min.js?<?php echo $version; ?>" type="text/javascript"></script>	<?php		};	?>
</body>
</html>