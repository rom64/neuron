<?php 
/*
Template Name:single
*/
?>
<?php get_header();?>

<!-- Home Section -->

<section id="home" class="main-single-post parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Single Post</h1>
               </div>

          </div>
     </div>
</section>

<!-- Blog Single Post Section -->

<section id="blog-single-post">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-single-post-thumb">
                         

                         <div class="blog-post-title">
                              <h2><?php the_title();?></a></h2>
                         </div>

                         <div class="blog-post-format">
                              <span><a href="#"><?php echo get_avatar($comment, 32);?> <?php the_field('author');?></a></span>
                              <span><i class="fa fa-date"></i> <?php echo get_the_date('F j, Y');?></span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> <?php comments_number();?></a></span>
                         </div>

                         <div class="blog-post-des">
                         <?php the_field('description');?>
                              
                              <div class="blog-post-image">
                              
                              <?php the_post_thumbnail('large', ['class' => 'img-responsive']);?>
                              </div>                         
                              <h3>What is Personal Blog Theme?</h3>
                              <?php the_field('before-img');?>
                         </div>
                         
                         

                         <div class="blog-single-post-image">
                		<?php for($i=1; $i<=3; $i++):?>
                              <div class="col-md-4 col-sm-4">                           		
                                   <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog-image<?php echo $i ?>.jpg" class="img-responsive" alt="Blog Image 1">
                              </div>
                         <?php endfor;?>
                            
                         </div>
                         <?php the_field('after-img');?>
                        

                         <div class="blog-author">
                              <div class="media">
                                   <div class="media-object pull-left">
                                   <?php echo get_avatar($comment);?>
                                   </div>
                                   <div class="media-body">
                                        <h3 class="media-heading"><a href="#"><?php the_field('author');?> </a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                   </div>
                              </div>
                         </div>

                       

                         <div class="blog-comment-form">
                              <h3>Leave a Comment</h3>
                    		<?php echo do_shortcode('[contact-form-7 id="120" title="Comment"]');?>
                     
                         </div>
                    </div>
          </div>
     </div>
</section>
<?php get_footer();?>