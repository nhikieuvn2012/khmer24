
            <div class="mCategory">
 <div class="title">
<h2>Category</h2>
 </div>
 <div class="mContainer">
        <ul id="category">
        
        <script type="text/javascript">
        $(document).ready(function(){
            $('.menulitem').hide();
            
            <?php
                if($_GET){
                    if(isset($_GET['show'])){
                        $txts=$_GET['show'];
                        echo "$('#$txts').show();";
                    }
                }else{
                        echo "$('.menulitem').hide();";
                }
            ?>
            $('.menul').click(function(){
               var txtId=this.id;
               $('#'+txtId+'item').toggle(500);
            });
        });
        </script>
             <?php
  
                        $menu_name = 'left-menu';
                        if (($locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                        	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                        	$menu_items = wp_get_nav_menu_items($menu->term_id);
                   	        $menu_list = '';
                            $count=0;
                            
                        	foreach ( (array) $menu_items as $key => $menu_item ) {  
                        	   if($menu_item->menu_item_parent==0){
                    	         
                	             $count++;
                                 $txts='menul'.$count.'item';
                                 $menu_list .='<li class="menul" id="menul'.$count.'"><a href="'.get_home_url().'/show-category-parent?cat='.$menu_item->object_id.'&show='.$txts.'" title="'.$menu_item->title.'" class="mainlevel" >'.$menu_item->title.'</a>';
                                 $menu_list.='<div id="menul'.$count.'item" class="menulitem">';
                                 $id_p=$menu_item->ID;
                                    foreach ( (array) $menu_items as $key => $menu_item_p ) {
                                        if($menu_item_p->menu_item_parent==$id_p){
                                            $txts='menul'.$count.'item';
                                           $menu_list.='<div><a class="sublevel" href="'.get_home_url().'/show-category-childe?cat='.$menu_item_p->object_id.'&show='.$txts.'">' .$menu_item_p->title. '</a></div>'; 
                                        }
                                    }
                                    $menu_list.='</div></li>';
                                }
                            }
                         }

                            echo $menu_list;
        
                        ?>  
                    
                </ul>
 </div>
</div><!--Module Container-->
<div style="text-align:center;">
    <?php dynamic_sidebar('ads_sidebar_left');?>
    <div style="margin-bottom:3px">
    <script type="text/javascript"><!--
    google_ad_client = "ca-pub-7558004659609357";
    /* 160x600, created 11/17/08 */
    google_ad_slot = "4679251537";
    google_ad_width = 160;
    google_ad_height = 600;
    //-->
    </script>
    <script type="text/javascript"
    src="//pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
    </div>
</div>
<div class="fixedfloatWrapper">
<div id="fixedfloat">
<?php dynamic_sidebar('fixedfloat');?>    		
<div class="mCategory">
 <div class="title">
<h2>Online Visitors</h2>
 </div>
 <?php
$user_count = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->users;");
$user_count_ol = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->useronline;");?>
 <div class="mContainer_login">We have <?php echo $user_count;?>  guests and <?php echo $user_count_ol; ?> members online</div>
</div> 
</div>
</div>
            <div class="clear">&nbsp;</div>
        