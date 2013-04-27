<div id="fb-root"></div>

 <div style="display:none" id="contact">
     
  <iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dHRMTVBfemdCaUZyX24zN3dkUkJwZGc6MQ" width="670" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        
        </div>

<div style="display:none" id="fancyreg">
<iframe src='https://www.facebook.com/plugins/registration?
             client_id=445179998826018&
             redirect_uri=http://robotix.in/siteuser/submit&
             fields=
[{"name":"name"},
                                        {"name":"birthday"},
                                        {"name":"location"},
                                        {"name":"college","description":"College","type":"text"},
                                        {"name":"email"},
                                        {"name":"username","description":"Username","type":"text"},
                                        {"name":"password"}]'
        scrolling="auto"
        frameborder="no"
        style="border:none"
        allowTransparency="true"
        width="500"
        height="460">
</iframe>
</div>
<div style="display:none" id="fancyprofile">
Welcome <?php echo $userdata['username']; ?>
</div>
<div style="display:none" id="fancylogin">
    
    
	<div class="form" id="loginform-wrap">
    
    <form action=""  accept-charset="UTF-8" method="post" id="loginform" enctype="multipart/form-data">
    
    <fieldset id="login">
    <legend>Enter your credentials</legend>
    
    	<div class="form-item" id="username-wrap">
        	<label for="username">Username or Email address <span class="form-required">*</span></label>
            <input type="text" name="username" id="username" maxlength="50" required autofocus />
            <div class="description">Login with either your username or Email ID</div>
       	</div>        
        
        <div class="form-item" id="pass-wrap">
        	<label for="pass">Password <span class="form-required">*</span></label>
        	<input type="password" name="pass" id="pass"  maxlength="128" required />
             <div class="description">The password field is case-sensitive</div>
        </div>
      
		<!--<div class="form-item" id="persistent-login-wrap">
 		<label class="option" for="persistent-login"><input type="checkbox" name="persistent_login" id="persistent-login" value="1" checked="checked" />Remember Me</label>
		</div>-->

   		</fieldset>
 	   
 		<input type="submit" name="login-form" id="login-form" value="Login" class="form-button" />
        <!--<input type="button" onClick="window.location.href='<?php echo base_url()?>siteuser/register'"
name="register-form" id="register-form" value="Register" class="form-button" />-->
<div style="float:right; margin-right:80px; margin-top:20px;" id="fbloginbutton"><fb:login-button
registration-url="http://robotix.in/siteuser/register" on-login="fblogin()" /></div>
        </form>  

        </div>
       
        </div>

<!--FancyBox End-->
<script type="text/javascript" >

$('#loginform').submit(function(e) {
  e.preventDefault();
  $.ajax({
         url         :'http://robotix.in/siteuser/login',
         type : 'POST',
         dataType    : 'html',
         data        : {
            'username'           : $('#username').val(),
             'pass'           : $('#pass').val()
         },
         success  : function (data)
         {
            
            //$('.logo h1').html('Thank You !');

            $('#loginform-wrap').slideUp('medium');
            $('#loginform-wrap').html(data).slideDown('fast');
$('#loginform-wrap').append('Welcome <?php echo $user; ?>');
parent.window.location.reload();
           // $.fancybox.close();
            
         }
  });
  return false;
});

</script>				
<div onclick="location.href='http://www.facebook.com/robotixiitkgp';" alt="Facebook" title="Facebook" class="bar-items bar-fb"> </div>
<div onclick="location.href='http://twitter.com/RobotixIITKgp';" alt="Twitter" title="Twitter" class="bar-items bar-twitter"> </div>
<div onclick="location.href='http://feeds.feedburner.com/robotixblog';" alt="RSS Feeds" title="RSS Feeds" class="bar-items bar-rss"> </div>
<div class="bar-items bar-b1"> </div>
<div alt="Hands-On" title="Hands-On"  onclick="location.href='http://blog.robotix.in/?cat=5';" class="bar-items bar-profile"> </div>
<div id="sitecontactbutton" href="#contact" alt="Contact" title="Contact" class="fancybox bar-items bar-robotics"> </div>
<div onclick="location.href='http://blog.robotix.in';" alt="Blog" title="Blog" class="bar-items bar-forum"> </div>
<div  id="temp" class="bar-items bar-b2" style="width:140px;"> </div>
<div id="siteloginbutton" href="#fancylogin" alt="Login" class="fancybox bar-items bar-login"> </div>
<!--<a href="http://robotix.in/siteuser/register">--><div id="siteregisterbutton" alt="Register" title="Register" href="#fancyreg" class="fancybox bar-items bar-register"> 
</div>
<div id="siteloggedin" href="#fancylogin" alt="Login" class="bar-items bar-logged" style="width:328px;text-align:right;"><div style="font-size: larger;
padding: 15px;"> Welcome <?php echo $userdata['username'];?> </div></div>


<img name="Logospace" src="<?php echo base_url()?>css/images/banner.jpg" width="1140" id="Logospace" usemap="#m_logospace" alt="" />

<map name="m_logospace" id="m_logospace">
<area shape="rect" coords="0,0,203,156" href="http://www.iitkgp.ac.in/" alt="IIT Kharagpur" title="IIT Kharagpur"    />
<area shape="rect" coords="206,0,885,156" href="<?php echo base_url(); ?>" alt="Robotix" />
<area shape="rect" coords="900,0,1140,156" href="http://www.ktj.in" alt="Kshitij" title="Kshitij" />

</map>

<div id="mainmenu">
<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="<?php echo base_url(); ?>">
						<img src="<?php echo base_url(); ?>css/images/menu/home.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Home</span>
							<span class="sdt_descr">The Home of Robotix</span>
						</span>
					</a>
<div class="sdt_box">
<!--{resources}
							<a href="<?php echo base_url(); ?>home/page/{slug}">{menu_name}</a>
{/resources}-->
<a href="<?php echo base_url(); ?>home/page/about_us">About Us</a>
<a href="<?php echo base_url(); ?>home/page/team">The Team</a>

<!--<a href="<?php echo base_url(); ?>/home/page/dream_a_bot">Dream-A-Bot</a>
<a href="<?php echo base_url(); ?>/home/page/rse">RSE</a>
<a href="<?php echo base_url(); ?>/home/page/sponsors">Sponsors</a>-->

</div>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>events">
						<img src="<?php echo base_url(); ?>css/images/menu/events.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Events</span>
							<span class="sdt_descr">Discover Robotix 2013</span>
						</span>
					</a>
					<div class="sdt_box">
{events}
							<a class="evetooltip" title="Event" href="<?php echo base_url(); ?>events/event/{slug}">{menu_name}</a>
{/events}			
					</div>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo base_url(); ?>css/images/menu/resources.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Workshops</span>
							<span class="sdt_descr">Reaching the Masses</span>
						</span>
						<div class="sdt_box">
<a href="<?php echo base_url(); ?>home/page/request">Request a Workshop</a>
<a href="<?php echo base_url(); ?>workshops">Conducted Workshops</a>	
<a href="<?php echo base_url(); ?>home/page/workshop11">Workshops 2011</a>	
<!--{workshops}
							<a href="<?php echo base_url(); ?>workshops/post/{id}">{name}</a>
{/workshops}-->						
					</div>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>tutorials">
						<img src="<?php echo base_url(); ?>css/images/menu/tutorials.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Tutorials</span>
							<span class="sdt_descr">Learn the Fundamentals</span>
						</span>
<div class="sdt_box">
{categories}
							<a href="<?php echo base_url(); ?>tutorials/category/{slug}">{menu_name}</a>
{/categories}							
<a href="<?php echo base_url(); ?>events/tutorial">Event Tutorials</a>
					</div>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo base_url(); ?>css/images/menu/forum.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Misc</span>
							<span class="sdt_descr">Miscellaneous Links</span>
						</span>
<div class="sdt_box">
<a href="<?php echo base_url(); ?>/home/page/mechdesign">Mech design Contest</a>
<a href="<?php echo base_url(); ?>/home/page/reghowto">How to Register</a>
<a href="<?php echo base_url(); ?>/home/page/wwsresults">WWS Test Results</a>
<a href="<?php echo base_url(); ?>/home/page/dream_a_bot">Dream-A-Bot</a>
<a href="<?php echo base_url(); ?>/home/page/rse2013">RSE Selections</a>
<a href="<?php echo base_url(); ?>/home/page/faqs">FAQs</a>
<a href="<?php echo base_url(); ?>/home/page/sponsors">Sponsors</a>
<!--<a href="<?php echo base_url(); ?>/home/page/selectionsorig">KRAIG Test Results</a>
<a href="<?php echo base_url(); ?>/home/page/rse">RSE</a>
<a href="<?php echo base_url(); ?>/home/page/selections">KRAIG Retest Results</a>-->		

					</div>
					</a>
				</li>
				<li>
					<a href="http://forum.robotix.in">
						<img src="<?php echo base_url(); ?>css/images/menu/blog.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Forum</span>
							<span class="sdt_descr">Discuss your doubts</span>
						</span>
					</a>
				</li>
<li>
					<a href="#">
						<img src="<?php echo base_url(); ?>css/images/menu/archives.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Archives</span>
							<span class="sdt_descr">Our Past</span>
						</span>
					</a>
<div class="sdt_box">
							<a href="<?php echo base_url(); ?>rbtx12">Robotix 2012</a>
<a href="<?php echo base_url(); ?>rbtx11">Robotix 2011</a>
<a href="<?php echo base_url(); ?>rbtx10">Robotix 2010</a>
</div>
				</li>

			</ul>
</div>

<style type="text/css">
</style>
<!--

<br />
-->

    