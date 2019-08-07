<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="nav-top">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo">
				</a>
			</div>
			<div class="col-9 text-right">
				<div class="main-menu">
					<ul>
						<li>
							<a href="#">Menu 1</a>
						</li>
						<li>
							<a href="#">Menu 2</a>
						</li>
						<li>
							<a href="#">Menu 3</a>
						</li>
						<li>
							<a href="#">Menu 4</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
