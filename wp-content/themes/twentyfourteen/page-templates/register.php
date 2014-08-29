<?php
/**
 * Template Name: Register
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header();
 ?>
 
 <div style="margin:5px 0; text-align:center">
     <?php dynamic_sidebar('ads_top');?>          
 </div>
  <div id="contentwrapper">
    <div id="contentcolumn">
                       
                     <link href="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/template.css" rel="stylesheet" type="text/css">
<script type="text/javascript">var cbTemplateDir="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/"</script>
<script src="http://www.khmer24.com/components/com_comprofiler/js/cb.js" type="text/javascript"></script>
<script src="components/com_comprofiler/js/overlib_mini.js" type="text/javascript"></script>
<script src="components/com_comprofiler/js/overlib_hideform_mini.js" type="text/javascript"></script><script type="text/javascript">
&lt;!--
function olMouseMove(e){var e=(e)?e:event;
if(e.pageX){o3_x=e.pageX;o3_y=e.pageY;}else if(e.clientX){o3_x=eval('e.clientX+o3_frame.'+docRoot+'.scrollLeft');o3_y=eval('e.clientY+o3_frame.'+docRoot+'.scrollTop')}
if(o3_allowmove==1)runHook("placeLayer",FREPLACE) {runHook("placeLayer",FREPLACE);if(olHideForm)hideSelectBox();f(hoveringSwitch&amp;&amp;!olNs4&amp;&amp;runHook("cursorOff",FREPLACE)){(olHideDelay?hideDelay(olHideDelay):cClick());hoveringSwitch=!hoveringSwitch}}
//--&gt;
</script>

<script src="components/com_comprofiler/js/overlib_anchor_mini.js" type="text/javascript"></script>
<script src="components/com_comprofiler/js/overlib_centerpopup_mini.js" type="text/javascript"></script>
<script type="text/javascript">overlib_pagedefaults(WIDTH,250,VAUTO,RIGHT,AUTOSTATUSCAP, CSSCLASS,TEXTFONTCLASS,'cb-tips-font',FGCLASS,'cb-tips-fg',BGCLASS,'cb-tips-bg',CAPTIONFONTCLASS,'cb-tips-capfont', CLOSEFONTCLASS, 'cb-tips-closefont');</script>
<script type="text/javascript">Calendar = function () { };</script>
<script src="http://www.khmer24.com/components/com_comprofiler/plugin/language/default_language/calendar-locals.js" type="text/javascript"></script>
<script src="http://www.khmer24.com/components/com_comprofiler/js/calendardateinput.js" type="text/javascript"></script><style>
td.calendarDateInput {letter-spacing:normal;line-height:normal;font-family:Tahoma,Sans-Serif;font-size:11px;text-align:center;vertical-align:middle;margin:0px;padding:0px;}
td.calendarDayInput {letter-spacing:normal;line-height:normal;font-family:Tahoma,Sans-Serif;font-size:14px;text-align:center;vertical-align:middle;}
select.calendarDateInput {letter-spacing:.06em;font-family:Verdana,Sans-Serif;font-size:11px;}
input.calendarDateInput {letter-spacing:.06em;font-family:Verdana,Sans-Serif;font-size:11px;}
#cb_datetestb_Current_ID {text-align:center;}
</style>

<script src="http://www.khmer24.com/components/com_comprofiler/js/tabpane.js" type="text/javascript"></script>
<script src="includes/js/mambojavascript.js" type="text/javascript"></script>
<script type="text/javascript">&lt;!--//--&gt;&lt;![CDATA[//&gt;&lt;!--
var cbDefaultFieldBackground;
function submitbutton(mfrm) {
	var me = mfrm.elements;
	var r = new RegExp("[\&lt;|\&gt;|\"|\'|\%|\;|\(|\)|\&amp;|\+|\-|\@|\ |\:|\!|\*]", "i");

	var errorMSG = '';
	var iserror=0;
	if (cbDefaultFieldBackground === undefined) cbDefaultFieldBackground = ((me['username'].style.getPropertyValue) ? me['username'].style.getPropertyValue("backgroundColor") : me['username'].style.backgroundColor);
	if (me['username'].value == "") {
		errorMSG += "Please enter a User name.\n";
		me['username'].style.backgroundColor = "red";
		iserror=1;
	} else if (r.exec(me['username'].value) || (me['username'].value.length &lt; 3)) {
//dy conditiion
		errorMSG += "Please enter a valid Username:.  No spaces, more than 2 characters and contain 0-9,a-z,A-Z\n";
		me['username'].style.backgroundColor = "red";
		iserror=1;
	} else if (me['username'].style.backgroundColor.slice(0,3)=="red") { me['username'].style.backgroundColor = cbDefaultFieldBackground;
	} if (r.exec(me['password'].value) || (me['password'].value.length &lt; 6)) {
		errorMSG += "Please enter a valid Password:.  No spaces, more than 6 characters and contain 0-9,a-z,A-Z\n";
		me['password'].style.backgroundColor = "red";
		iserror=1;
	} else if ((me['password'].value != "") &amp;&amp; (me['password'].value != me['verifyPass'].value)){
		errorMSG += "Password and verification do not match, please try again.\n";
		me['password'].style.backgroundColor = "red"; me['verifyPass'].style.backgroundColor = "red";
		iserror=1;
	} else {
		if (me['password'].style.backgroundColor.slice(0,3)=="red") me['password'].style.backgroundColor = cbDefaultFieldBackground;
		if (me['verifyPass'].style.backgroundColor.slice(0,3)=="red") me['verifyPass'].style.backgroundColor = cbDefaultFieldBackground;
	}
	// loop through all input elements in form
	for (var i=0; i &lt; me.length; i++) {
		// check if element is mandatory; here mosReq="1"
		if ( (typeof(me[i].getAttribute('mosReq')) != "undefined") &amp;&amp; ( me[i].getAttribute('mosReq') == 1) ) {
			if (me[i].type == 'radio' || me[i].type == 'checkbox') {
				var rOptions = me[me[i].getAttribute('name')];
				var rChecked = 0;
				if(rOptions.length &gt; 1) {
					for (var r=0; r &lt; rOptions.length; r++) {
						if (rOptions[r].checked) {
							rChecked=1;
						}
					}
				} else {
					if (me[i].checked) {
						rChecked=1;
					}
				}
				if(rChecked==0) {
					// add up all error messages
					errorMSG += me[i].getAttribute('mosLabel') + ' : This field is required!\n';
					// notify user by changing background color, in this case to red
					me[i].style.backgroundColor = "red";
					iserror=1;
				} else if (me[i].style.backgroundColor.slice(0,3)=="red") me[i].style.backgroundColor = cbDefaultFieldBackground;
			}
			if (me[i].value == '') {
				// add up all error messages
				errorMSG += me[i].getAttribute('mosLabel') + ' : This field is required!\n';
				// notify user by changing background color, in this case to red
				me[i].style.backgroundColor = "red";
				iserror=1;
			} else if (me[i].style.backgroundColor.slice(0,3)=="red") me[i].style.backgroundColor = cbDefaultFieldBackground;
		}
	}
	if(iserror==1) {
		alert(errorMSG);
		return false;
	} else {
		return true;
	}
}

        var cbUnameXhttp;
    var cbLastUsername = '';
    
    function cbSendUsernameCheck(meButton) {
    	var r = new RegExp("[\&lt;|\&gt;|\"|\'|\%|\;|\(|\)|\&amp;|\+|\-|\@|\ |\:|\!|\*]", "i");
    	var myFormEls = cbParentForm(meButton).elements;
    	var usernameVal = myFormEls['username'].value;
    	if (usernameVal == cbLastUsername) {
    		return false;
    	}
    	cbLastUsername = usernameVal;
    
    	if (usernameVal.length == 0) {
    		document.getElementById('usernameCheckResponse').innerHTML = '';
    		return false;
    	}
    	if (r.exec(usernameVal) || (usernameVal.length &lt; 3)) {
    		document.getElementById('usernameCheckResponse').innerHTML = '';
    		alert('Please enter a valid Username:.  No spaces, more than 2 characters and contain 0-9,a-z,A-Z\n');
    		return false;
    	}
    	cbUnameXhttp = CBgetHttpRequestInstance();
    	if (cbUnameXhttp) {
    		var usernameCheckResponseDiv = document.getElementById('usernameCheckResponse');
    		// document.getElementById('usernameCheckResponse').innerHTML = '&lt;img src=\"components/com_comprofiler/images/cb_wheel.gif\" /&gt; Checking...';
    		document.getElementById('usernameCheckResponse').innerHTML = '';
    		CBmakeHttpRequest('index2.php?option=com_comprofiler&amp;task=checkusernameavailability&amp;no_html=1&amp;format=raw', 'usernameCheckResponse', '', 'username=' + encodeURI(usernameVal) + '&amp;cbsecurityg1=' + encodeURI('cbm_167e46f3_601f42d1_4f6fb31afdcd25ceec465d660cd7f9ab') + '&amp;cbrasitway=' + encodeURI('cbrv1_6f2bb6339004ea6830f76e5e84ce1b3e_PYo4jVKD2RaFfPyV'), cbUnameXhttp );
    	}
    	return false;
    }
    
    //--&gt;&lt;!]]&gt;</script>

<?php
     if(isset($_POST['sent']) && $_POST['sent'] == 'true') {
        
     
     
     }

?>

<?php do_action ('process_customer_registration_form'); ?><!-- the hook to use to process the form -->

<form  id="adduser" class="user-forms" method="post" action="">



<table width="98%" cellspacing="0" cellpadding="5" border="0" id="registrationTable" class="contentpane">
    <tbody><tr>
      <td width="100%" colspan="2"><h1 class="contentheading">Registration<hr size="1"></h1></td>
    
    
    <h2 style="color: red;">
    <?php
        if($_POST){
           // echo var_dump($_POST);
            if($_POST["tentaikhoang"]==""){
                echo "Ten tai khoang k duoc de trong!";
            }
        }
    ?>
    </h2>
    </tr>
		<tr>
			<td class="titleCell">Name:</td>
			<td class="fieldCell"><input type="text" value="" name="tentaikhoang" id="nameuser" size="40" class="inputbox"/><span class="cbFieldIcons"> <img width="16" height="16" title="This Field is required" alt="* This Field is required" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/required.gif"> <img width="16" height="16" title="This Field IS NOT visible on profile" alt="This Field IS NOT visible on profile" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/noprofiles.gif"></span></td>
		</tr>

    <tr>
		<td class="titleCell">Username:</td>
		<td class="fieldCell"><input type="text" onkeyup="if (this.value != cbLastUsername) { document.getElementById('usernameCheckResponse').innerHTML = ''; cbLastUsername = ''; }" onblur="cbSendUsernameCheck(this);" class="inputbox" value="" size="40" moslabel="Username:" mosreq="0" autocomplete="off" name="user_name" id="username"><span class="cbFieldIcons"> <img width="16" height="16" title="This Field is required" alt="* This Field is required" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/required.gif"> <img width="16" height="16" title="This Field IS visible on profile" alt="This Field IS visible on profile" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/profiles.gif"> <img width="16" height="16" onmouseout="return nd();" onmouseover="return overlib('Please enter a valid User Name.  No spaces, more than 2 characters and contain 0-9,a-z,A-Z', CAPTION, 'Username:');" alt="Information for: Username: : Please enter a valid User Name.  No spaces, more than 2 characters and contain 0-9,a-z,A-Z" title="" style="border:0" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/tooltip.png"></span></td>
	</tr>
   <tr>
		<td class="titleCell">&nbsp;</td>
		<td class="fieldCell"><div id="usernameCheckResponse"></div>
		</td>
    </tr>

	<tr>
		<td class="titleCell">E-mail:</td>
		<td class="fieldCell"><input type="text" class="inputbox" value="" size="40" moslabel="E-mail:" mosreq="1" name="email" id="email"><span class="cbFieldIcons"> <img width="16" height="16" title="This Field is required" alt="* This Field is required" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/required.gif"> <img width="16" height="16" title="This Field IS NOT visible on profile" alt="This Field IS NOT visible on profile" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/noprofiles.gif"> <img width="16" height="16" onmouseout="return nd();" onmouseover="return overlib('Please enter a valid e-mail address.', CAPTION, 'E-mail:');" alt="Information for: E-mail: : Please enter a valid e-mail address." title="" style="border:0" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/tooltip.png"></span></td>
	</tr>

	
	<tr>
		<td class="titleCell">Password:</td>
		<td class="fieldCell"><input type="password" value="" size="40" moslabel="Password:" mosreq="0" autocomplete="off" name="password" id="password" class="inputbox"><span class="cbFieldIcons"> <img width="16" height="16" title="This Field is required" alt="* This Field is required" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/required.gif"> <img width="16" height="16" title="This Field IS NOT visible on profile" alt="This Field IS NOT visible on profile" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/noprofiles.gif"> <img width="16" height="16" onmouseout="return nd();" onmouseover="return overlib('Please enter a valid Password.  No spaces, more than 6 characters and contain 0-9,a-z,A-Z', CAPTION, 'Password:');" alt="Information for: Password: : Please enter a valid Password.  No spaces, more than 6 characters and contain 0-9,a-z,A-Z" title="" style="border:0" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/tooltip.png"></span></td>
	</tr>
    <tr>
		<td class="titleCell">Verify Password:</td>
		<td class="fieldCell"><input type="password" value="" size="40" moslabel="Verify Password:" mosreq="0" autocomplete="off" name="verifyPass" id="verifyPass" class="inputbox"><span class="cbFieldIcons"> <img width="16" height="16" title="This Field is required" alt="* This Field is required" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/required.gif"> <img width="16" height="16" title="This Field IS NOT visible on profile" alt="This Field IS NOT visible on profile" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/noprofiles.gif"></span></td>
	</tr>

    		<tr id="cbfr_54">
			<td class="titleCell">City/Provinces:</td>			<td class="fieldCell" colspan="1">
<select moslabel="City/Provinces" mosreq="0" size="0" class="inputbox" name="cb_cityprovinces">
    <?php
    
        $args=array(
        'taxonomy' => 'category',
        'child_of' => '59',
        'hide_empty' => '0',
        'orderby' => 'term_order'
        );
        $menu_list = '';
        $categories=get_categories($args);
    
        foreach($categories as $category) { 
            $menu_list.='<option value="'.$category->name.'">'.$category->name.'</option>';                             
        }
        
        echo $menu_list;
?>
      
</select>
<span class="cbFieldIcons"> <img width="16" height="16" title="This Field IS visible on profile" alt="This Field IS visible on profile" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/profiles.gif"></span></td>
		</tr>
		<tr id="cbfr_43">
			<td class="titleCell">Phone:</td>		
  	         <td class="fieldCell" colspan="1"><input type="text" value="" name="phone" moslabel="Phone" mosreq="1" class="inputbox"><span class="cbFieldIcons"> <img width="16" height="16" title="This Field is required" alt="* This Field is required" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/required.gif"> <img width="16" height="16" title="This Field IS visible on profile" alt="This Field IS visible on profile" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/profiles.gif"></span></td>
		</tr>
    <tr>
      <td width="100%" class="contentpaneopen" colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>Security</td>
        <td class="contentpaneopen" style="border:1px solid #CCC">
           <?php
                require_once('recaptchalib.php');
                
                // Get a key from https://www.google.com/recaptcha/admin/create
                $publickey = "6LeJmfASAAAAAFCVpdvUv3CaY0qAl5AF-_IkjokL";
                $privatekey = "6LeJmfASAAAAAJa5P0s1QbNbRQKpgWMmOVRvlP4F";
                
                $resp = null;
                $error = null;
                
                echo recaptcha_get_html($publickey, $error);
           ?>
        </td>
    </tr>
    <tr>
    	<td></td>
      <td style="padding:20px 0">
      <!--
		<input type="hidden" value="0" name="id">
		<input type="hidden" value="0" name="gid">
		<input type="hidden" value="0" name="emailpass">
		<input type="hidden" value="com_comprofiler" name="option">
		<input type="hidden" value="saveregisters" name="task">
		<input type="hidden" value="cbm_167e46f3_601f42d1_4f6fb31afdcd25ceec465d660cd7f9ab" name="cbsecurityg1">
		<input type="hidden" value="cbrv1_6f2bb6339004ea6830f76e5e84ce1b3e_PYo4jVKD2RaFfPyV" name="cbrasitway">
		<input type="submit" class="button" value="Send Registration">
        !-->
		<input name="adduser" type="submit" id="addusersub" class="submit button" value="Register" />
		<?php wp_nonce_field( 'add-user', 'add-nonce' ) ?><!-- a little security to process on submission -->
		<input name="action" type="hidden" id="action" value="adduser" />
      </td>
    </tr>
</tbody></table>        	
</form>
<div id="cbIconsBottom" style="align:center;"><span class="cbFieldIconsLabels"> <img width="16" height="16" title="This Field is required" alt="* This Field is required" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/required.gif"> This Field is required |  <img width="16" height="16" title="This Field IS visible on profile" alt="This Field IS visible on profile" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/profiles.gif"> This Field IS visible on profile |  <img width="16" height="16" title="This Field IS NOT visible on profile" alt="This Field IS NOT visible on profile" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/noprofiles.gif"> This Field IS NOT visible on profile |  <img width="16" height="16" onmouseout="return nd();" onmouseover="return overlib('Field description: Move mouse over icon', CAPTION, '?');" alt="Information for: ? : Field description: Move mouse over icon" title="" style="border:0" src="http://www.khmer24.com/components/com_comprofiler/plugin/templates/default/tooltip.png"> Field description: Move mouse over icon</span></div>

        
                                  
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