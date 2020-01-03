<?php get_header()?>




<?php if ( have_posts() ) :
  while ( have_posts() ) :
    the_content();
    // output title, content, etc.
  endwhile;
endif;
?>










<?php get_footer()?>