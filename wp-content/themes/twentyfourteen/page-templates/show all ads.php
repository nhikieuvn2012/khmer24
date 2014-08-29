<?php
/**
 * Template Name: Show All Ads
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header();
 $cat_id=$_GET['cat'];
 $categories=get_category($cat_id);
 $parent_id=$categories->category_parent;
 ?>
 
     <div id="contentwrapper">
        <div id="contentcolumn">
            <?php dynamic_sidebar('ads_content1');?>
            <div class="adsmanager_pathway">
            <a href="<?php echo get_home_url();?>">Home</a> <img alt="arrow" src="http://www.khmer24.com/components/com_adsmanager/images/arrow.png"> 
            <?php 
            if($parent_id!=0){
                $cat_p=get_category($parent_id);
            ?>
            <a href="<?php echo get_home_url().'/show-category-parent?cat='.$cat_p->cat_ID;?>"><?php echo $cat_p->name;?></a> <img alt="arrow" src="http://www.khmer24.com/components/com_adsmanager/images/arrow.png"> 
            <?php
            }
            ?>
            <a href=""><?php echo $categories->name;?></a></div>
            <h1 style="color:#000" class="contentheading">
		              <img alt="default" src="<?php echo get_stylesheet_directory_uri();?>/images/default.gif" class="imgheading"/><?php echo $categories->name;?>
            </h1>  
            <div class="filter_header" style="position:relative">
                <?php dynamic_sidebar('header_sort');?>
            </div>
            <table id="adslist"><tbody>
             
             <?php
             global $post;
            $args = array('post_type'=>'post','numberposts' => 10, 'category_name' =>$categories->name);
            $posts = get_posts( $args );
              function get_excerpt($count){
                          $excerpt = get_the_content();
                           if($count>strlen($excerpt)){
                             return $excerpt;
                         }else{
                            $permalink = get_permalink($post->ID);            
                            $excerpt = strip_tags($excerpt);
                             $excerpt = substr($excerpt, 0, $count);
                             $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
                             $excerpt = $excerpt;
                             return $excerpt.'...';
                         }
                        }
            foreach( $posts as $post ){ 
                setup_postdata(get_post( $post->ID));
                $price=get_post_meta($post->ID,'prices',true);
             ?>
                <tr>
                   <td class="colpic">
                        <div class="picbox">
                            <a href="<?php $post->guid?>">
                                <img alt="<?php echo $post->post_title;?>" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>"/>
                            </a>
                        </div>
                   </td>
                   <td class="coldata">
                        <h2>
                        <a href="<?php echo $post->guid;?>"><?php echo $post->post_title;?></a>
                        <span class="price"> $<?php echo $price;?></span>
                        </h2>
                        <span class="adsmanager_cat"> 
               	     	 	&#8226; <?php echo $cat_p->name;?>/
                            <?php echo $categories->name;?>
                            &nbsp;
                            <?php
                                $cate_location=get_the_category();
                                foreach($cate_location as $cat) { 
                                   if($cat->category_parent==59){
                                  echo '&#8226;'.$cat->name;
                                  }
                                }
                            ?>
                            </span>
                           
			                
                            <p class="short_desc">
                                <?php echo get_excerpt(150);?>
                                Tel:
                                <i>
                                    <?php
                                        $author=$post->post_author;                             
                                        $phone=get_user_meta($author,'phone',true);
                                        echo $phone;
                                    ?>
                                </i>
                            </p>
                   </td>
                </tr>
             <?php
            
            }
            ?>
            </tbody></table>
        </div>
 </div>
 <div id="leftcolumn" style="min-height:3050px;">
            <?php get_sidebar('left');?>
        </div>   
        <div id="rightcolumn">
            <?php get_sidebar('right');?>
 </div>
        
<?php get_footer();?>