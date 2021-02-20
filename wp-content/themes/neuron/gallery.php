<?php 
/*
Template Name: gallery
*/ 
?>
<?php get_header();?>
<!-- Home Section -->

<section id="home" class="main-gallery parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <h1>Image Gallery</h1>
               </div>
          </div>
     </div>
</section>

<!-- Gallery Section -->

<section id="gallery">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <h2><?php the_field('gallery-title');?></h2>
                   <?php the_field('gallery-text');?>
                    <span></span>
                    <?php for($i=1; $i<=6; $i++):?>
                    <div class="col-md-6 col-sm-6">                    	
                         <div class="gallery-thumb">                         	
                              <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery-image<?php echo $i?>.jpg" class="image-popup">
                                   <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery-image<?php echo $i?>.jpg" class="img-responsive" alt="Gallery Image">
                              </a>                          
                         </div>
                    </div>
                    <?php endfor;?>
                    <div class="col-md-12 col-sm-12">
                         <p><?php the_field('after-gallery');?></p>
                    </div>
               </div>
          </div>
     </div>
</section>
<?php get_footer();?>