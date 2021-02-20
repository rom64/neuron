<?php 
/*
Template Name: page
*/
?>
<?php get_header();?>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <h1>Hello! This is <?php bloginfo('name');?>.</h1>
                    <h4><?php bloginfo('name');?></h4>
                    <a href="#blog" class="smoothScroll btn btn-default">Discover More</a>
               </div>
          </div>
     </div>
</section>

<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-post-thumb">
                    <?php while(have_posts()){
                         the_post();
                    ?>
                         <div class="blog-post-image ">
                              <a href="<?php the_permalink();?>">
                              <?php the_post_thumbnail('large ', array('class' => 'img-responsive'));?>
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                         </div>
                         <div class="blog-post-format">

                              <span><a href="#"> <?php echo get_avatar($comment, 32);?>
                               <?php the_author();?></a></span>
                              <span><i class="fa fa-date"></i> <?php the_date();?></span>
                              <span><a href="#"><i class="fa fa-comment-o"></i><?php comments_number();?></a></span>
                         </div>
                         <div class="blog-post-des">
                              <p><?php the_excerpt();?></p>
                              <a href="<?php the_permalink();?>" class="btn btn-default">Continue Reading</a>
                         </div>
                    <?php
                    }?>
                             
                    </div>
               </div>
          </div>
     </div>
</section>
<?php get_footer();?>