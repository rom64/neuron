<?php 
/*
Template Name: contact
*/
?>
<?php get_header();?>
<!-- Home Section -->

<section id="home" class="main-contact parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <h1>Contact Us</h1>
               </div>
          </div>
     </div>
</section>

<!-- Contact Section -->

<section id="contact">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <h2>&lt;?php the_field('contact-title');?&gt;</h2>
                    <?php the_field('contact-text');?>;
                    <?php echo do_shortcode('[contact-form-7 id="47" title="Contact"]');?>;
               </div>
          </div>
     </div>
</section>

<?php get_footer();?>