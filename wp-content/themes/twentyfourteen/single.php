<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header(); 

$post=get_post();?>
    <div id="contentwrapper">
    <div id="contentcolumn">
       <?php dynamic_sidebar('ads_content1');?>
       <div class="adsmanager_pathway">
       <?php
        $category= get_the_category($post->ID);
        foreach($category as $cat){
        $cat_parent_id=$cat->category_parent;
        //echo var_dump($cat_parent_id);
        $cat_p=get_category($cat_parent_id);
        }
       ?>
       <a href="<?php get_home_url();?>">Home</a> <img alt="arrow" src="http://www.khmer24.com/components/com_adsmanager/images/arrow.png"> 
       <a href="<?php echo get_home_url().'/show-category-parent?cat='.$cat_p->cat_ID;?>"><?php echo $cat_p->name;?></a> 
       <img alt="arrow" src="http://www.khmer24.com/components/com_adsmanager/images/arrow.png"><a href=""><?php echo $cat->cat_name;?></a>	
       <?php
       ?>
    </div>
    <div class="box">
        <div class="innerbox">
            <h1>
                <span itemprop="name">
                    <?php echo $post->post_title;?>
                </span>
            </h1>
            <div class="ad_more_detail">
                <ul>
                    <li>
                        AD ID:<?php echo $post->ID;?>
                    </li>
                    <li>
                        Posted On: <?php echo $post->post_date;?>
                    </li>
                    <li>
                        View:  <?php echo_views($post->ID); ?>
                    </li>
                </ul>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td width="450" valign="top">
                            <div itemprop="description">
                                <p class="ad_description">
                                <?php echo $post->post_content;?>
                                </p>
                                <br/>
                                <span class="price">
                                    <?php
                                    $price = get_post_meta($post->id,'prices',true);
                                    
                                    ?>
                                    <strong>Price : <span itemprop="price"><?php echo $price;?></span>$</strong>
                                </span>
                                <div style="padding:10px 0;">                                    
                                    <div data-send="true" data-show-faces="false" data-action="recommend" data-width="400" data-href="https://www.facebook.com/khmer24.com" class="fb-like"></div>
                                </div>
                            </div>
                        </td> 
                        <td width="150" valign="top" align="center">
                	       <div id="gallery">
                           <?php
                           $gallery=get_post_meta($post->ID,'gallery',true);
                           ?>
					           <div style="margin-bottom:10px">
                                <?php
                                if($gallery!=""){
                                    foreach($gallery as $gal){
                    
                                        ?>
                                         <a title="<?php echo $post->post_title;?>" href="<?php echo wp_get_attachment_url($gal);?>">
                                            <img alt="" itemprop="image" src="<?php echo wp_get_attachment_url($gal);?>"/>
                                        </a>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                    <a title="<?php echo $post->post_title;?>" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>">
                                        <img alt="" itemprop="image" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>"/>
                                    </a>
                                    <?php
                                }
                                
                                ?>
                               </div>
                               
                               </div>					
                            </div>
                     </td>
                    </tr>
                 </tbody>
             </table>
             <div class="ad_detail_contact">
                <div class="ad_detail_secsion"> CONTACT DETAIL </div>
                <table width="100%" cellpadding="2">
                    <tbody>
                    <tr>
                        <td class="ad_detail_field">Name</td>
                        <td>
                            <?php $current_user=$post->post_author;
                                  $name= get_the_author_meta( 'first_name',$current_user);
                                   $email= get_the_author_meta( 'user_email',$current_user);
                                  $phone=get_user_meta($current_user,'phone',true);
                            ?>
                            
                            <span itemprop="seller">: <?php echo $name; ?> </span>
                        </td>
                       
                    </tr>
                     <tr>
                            <td class="ad_detail_field">Tel</td>
                            <td>: <?php echo $phone;?> </td>
                        </tr>
                        <tr>
                            <td class="ad_detail_field">
                               Email
                            </td>
                            <td>
                                <?php
                                    //$current_user1 = wp_get_current_user();
                                   // $last_login=get_last_login($current_user);
                                    //var_dump($last_login);
                                ?>
                                 : <?php echo $email;?>
                            </td>
                        </tr>
                        
                         <tr>
                            <td class="ad_detail_field">Location</td>
                            <td>
                                <?php 
                                    $location=get_user_meta($current_user,'location',true);
                                ?>
                                : <?php echo $location;?>
                            </td>
                        </tr>
                        <tr>
                            <td class="ad_detail_field">Address </td>
                            <td>
                                
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
             </div>  
             <div class="ad_detail_contact">
                <div class="ad_detail_secsion"> MEMBER DETAIL </div>
                    <table width="100%" cellpadding="2">
                        <tbody>
                            <tr>
                                <td class="ad_detail_field">
                                    Posted By
                                </td>
                                <td>
                                    <?php //$nice_name= the_author_meta( 'user_nicename' , $current_user);?>
                                   <a href="<?php echo get_author_posts_url( $current_user ); ?>"><?php echo the_author_meta( 'user_nicename' , $current_user); ?></a>

                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="ad_detail_field">
                                    Member since
                                </td>
                                <td>
                                <?php //mysql2date('j M Y', $post->post_date);?>
                                    : <?php echo mysql2date('j M Y',the_author_meta('user_registered',$current_user));?>
                                </td>
                            </tr>
                            <tr>
                                <td class="ad_detail_field">Last Login</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="ad_detail_field">Yahoo Status</td>
                                <td><a href="http://edit.yahoo.com/config/send_webmesg?.nhanduyen_0806.src=pg" target="_blank"><img border="0" src="http://opi.yahoo.com/online?u=nhanduyen_0806&m=g&t=2" /></a></td>
                            </tr>
                            <tr>
                                <td class="ad_detail_field">Member Store</td>
                                <td>
                                    <a href="<?php echo get_author_posts_url($current_user);?>"><?php echo get_author_posts_url($current_user);?></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
             </div>
             
             <div class="ad_detail_action">
    	<ul class="ad_action">
        	<li><a href="javascript:history.go(-1)"><span id="back">Back</span></a></li>
                    	<li>
                <a href="http://www.khmer24.com/index.php?option=com_adsmanager&amp;page=do_savedad&amp;Itemid=11&amp;mosmsg=Please login to Save Ad to Watch list">
       		   <span class="watchlistadd" id="watchlist">Save To Watchlist</span>
                  
             </a>
             </li>
             <li style="padding:3px 0px 0px 15px">
                <div>
                    <?php dynamic_sidebar('like_face');?>
                </div>
            </li>
            <li style="padding:2px 0px 0px 15px">
<!-- Place this tag where you want the +1 button to render. -->
<div style="text-indent: 0px; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px;" id="___plusone_0"><iframe width="100%" scrolling="no" frameborder="0" hspace="0" marginheight="0" marginwidth="0" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" id="I0_1396259900475" name="I0_1396259900475" src="https://apis.google.com/u/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=http%3A%2F%2Fwww.khmer24.com&amp;url=http%3A%2F%2Fwww.khmer24.com%2Fad%2Fdrinking-water-machine-for-sale%2F67-248486.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi._lTW_-Ozw6k.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Fz%3Dzcms%2Frs%3DAItRSTNESnCRokxp6B7OWgbxMsEnbli8vA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1396259900475&amp;parent=http%3A%2F%2Fwww.khmer24.com&amp;pfname=&amp;rpctoken=33869144" data-gapiattached="true" title="+1"></iframe></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
            </li>

        </ul>
        <div class="clear">&nbsp;</div>
    </div>
        </div>
    </div>
    </div>
    </div>
      
        <div id="leftcolumn" style="min-height:3050px;">
            <?php get_sidebar('left');?>
        </div>   
        <div id="rightcolumn">
            <?php get_sidebar('right');?>
        </div>
        

<?php
get_footer();
