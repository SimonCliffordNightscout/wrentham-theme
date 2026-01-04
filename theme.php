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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Admin CSS -->
        <?= $Wcms->css() ?>

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
    </head>

    <body>
    	<?= $Wcms->alerts() ?>

    	<div class="settings-margin"><?= $Wcms->settings() ?></div>
    	
    	<!-- Navigation Bar -->
    	<nav class="navbar navbar-default navbar-fixed-top">
    		<div class="container">
    			<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a class="navbar-brand" href="<?= $Wcms->url() ?>">
    					<?= $Wcms->get('config', 'siteTitle') ?>
    				</a>
    			</div>
    			<div class="collapse navbar-collapse" id="menu-collapse">
    				<ul class="nav navbar-nav navbar-right">
    					<?= $Wcms->menu() ?>
    				</ul>
    			</div>
    		</div>
    	</nav>
	
    	<!-- Header with Page Title -->
    	<header class="band-header">
            <div class="container">
                <h1 class="page-title"><?= $Wcms->page('title') ?></h1>
            </div>
    	</header>

        <!-- Main Content Area -->
        <div class="container main-content">
            <div class="row">
                <!-- Main content column -->
                <div class="col-md-8">
                    <div class="content-card">
                        <?= $Wcms->page('content') ?>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar-section">
                        <?= $Wcms->block('sidebar') ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Information Section -->
        <div class="container-fluid footer-info">
        	<div class="container">
        		<div class="text-center">
                    <?= $Wcms->block('footer-info') ?>
        		</div>
        	</div>
        </div>

        <!-- Footer -->
        <footer class="container-fluid site-footer">
        	<div class="container">
                <div class="footer-content">
                    <?= $Wcms->footer() ?>
                </div>
           </div>
        </footer>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <?= $Wcms->js() ?>

    </body>
</html>
