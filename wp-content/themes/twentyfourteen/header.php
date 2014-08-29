
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<title>
    <?php
        if(is_home()){
            echo "Khmer24 Free Marketplace in Cambodia";
        }
        else{
            $cat_parent_id=$_GET['cat'];
            
             $cat_parent=get_category($cat_parent_id);

            echo $cat_parent->name;
        }
    ?>
</title>
<meta name="description" content="Khmer24 Marketplace (www.khmer24.com) is the leading consumer-to-consumer (C2C) online marketplace in Camboda. With thousands of product listings and more than 40,000 registered users, Khmer24 Marketplace is the primary online shopping for Cambodian." />
<meta name="keywords" content="khmer24, khmer24.com, classifieds, used car, flat to rent, used, second hand, free ads, bargains, buy, sell, exchange, rent, buying, property, accommodation, flats, houses, rooms, lettings, motors, cars, motorbikes,mobile phones" />
<meta name="robots" content="index, follow" />
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery-1.7.2.min.js"></script>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon1.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:type" content="website" />
<meta property="og:image" content="http://www.khmer24.com/templates/khmer24/images/logo.gif" />
<meta property="og:url" content="http://www.khmer24.com/" />
<meta property="og:site_name" content="Khmer24.com" />
<meta property="fb:app_id" content="217361691621555" />
<link href="<?php echo get_stylesheet_directory_uri();?>/css/06_june_2013_outer.css" rel="stylesheet" type="text/css" />


<script>
$(document).ready(function(){
  $("#watchlist").click(function(){
    $.get("http://www.khmer24.com/index2.php",
		{option:'com_adsmanager',page:'add_fovorite',no_html:'1',action:'true',adid:''},
		function(data,status){if (data == 1){
				$("#watchlist").removeClass("watchlistadd");
				$("#watchlist").addClass("watchlistdelete");
			 	$("#watchlist").text("Remove From Watchlist");
			}else if(data == 0){
				$("#watchlist").removeClass("watchlistdelete");
				$("#watchlist").addClass("watchlistadd");
			 	$("#watchlist").text("Save To Watchlist");
			}
      		//alert("Data: " + data + "\nStatus: " + status);
    	}
	);
	
  });

});

$(function () {
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
  var scr_float = screen.width;
  if (!msie6 && (scr_float >= 1280)) {
    var top = $('#fixedfloat').offset().top - parseFloat($('#fixedfloat').css('margin-top').replace(/auto/, 0));
    $(window).scroll(function (event) {
      // what the y position of the scroll is
      var y = $(this).scrollTop();
      // whether that's below the form
      if (y >= top) {
        // if so, ad the fixed class
        $('#fixedfloat').addClass('fixed');
      } else {
        // otherwise remove it
        	$('#fixedfloat').removeClass('fixed');
      }
    });
  }  
});

</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9169607-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=217361691621555";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="maincontainer_main">
<div id="contentwrapper_main">
    <div id="contentcolumn_main">
    <div id="maincontainer">

    	<div class="topnavsection">
        	<div class="topnavleft">
            	<ul class="top-nav-left">
                    <li class="tnl-wel">Welcome to Khmer24!</li>
                    <li class="tnl-join"><strong><a href="http://localhost/wp/khmer24/register/" title="Click here to register a new account">Join Free</a></strong></li>
                    <li class="tnl-split"></li>
                    <li><a href="http://localhost/wp/khmer24/login/">Log In</a></li>                    
                </ul> 
            </div>
        	<div class="topnavright">
            	<ul class="top-nav-right">
                    <li class="tnl-post"><strong><a href="http://www.khmer24.com/index.php?option=com_adsmanager&amp;page=write_ad&amp;Itemid=11">&gt;&gt; Post Free Ads Now</a></strong></li>
                   <li class="tnl-split"></li>
                    <li><a href="http://www.khmer24.com/index.php?option=com_comprofiler&amp;Itemid=14">Manage my ads</a></li>
                </ul>             
            </div>
        </div>
        <div id="topsection">
        <!--Header-->
         <div id="headerWrapper" style="height:100px">
            <div id="logo" style="padding-top:8px">
                <a href="<?php echo get_home_url(); ?>" title="<?php echo get_bloginfo();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/khmer24.gif" width="195" height="70" /></a>
            </div>
            <div id="toppaidad" style="position:absolute; top:5px; right:0px; width:650px; height:90px">
             <a href="http://banner.khmer24.com/rd.php?id=63" style="border:none">
                 <img src="<?php echo get_stylesheet_directory_uri();?>/images/atiker.gif" style="border:none" alt="ATIKER" width="650" height="80" />
                </a>
            </div>
    
            
         </div> 
         <div id="menuWrapper">
                     <div id="mainMenu">
                         <?php // wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                         <ul>
                     <?php
  
                        $menu_name = 'main-menu';
                        
                        if (($locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                        	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                        	$menu_items = wp_get_nav_menu_items($menu->term_id);
                   	        $menu_list = '';
                        	foreach ( (array) $menu_items as $key => $menu_item ) {  
                        	   if($menu_item->menu_item_parent==0){
                                 $menu_list .='<li><a href="'.get_home_url().'/show-category-childe?cat='.$menu_item->object_id.'" title="'.$menu_item->title.'" class="mainlevel" >'.$menu_item->title.'</a>';
                                }
                            }
                         }

                            echo $menu_list;
        
                        ?> 
                        </ul>
                    <br class="clear" />
                 </div>
            <div style="background-color:#266fc0; height:5px; border-bottom:2px solid #2167b4"></div>     
            <div id="search">
            
                <?php dynamic_sidebar('heard_search');?>
             </div> 
         </div>
     <!--//end Header-->    
    
        </div>
        
        
        
      