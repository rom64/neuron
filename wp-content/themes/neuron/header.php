
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="<?php bloginfo('description');?>">
	<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	 
	<?php wp_head();?>
</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="<?php bloginfo('url');?>" class="navbar-brand"><div><?php bloginfo('name');?></div></a>
          </div>
                    <?php
                         $args = [ 'theme_location' => 'top',
                                   'echo' => 0,
                                   'menu_class' => 'nav navbar-nav navbar-right collapse navbar-collapse'
                         ];
                         $menu = wp_nav_menu( $args );
                         if(!is_front_page())
                         $menu = preg_replace('~<li~', '<li><a href="'.home_url().'" title="На главную">Home</a></li><li', $menu, 1 );
                         echo $menu; 
                    ?>
              <!--    <?php wp_nav_menu([
                    'theme_location' =>'top',
                    'menu_class' => 'nav navbar-nav navbar-right collapse navbar-collapse'
                  
               ]);?> -->

     </div>
</div>

