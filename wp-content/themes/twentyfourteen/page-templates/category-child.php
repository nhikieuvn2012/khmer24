<?php

/**

 * Template Name: Test Child

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */

 get_header();

$cat_id=$_GET['cat'];
$cat_child=get_category($cat_id);
//echo var_dump($cat_child);
$parent_id=$cat_child->category_parent;
//echo var_dump($parent_id);
global $wp_query;
$max_page=$wp_query->max_num_pages;
$current_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 ?>
  <div id="contentwrapper">

        <div id="contentcolumn">

            <?php dynamic_sidebar('ads_content1');?>

            <div class="adsmanager_pathway">

            <a href="<?php echo get_home_url();?>">Home</a> <img alt="arrow" src="http://www.khmer24.com/components/com_adsmanager/images/arrow.png"/> 

            <?php 

            if($parent_id!=0){

                $cat_p=get_category($parent_id);

            ?>

            <a href="<?php echo get_home_url().'/show-category-parent?cat='.$cat_p->cat_ID;?>"><?php echo $cat_p->name;?></a> <img alt="arrow" src="http://www.khmer24.com/components/com_adsmanager/images/arrow.png"/> 

            <?php

            }

            ?>

            <a href=""><?php echo $cat_child->name;?></a></div>

            <h1 style="color:#000" class="contentheading">

		              <img alt="default" src="<?php echo get_stylesheet_directory_uri();?>/images/default.gif" class="imgheading"/><?php echo $cat_child->name;?>

            </h1> 
                    <?php
                         $args=array(
                            'taxonomy' => 'category',
                            'parent' =>$cat_id,
                            'hide_empty' => '0',
                            );
                            $menu_list = '';
                            $count=0;
                            $categories=get_categories($args);
                            if($categories!=""){
                                $co=0;
                                foreach($categories as $category){
                                    if($category->category_parent==$cat_id){
                                    $co=1;
                                    }
                                }
                                
                                if($co==1){
                                
                            ?>
                            <div class="adsmanager_subcats">
                             <table id="table_category" width="100%" cellspacing="0" cellpadding="6" border="0">
                                <tbody>
                                <?php

                                ?>
                            <?php
                                $showAll=1;
                                $catp=$_GET['catp'];
                                $menu_list.='<tr>';
                                if($catp==""){
                                    $menu_list.='<td width="25%"><a class="fieldvisited" href="'.get_home_url().'/show-category-childe/?cat='.$cat_id.'&catp="> All</a></td>';
                                }else{
                                    $menu_list.='<td width="25%"><a href="'.get_home_url().'/show-category-childe/?cat='.$cat_id.'&catp="> All</a></td>';
                                }
                                
                                foreach($categories as $category){
                                if($category->category_parent==$cat_id){
                                    if($showAll==1){
                                            if($catp==$category->cat_ID){
                                            $menu_list.='<td width="25%"><a class="fieldvisited" href="'.get_home_url().'/show-category-childe/?cat='.$cat_id.'&catp='.$category->cat_ID.'"> '.$category->name.' ('.$category->count.')</a></td>';
                                            }else{
                                            $menu_list.='<td width="25%" ><a href="'.get_home_url().'/show-category-childe/?cat='.$cat_id.'&catp='.$category->cat_ID.'"> '.$category->name.' ('.$category->count.')</a></td>';
                                            }                
                                         
                                         if($count==2){$menu_list.='</tr>';$count=0;$showAll=0;}
                                          $count++;
                                          
                                    }else{
                                        if($count==0){$menu_list.='<tr>'; $count++; }  
                                            if($catp==$category->cat_ID){
                                            $menu_list.='<td width="25%"><a class="fieldvisited" href="'.get_home_url().'/show-category-childe/?cat='.$cat_id.'&catp='.$category->cat_ID.'"> '.$category->name.' ('.$category->count.')</a></td>';
                                            }else{
                                            $menu_list.='<td width="25%" ><a href="'.get_home_url().'/show-category-childe/?cat='.$cat_id.'&catp='.$category->cat_ID.'"> '.$category->name.' ('.$category->count.')</a></td>';
                                            }
                                         if($count==4){$menu_list.='</tr>';$count=0;}
                                          $count++;
                                    }
                                }
                
                             }
                        echo $menu_list;
                        ?>
                         </tbody>
                        </table>
                        </div>
                        <?php
                        }
                        }
                        else{
                          $menu_list='';  
                        }
                    ?>     
           
                    <div class="filter_header" style="position:relative">

                <?php //dynamic_sidebar('header_sort');?>
            	<form id="formprice" method="post" action="<?php echo $current_url;?>">

            	Sort By : 

                 <select  name="sortby">

                

                <option value="newads"><?php echo single_cat_title('latest-ads');?></option>

                <option value="mosthitads">Most Hit Ads</option>

                </select>

                 <select id="sPrice" name="price">

                <option selected="selected" value="0">All prices</option>
                    <option value="0-50">1$ =&gt; 50$</option>
                    <option value="50-100">50$ =&gt; 100$</option>
                    <option value="100-300">100$ =&gt; 300$</option>
                    <option value="300-500">300$ =&gt; 500$</option>
                    <option value="500-1000">500$ =&gt; 1000$</option>
                    <option value="1000-3000">1000$ =&gt; 3000$</option>
                    <option value="3000-5000">3000$ =&gt; 5000$</option>
                    <option value="5000-10000">5000$ =&gt; 10000$</option>
                    <option value="10000-20000">10000$ =&gt; 20000$</option>
                    <option value="20000-50000">20000$ =&gt; 50000$</option>
                    <option value="50000-100000">50000$ =&gt; 100000$</option>
                    <option value="100000-500000">100000$ =&gt; 500000$</option>
                    <option value="500000-1000000">500000$ =&gt; 1000000$</option>
                </select>

            	  <select  name="adtype"><option selected="selected" value="">All ad types</option><option value="1">Sale</option><option value="2">Buy</option><option value="3">Other</option></select>	

            	</form>     
                
                <script type="text/javascript">
                 $(document).ready(function(){
                    $('#sPrice').change(function(){
                        $('#formprice').submit();
                    });
                });
                </script>             

            </div>
            
            
                <table id="adslist"><tbody>

             

             <?php

             global $post;

            $args = array('post_type'=>'post','posts_per_page' => 10, 'category_name' =>$cat_child->name,'paged'=>$paged);

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
            if($_POST){
                $p_price=$_POST['price'];
                $e_price=explode('-',$p_price);
                
                if($price>=intval($e_price[0]) && $price<= intval($e_price[1])){
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
                   	     	 	&#8226; 
                                     <?php echo  $cat_p->name;?>/
                                <?php echo $cat_child->name;?></a>
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
                       <td class="coldetail">
                         <?php echo mysql2date('j-M-Y',$post->post_date)?>
                         <br />
                         from
                         <br />
                        <a target="_blank" href=" <?php echo get_the_author_url($author);?>">  <?php echo get_the_author_meta('user_nicename',$author);?></a>
                        <br />
                       <?php echo_views($post->ID); ?> Hit(s)
                         </td>
                    </tr>
    
                 <?php
                 }
             }else{
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
               	     	 	&#8226; 
                                 <?php echo  $cat_p->name;?>/
                            <?php echo $cat_child->name;?></a>
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
                   <td class="coldetail">
                    <?php echo mysql2date('d-M-Y',$post->post_date)?>
                    <br />
                    from
                    <br />
                    <a target="_blank" href=" <?php echo get_the_author_url($author);?>">  <?php echo get_the_author_meta('user_nicename',$author);?></a>
                   <br />
                   <?php echo_views($post->ID); ?> Hit(s)
                   </td>
                </tr>

             <?php
             }
             
            }
            
            ?>
            


            </tbody></table>

            
            
        <p align="center">
                <?php 
                
                if($max_page==0) $max_page=1; 
                
                if($max_page==1){
                ?>
          
                <span class="pagenav">&lt;&lt;&nbsp;Start</span> 
                <span class="pagenav">&lt;&nbsp;Prev</span>
                
                <?php
                }else{
                ?>
          
                 <a class="pagenav" href="<?php echo $current_url.'&paged=0';?>">&lt;&lt;&nbsp;Start</a> 
                <a class="pagenav" href="<?php echo $current_url.'&paged='.($paged+1);?>">&lt;&nbsp;Prev</a>
                <?php   
                }
                
                
                for($i=0;$i<$max_page;$i++){
                 echo '<span class="pagenav" ><a href="'.$current_url.'&paged='.($i+1).'">'.($i+1).'</a></span>';
                }
                
                if($max_page==1){
                ?>
          
                <span class="pagenav">Next&nbsp;&gt;</span> 
                <span class="pagenav">End&nbsp;&gt;&gt;</span>
                
                <?php
                }else{
                ?>
                <a title="Next" class="pagenav" href="<?php echo $current_url.'&paged='.($paged+1);?>">Next&nbsp;&gt;</a> 
                <a title="End" class="pagenav" href="<?php echo $current_url.'&paged='.$max_page;?>">End&nbsp;&gt;&gt;</a>
                <?php
                }
                ?>
            </p>     
            
            
            
            
            
            
            
            
            
            
            </div>
            </div>
     
            
            
            
            
            
            
            
<div id="leftcolumn" style="min-height:3050px;">

    <?php get_sidebar('left');?>

</div>   

<div id="rightcolumn">

    <?php get_sidebar('right');?>

</div>

        

<?php get_footer();?>