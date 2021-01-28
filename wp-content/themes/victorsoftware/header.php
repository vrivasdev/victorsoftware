<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>		
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">		
		<title><?php bloginfo('name');?> <?php wp_title(' | ');?></title> <!-- I will print "Blog title" >> "Post title" -->
		<meta name="description" content="<?php bloginfo('description');?>">
		<?php wp_head();?> <!-- It calls all header included files -->
	</head>
	
	<?php 
		if ( is_front_page()) $custom_classes = array('custom-class', 'my-class');			
		else $custom_classes = array('no-custom-class');			
	?>

	<body <?php body_class($custom_classes);?>>
		<header class="header">
			<figure class="logo">
				<img src=<?php echo get_template_directory_uri() .'/images/profile.jpg'?>>
			</figure>			
			<?php get_template_part('main', 'menu' );?>	
		</header>
		<section> 
 