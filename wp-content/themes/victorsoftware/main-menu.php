<nav class="menu" id="menu">
    <?php wp_nav_menu(array( 
                            'theme_location' => 'primary', 
                            'container'      => false, // Container disabled
                            'menu_class'     => 'nav', // Inserts content inside classes
                            'walker'         => new Walker_Nav_Primary()
     ));?>
</nav>