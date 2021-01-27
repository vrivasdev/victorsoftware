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

		<div class="container">

			<div class="row">
				<div class="col-xs-12">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#"> Victor Software</a>
					    </div>	
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					    	
						</div>
					  </div><!-- /.container-fluid -->
					</nav>		
				</div>

				<!-- Search field -->
				<div class="search-form-container">
					<?php get_search_form(); ?>
				</div>
			</div>
		
			<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt="" />