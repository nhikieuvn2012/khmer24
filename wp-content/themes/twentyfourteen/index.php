<?php
get_header(); ?>
<div style="margin:5px 0; text-align:center">
     <?php dynamic_sidebar('ads_top');?>          
</div>
           
        <div id="contentwrapper">
            <div id="contentcolumn">
            <?php dynamic_sidebar('ads_content');?>
	           <h2 class="secion_h2">LATEST ADS</h2>
                <div class="latestad_box">
			<div class='adsmanager_box_module' align="center">
              <?php dynamic_sidebar('latest-ads');?>
		
            <div style="text-align:right; margin:0px 10px 10px 0px; font-weight:bold"><a href="<?php echo get_home_url().'/show-category-parent?cat=85';?>">View all latest ads</a>
            </div>
		</div>
	    </div>
    <div style='margin-top:10px'>
     <div class='Facebook-page'>
        <div class="fb-like" data-href="https://www.facebook.com/khmer24.com" data-width="630" data-show-faces="true" data-send="true"></div>
     </div>
    </div>
    <div id="front_location">
    	<h2 class="secion_h2">LOCATIONS</h2>
        <div class="locationContainer">
        
        <table border="0" width="100%"  cellpadding="5">
            <?php
            $args=array(
            'taxonomy' => 'category',
            'child_of' => '59',
            'hide_empty' => '0',
            'orderby' => 'term_order'
            );
            $menu_list = '';
            $count=0;
            $categories=get_categories($args);
            foreach($categories as $category) { 
               // echo var_dump($category);
                if($count==0){$menu_list.='<tr >';$count++;}                              
                $menu_list.='<td style="margin: 0px;padding: 0px;"><a href="'.get_home_url().'/result-search/show-location/?loca='.$category->cat_ID.'" class="linkLocation"> '.$category->name.'</a></td>';
                if($count==4) {$menu_list.='</tr>';$count=0;}
                $count++;
            }
            echo $menu_list;
        ?>
      
        </table>                        
 
        </div>
    </div>
    <table width="632" cellpadding="0" cellspacing="0">
    <tr><td width="316" style="padding-right:5px; vertical-align:top">
    <div id="front_location">
    	<h2 class="secion_h2">FEATURED ADS</h2>
        <div class="locationContainer">
            <?php dynamic_sidebar('feature-ads');?>
          
			
            
        </div>
    </div>
    </td><td width="316" style="padding-left:5px; vertical-align:top">
    <div id="front_location">
    	<h2 class="secion_h2">POPULAR ADS</h2>
        <div class="locationContainer">
            <?php dynamic_sidebar('popular-ads');?> 
        </div>
    </div>
    </td>
    </tr>
    </table>
			        
                                  
            </div>
            <?php echo get_sidebar('paging');?> 
        </div>
         
        <div id="leftcolumn" style="min-height:3050px;">
            <?php get_sidebar('left');?>
        </div>   
        <div id="rightcolumn">
            <?php get_sidebar('right');?>
        </div>
        

<?php
get_footer();
