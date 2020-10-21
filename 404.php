<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); 

$pages = get_field('global--404-page-list', 'options');


?>

<div class="container py-5">

   <div class="row position-relative">
      
      <div class="col-md-9">
               <h1>Oops! Error 404</h1>
               <div class="max-width-560 pb-2"><p class="lead text-uppercase text-gray-400">We can’t seem to find the page you were looking for.</p></div>
               <div class="max-width-560 pb-2"><p class="lead font-weight-bold">Maybe there’s something on this list that will help?</p></div>
               <ul class="max-width-560 pb-2 lead list-unstyled list-two-column">
						<?php foreach($pages as $page):?>
							<li><a href="<?=get_the_permalink($page->ID);?>" class="cta-link icon--chev-right icon--chev-right-dark"><?=$page->post_title;?></a></li>
						<?php endforeach;?>
					</ul>
      </div>

      <div class="d-none d-md-block max-width-200 my-3 my-md-0"><img src="<?=get_stylesheet_directory_uri();?>/src/img/characters/asset--seahorse.png" class="img-fluid"></div>

   </div>

</div>

<?php get_footer();
