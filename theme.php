<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
        <meta name="description" content="<?= $Wcms->page('description') ?>">
        <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
        
        <!-- Favicon -->
        <link rel="icon" href="<?= $Wcms->asset('favicon.ico') ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?= $Wcms->asset('favicon.ico') ?>" type="image/x-icon">

        <!-- Admin CSS -->
        <?= $Wcms->css() ?>

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
    </head>

    <body>
    	<?= $Wcms->alerts() ?>
    	<?= $Wcms->settings() ?>
    	
    	<!-- Top cream/yellow bar -->
    	<div class="top-bar"></div>
    	
    	<!-- Banner section with green background -->
    	<div class="banner-section">
    		<div class="banner-container">
    			<img src="<?= $Wcms->asset('Wrentham-Banner-8.jpg') ?>" alt="<?= $Wcms->get('config', 'siteTitle') ?>" class="banner-image">
    		</div>
    	</div>
	
    	<!-- Main navigation -->
    	<nav class="main-nav">
    		<div class="nav-container">
    			<ul class="nav-menu">
    				<?= $Wcms->menu() ?>
    			</ul>
    		</div>
    	</nav>

        <!-- Main Content Area -->
        <div class="content-wrapper">
            <div class="content-container">
                <!-- Main content column (left) -->
                <div class="left-column">
                    <?= $Wcms->page('content') ?>
                </div>
                
                <!-- Sidebar (right) -->
                <div class="right-column">
                    <?= $Wcms->block('sidebar') ?>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="site-footer">
        	<div class="footer-container">
        		<ul class="footer-nav">
        			<li><a href="<?= $Wcms->url() ?>">Home Page</a></li>
        			<li><a href="<?= $Wcms->url('contact-us') ?>">Contact us</a></li>
        			<li><a href="<?= $Wcms->url('engagements') ?>">Engagements</a></li>
        		</ul>
                <p class="footer-text"><?= $Wcms->footer() ?></p>
           </div>
        </footer>

        <?= $Wcms->js() ?>

    </body>
</html>
