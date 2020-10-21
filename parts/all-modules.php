<?php
$the_id = get_the_ID();

if( have_rows('all_modules', $the_id) ):
   
   
        //    // loop through the rows of data
        while ( have_rows('all_modules', $the_id) ) : the_row();
                
                $data = ee__var(get_row_layout());
                include(locate_template('parts/modules/'.get_row_layout().'.php'));

        endwhile;

else :

//  // no layouts found

endif;
