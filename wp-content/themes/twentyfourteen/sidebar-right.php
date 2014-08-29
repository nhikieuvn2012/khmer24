            
<div class="mCategory">

 <div class="title">

<h2>Advertiser Login</h2>

 </div>

 <div class="mContainer_login">


<?php if(!is_user_logged_in()){?>
<form action="http://www.khmer24.com/index.php?option=com_comprofiler&amp;task=login" method="post" id="mod_loginform" style="margin:0px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="mod_login">
<tr><td><span id="mod_login_usernametext"><label for="mod_login_username">Username</label></span><br />
<input type="text" name="username" id="mod_login_username" class="inputbox" size="10" /><br />
<span id="mod_login_passwordtext"><label for="mod_login_password">Password</label></span><br /><input type="password" name="passwd" id="mod_login_password" class="inputbox" size="10" /><br />
<input type="hidden" name="op2" value="login" />
<input type="hidden" name="lang" value="english" />
<input type="hidden" name="force_session" value="1" />
<input type="hidden" name="return" value="http://www.khmer24.com/index.php?option=com_comprofiler" />
<input type="hidden" name="message" value="0" />
<input type="hidden" name="j5f890bd91774f40c6cfa1186aaa2c9de" value="1" />
<input type="checkbox" name="remember" id="mod_login_remember" class="inputbox" value="yes" /> <span id="mod_login_remembermetext"><label for="mod_login_remember">Remember me</label></span><br />
<input type="submit" name="Submit" class="button" value="Login" /></td></tr>
<tr><td><a href="http://www.khmer24.com/index.php?option=com_comprofiler&amp;task=lostPassword" class="mod_login">Lost Password?</a></td></tr>
<tr><td>No account yet? <a href="http://www.khmer24.com/index.php?option=com_comprofiler&amp;task=registers" class="mod_login">Register</a></td></tr>
</table></form>
<?php }?>
<?php if(!is_user_logged_in()){
   get_template_part('login'); 
    }
    else{
        wp_loginout(home_url() );
         echo " | ";
    $user_info = get_userdata(get_current_user_id());
      $username = $user_info->user_login;
      echo  $username;
    }
?>


 </div>

</div><!--Module Container-->

            <div style="text-align:center; padding:3px 0">
                <div id="shortcut">
                    <?php dynamic_sidebar('ads_sidebar_right');?>
                </div>





            </div>