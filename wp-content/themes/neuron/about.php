<?php 
/*
Template Name: about
*/
?>
<?php get_header();?>
<!-- Home Section -->

<section id="home" class="main-about parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1><?php the_title();?></h1>
               </div>

          </div>
     </div>
</section>

<!-- About Section -->

<section id="about">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="col-md-4 col-sm-4">
                         <h2><?php the_field('top-left-title');?></h2>
                         <?php the_field('top-left-text');?>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <h2><?php the_field('top-center-title');?></h2>
                         <?php the_field('top-center-text');?>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <h2><?php the_field('top-right-title');?></h2>
                         <?php the_field('top-right-text');?>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <h3><?php the_field('center-title');?></h3>
                         <?php the_field('center-text');?>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <img src="<?php the_field('center-img');?>" class="img-responsive" alt="About Image">
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-4">
                         <img src="<?php the_field('section-one-img');?>" class="img-responsive" alt="Blog Image">
                         <h3><?php the_field('section-one-title');?></h3>
                         <?php the_field('section-one-text');?>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <img src="<?php the_field('section-two-img');?>" class="img-responsive" alt="Blog Image">
                         <h3><?php the_field('section-two-title');?></h3>
                         <?php the_field('section-two-text');?>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <img src="<?php the_field('section-three-img');?>" class="img-responsive" alt="Blog Image">
                         <h3><?php the_field('section-three-title');?></h3>
                         <?php the_field('section-three-text');?>
                    </div>
					
                    <h3><?php the_field('section-bottom-title');?></h3>
                    <?php the_field('section-bottom-text');?>
               </div>

          </div>
     </div>
</section>

<?php get_footer();?>