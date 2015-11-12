<?php global $data; ?>
<div class="header-v2">
	<div class="header-social">
		<div class="avada-row">
			<div class="alignleft">
				<?php
				if($data['header_left_content'] == 'Contact Info') {
					get_template_part('framework/headers/header-info');
				} elseif($data['header_left_content'] == 'Social Links') {
					get_template_part('framework/headers/header-social');
				} elseif($data['header_left_content'] == 'Navigation') {
					get_template_part('framework/headers/header-menu');
				}
				?>
			</div>
			<div class="alignright">
				<?php
				if($data['header_right_content'] == 'Contact Info') {
					get_template_part('framework/headers/header-info');
				} elseif($data['header_right_content'] == 'Social Links') {
					get_template_part('framework/headers/header-social');
				} elseif($data['header_right_content'] == 'Navigation') {
					get_template_part('framework/headers/header-menu');
				}
				?>
			</div>
		</div>
	</div>
	<header id="header">
		<div class="avada-row" style="margin-top:<?php echo $data['margin_header_top']; ?>;margin-bottom:<?php echo $data['margin_header_bottom']; ?>;">
			<div class="logo" style="margin-left:<?php echo $data['margin_logo_left']; ?>;margin-bottom:<?php echo $data['margin_logo_bottom']; ?>;"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $data['logo']; ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
			<?php if($data['ubermenu']): ?>
			<nav id="nav-uber">
			<?php else: ?>
			<nav id="nav" class="nav-holder">
			<?php endif; ?>
				<?php wp_nav_menu(array('theme_location' => 'main_navigation', 'depth' => 4, 'container' => false, 'menu_id' => 'nav')); ?>
			</nav>
		</div>
	</header>
</div>