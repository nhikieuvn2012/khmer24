
     <div class="footer_ad" style="clear:both; text-align:center; margin-top:10px">


<script type="text/javascript"><!--
google_ad_client = "ca-pub-7558004659609357";
/* 728x90, created 7/5/09 */
google_ad_slot = "7657155061";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>js/show_ads.js">
 </script><ins style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><ins id="aswift_0_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><iframe width="160" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;" __idm_frm__="4"></iframe></ins></ins>

        </div> 
<div id="footerdd" style="height:125px; width:1000px; background:#FFFFFF url(http://www.khmer24.com/templates/khmer24/images/cambodia_bg.jpg) no-repeat; margin-top:50px;position:relative; font-size:11px">
            <div style="position:absolute;bottom:8px; left:10px; width:400px; color:#FFFFFF">
                <?php
                    $menu_name = 'footer-menu';
                      if (($locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        
                            $menu_items = wp_get_nav_menu_items($menu->term_id);
        
                            $menu_list = '';
                            $count=1;
                            $count_item=count($menu_items);
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                 if($menu_item->menu_item_parent==0){
                                    if($count!=$count_item){
                                         $menu_list .='<a href="'.$menu_item->url.'"  title="'.$menu_item->title.'" style="color:#ffffff;padding-right:3px;">'.$menu_item->title.'</a>|';
                                        }
                                        else{
                                            $menu_list .='<a href="'.$menu_item->url.'"  title="'.$menu_item->title.'" style="color:#ffffff;padding-left:3px;">'.$menu_item->title.'</a>';
                                        }
                                }
                                $count++;
                            }
                            echo $menu_list;
                        }
                ?>
            </div>
            <div style="position:absolute;bottom:8px; width:400px; right:10px; text-align:right; color:#FFFFFF">
                  Copyright &copy;2011 KHMER24 (Cambodia). All rights reserved. 
            </div>
        </div>
    </div>


	</div>
</div>


<div id="leftcolumn_main">
<?php dynamic_sidebar('ads_left');?>


</div>

<div id="rightcolumn_main">
<!--Righ--> <?php dynamic_sidebar('ads_right');?>
</div>
<div class="clear"></div>
</div>

<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.lazyload.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8">
      $(function() {
          $("img.lazy").lazyload({
              effect : "fadeIn"
          });
          $("img.lazy1").lazyload({
              effect : "fadeIn"
          });
      });
	
  </script>

</body>
</html><!-- 1395367145 -->
