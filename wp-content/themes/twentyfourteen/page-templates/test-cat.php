<?php

/**

 * Template Name: test cat

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */

 get_header(); 

 $cat_parent_id=$_GET['cat'];

 $cat_parent=get_category($cat_parent_id);
 
 global $wp_query;
$max_page=$wp_query->max_num_pages;
$current_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

 ?>

 

     <div id="contentwrapper">

        <div id="contentcolumn">

            <?php dynamic_sidebar('ads_content1');?>

            <div class="adsmanager_pathway">

            <a href="<?php echo get_home_url();?>">Home</a> <img alt="arrow" src="http://www.khmer24.com/components/com_adsmanager/images/arrow.png"/> 

            <a href=""><?php echo $cat_parent->name;?></a></div>

            <h1 style="color:#000" class="contentheading">

		              <img alt="default" src="<?php echo get_stylesheet_directory_uri();?>/images/default.gif" class="imgheading"/><?php echo $cat_parent->name;?>

            </h1>  

            <div class="adsmanager_subcats">

            <table id="table_category" width="100%" cellspacing="0" cellpadding="6" border="0">

            <tbody>

            <?php

                    $args=array(
                    'taxonomy' => 'category',
                    'child_of' =>$cat_parent_id,
                    'hide_empty' => '0',
                    );

                    $menu_list = '';
                    $count=0;
                    $categories=get_categories($args);

                    /*foreach($categories as $category) { 

                        if($count==0){$menu_list.='<tr>'; $count++; }                         

                        $menu_list.='<td width="30%"><a href="'.get_home_url().'/show-category-childe/?cat='.$category->cat_ID.'"> '.$category->name.'</a></td>';

                        echo var_dump($category); 

                          if($count==3){$menu_list.='</tr>';$count=0;}

                          $count++;

                    }

                    echo $menu_list;*/

                    

                foreach($categories as $category) { 
                    
                $isChild=0;
                if($category->category_parent==$cat_parent_id){
                if($count==0){$menu_list.='<tr>'; $count++; }  
                 $menu_list.='<td width="30%"><a href="'.get_home_url().'/show-category-childe/?cat='.$category->cat_ID.'"> '.$category->name.'</a></td>';
                 if($count==3){$menu_list.='</tr>';$count=0;}
                          $count++;
                }

            }

            echo $menu_list;

        ?>

      

            </tbody>

            </table>

            </div>

            

            <div class="filter_header" style="position:relative">

                <?php// dynamic_sidebar('header_sort');?>

            	<form id="formprice" method="post" action="<?php echo $current_url;?>">

            	Sort By : 

                 <select id="sortby" name="sortby">
                 
                 <?php
                 /*
                    $args=array(
                    'taxonomy' => 'category',
                    'child_of' => '137',
                    'hide_empty' => '0',
                    );
                    $categories=get_categories($args);
                    foreach($categories as $cat){
                        echo '<option value="'.$cat->slug.'">'.$cat->name.'</option>';
                    }
                 */
                 ?>
                 <?php
                    $sortby=$_POST['sortby'];
                 ?>
                    <option value="" <?php if($sortby==''){ echo 'selected="true"';};?> >Latest Ads</option>
                    <option value="1" <?php if($sortby=='1'){echo 'selected="true"';};?> >New Ads</option>
                    <option value="2" <?php if($sortby=='2'){echo 'selected="true"';};?>>Most Hit Ads</option>
                </select>

                 <select id="sPrice" name="price">
                 <?php $price=$_POST['price'];?>
                <option selected="selected" value="">All prices</option>
                    <option value="0-50" <?php if($price=="0-50"){echo 'selected="true"';};?> >1$ =&gt; 50$</option>
                    <option value="50-100" <?php if($price=="50-100"){echo 'selected="true"';};?>>50$ =&gt; 100$</option>
                    <option value="100-300" <?php if($price=="100-300"){echo 'selected="true"';};?>>100$ =&gt; 300$</option>
                    <option value="300-500" <?php if($price=="300-500"){echo 'selected="true"';};?>>300$ =&gt; 500$</option>
                    <option value="500-1000" <?php if($price=="500-1000"){echo 'selected="true"';};?>>500$ =&gt; 1000$</option>
                    <option value="1000-3000" <?php if($price=="1000-3000"){echo 'selected="true"';};?>>1000$ =&gt; 3000$</option>
                    <option value="3000-5000" <?php if($price=="3000-5000"){echo 'selected="true"';};?>>3000$ =&gt; 5000$</option>
                    <option value="5000-10000" <?php if($price=="5000-10000"){echo 'selected="true"';};?>>5000$ =&gt; 10000$</option>
                    <option value="10000-20000" <?php if($price=="10000-20000"){echo 'selected="true"';};?>>10000$ =&gt; 20000$</option>
                    <option value="20000-50000" <?php if($price=="20000-50000"){echo 'selected="true"';};?>>20000$ =&gt; 50000$</option>
                    <option value="50000-100000" <?php if($price=="50000-100000"){echo 'selected="true"';};?>>50000$ =&gt; 100000$</option>
                    <option value="100000-500000" <?php if($price=="100000-500000"){echo 'selected="true"';};?>>100000$ =&gt; 500000$</option>
                    <option value="500000-1000000" <?php if($price=="500000-1000000"){echo 'selected="true"';};?>>500000$ =&gt; 1000000$</option>
                </select>

            	  <select id="adtype"  name="adtype">
                      <option selected="selected" value="">All ad types</option>
                 <?php
                    $args=array(
                    'taxonomy' => 'category',
                    'child_of' => '137',
                    'hide_empty' => '0',
                    );
                    $categories=get_categories($args);
                    foreach($categories as $cat){
                        echo '<option value="'.$cat->cat_ID.'">'.$cat->name.'</option>';
                    }
                 ?>
                  </select>	

            	</form>     
                
                <script type="text/javascript">
                 $(document).ready(function(){
                    $('#sPrice').change(function(){
                        $('#formprice').submit();
                    });
                    
                    $('#sortby').change(function(){
                        $('#formprice').submit();
                    });
                    
                    $('#adtype').change(function(){
                        $('#formprice').submit();
                    });
                    
                });
                </script>         

            </div>
<table id="adslist">
<?php
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

                    $args=array(
                    'taxonomy' => 'category',
                    'parent' =>$cat_parent_id,
                    'hide_empty' => '0',
                    );

                    $menu_list = '';
                    $count=0;
                    $categories=get_categories($args);
                    
       foreach( $categories as $category) {
            

                $sortby=$_POST['sortby'];
                $adtype=$_POST['adtype'];
                if($sortby==''){
                   $posts=get_posts('cat='.$category->cat_ID);
                }
                else if($sortby=='' && $adtype!='')
                {
                    $posts=get_posts('cat='.$category->cat_ID.','.$adtype);
                }
                else if($sortby=='1'){
                    $posts=get_posts('cat='.$category->cat_ID.','.$adtype.'&orderby=menu_order&order=DESC,');
                }
                else if($sortby=='2'){
                    $posts=get_posts('cat='.$category->cat_ID.','.$adtype.'&orderby=menu_order&order=ASC');
                }else{
                     $posts=get_posts('cat='.$category->cat_ID.','.$adtype);
                }
                   
            
            foreach($posts as $post){
            setup_postdata(get_post( $post->ID));
            $price=get_post_meta($post->ID,'prices',true);
            
            $p_price=$_POST['price'];
            $str_price=explode('-',$p_price);
            

            if($_POST['price']!=""){
                if($price>=intval($str_price[0]) && $price<=intval($str_price[1])){
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
                                <?php echo  $cat_parent->name;?>/
                                <?php echo $category->name;?></a>
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
                                <p class="short_desc"><?php echo get_excerpt(150);?>Tel:<i>
                                        <?php
                                            $author=$post->post_author;                             
                                            $phone=get_user_meta($author,'phone',true);
                                            echo $phone;
                                        ?></i>
                                </p>
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
                                <?php echo  $cat_parent->name;?>/
                                <?php echo $category->name;?></a>
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
                                <p class="short_desc"><?php echo get_excerpt(150);?>Tel:<i>
                                        <?php
                                            $author=$post->post_author;                             
                                            $phone=get_user_meta($author,'phone',true);
                                            echo $phone;
                                        ?></i>
                                </p>
                       </td>
                    </tr>
            <?php
                }
            wp_reset_postdata();
            }
        }
?>
</table>

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