<?php
/**
 * Template Name: Page result search
 * 
 * 
*/

$txt_search=$_GET["text_search"];
$cat_Slug=$_GET["catSlug"];
$location=$_GET["location"];



// The Query
if($location==""){
    query_posts("s=$txt_search&cat=$cat_Slug");
}
else if($cat_Slug==""){
    query_posts("s=$txt_search&cat=$location");
}
else if($cat_Slug=="" && $location==""){
    query_posts("s=$txt_search");
}
else if($txt_search==""){
    query_posts("category__and=$cat_Slug,$location");
}
else if($txt_search=="" && $location=""){
    query_posts("cat=$cat_Slug");
}
else if($txt_search=="" && $cat_Slug=""){
    query_posts("cat=$location");
}
else{
query_posts("s=$txt_search&category__and=$cat_Slug,$location");
}

// The Loop
while ( have_posts() ) : the_post();

    the_title(); echo '<br/>';
    the_content();echo '<hr/>';

endwhile;

// Reset Query
wp_reset_query();

