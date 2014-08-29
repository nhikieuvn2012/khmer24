<?php
/**
 * Template Name: Pricacy Policy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header();
 $post=get_post();
 ?>
 
 <div id="contentwrapper">
     <div id="contentcolumn">
        <?php dynamic_sidebar('ads_content1');?>
        <table class="contentpaneopen">
            <tbody>
                <tr>
                    <td valign="top" colspan="2">
                        <h2><?php echo $post->post_title;?></h2>
                        <?php echo $post->post_content;?>
                    </td>
                    
                </tr>
                <tr><td class="modifydate" align="left" colspan="2">Last Updated (<?php the_modified_date('l F j, Y');?>) </td></tr>
            </tbody>
        </table>
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
 ?>