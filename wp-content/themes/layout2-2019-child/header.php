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
<div id="main">
<div class="open-blank" onclick="closeNav()"></div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close <span>&times;</span></a>
	<div class="main-side-menu">
		<ul>
			<li class="current-menu-item">
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
<div class="nav-top py-3">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo">
				</a>
			</div>
			<div class="d-md-none col-9 text-right">
				<a href="javascript:void(0)" onclick="openNav()"><i class="fa fa-bars btn"></i></a>
			</div>
			<div class="col-12 col-md-9 d-md-flex d-none text-right">
				<div class="main-menu">
					<ul>
						<li class="current-menu-item">
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
