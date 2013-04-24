<?xml version='1.0' encoding='UTF-8'?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
	<head>

		<?php
		//get site information from the BaseModel
		$headerInfo = $viewModel->__get('siteInfo');
		?>

		<title><?php echo $headerInfo['title']; ?></title>
		
		<!-- SEO Meta -->
		<meta type='description' content='<?php echo $headerInfo['description']; ?>'>
		<meta type='keywords' content='<?php echo $headerInfo['keywords']; ?>'>
		<meta type='author' content='<?php echo $headerInfo['author']; ?>'>
		
		<!-- Stylesheets -->
		<link rel='stylesheet' type='text/css' href='<?php echo APP_ROOT . "public/styles/style.css";?>' />
		
		<!-- Mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<!-- Windows 8 -->
		<meta name="application-name" content="<?php echo $headerInfo['title']; ?>" /> 
		<meta name="msapplication-TileColor" content=""/> 
		<meta name="msapplication-TileImage" content="<?php echo $headerInfo['logo']; ?>" />
		
		<!-- Twitter -->
		<meta name="twitter:card" content="">
		<meta name="twitter:site" content="<?php echo $headerInfo['url']; ?>">
		<meta name="twitter:title" content="<?php echo $headerInfo['title']; ?>">
		<meta name="twitter:description" content="<?php echo $headerInfo['description']; ?>">
		<meta name="twitter:url" content="<?php echo $headerInfo['url']; ?>">
		
		<!-- Facebook -->
		<meta property="og:title" content="<?php echo $headerInfo['title']; ?>" />
		<meta property="og:description" content="<?php echo $headerInfo['description']; ?>" />
		<meta property="og:url" content="<?php echo $headerInfo['url']; ?>" />
		<meta property="og:image" content="<?php echo $headerInfo['logo']; ?>" />

	</head>
	<body>
		<header>
			<div class='container'>
				<div class='logo'>
					<h2>Tyme Framework</h2>
				</div>
				<div class='top-nav'>
					<nav id='header-nav'>
						<ul>
							<li><a href='home'>Home</a></li>
							<li><a href='about'>About</a></li>
							<li><a href='documentation'>Docs</a></li>
							<li><a href='contribute'>Contribute</a></li>
							<li><a href='contact'>Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		<div class='container'>