<div id="widgets">

<link href="<?php echo base_url(); ?>css/ticker-style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>js/jquery.ticker.js" type="text/javascript"></script>
<script type="text/javascript">

    $("ul#js-news1").ticker(
        speed: 0.10,           // The speed of the reveal
      
      
        
        htmlFeed: true,        // Populate jQuery News Ticker via HTML
        debugMode: true,       // Show some helpful errors in the console or as alerts
  	                       // SHOULD BE SET TO FALSE FOR PRODUCTION SITES!
        controls: true,        // Whether or not to show the jQuery News Ticker controls
        titleText: 'Latest',   // To remove the title set this to an empty String
        displayType: 'reveal', // Animation type - current options are 'reveal' or 'fade'
        direction: 'ltr'       // Ticker direction - current options are 'ltr' or 'rtl'
        pauseOnItems: 2000,    // The pause on a news item before being replaced
        fadeInSpeed: 600,      // Speed of fade in animation
        fadeOutSpeed: 300      // Speed of fade out animation
    );

</script>


<ul id="js-news1" class="js-hidden">
    <li class="news-item"><a href="#">This is the 1st latest news item.</a></li>
    <li class="news-item"><a href="#">This is the 2nd latest news item.</a></li>
    <li class="news-item"><a href="#">This is the 3rd latest news item.</a></li>
    <li class="news-item"><a href="#">This is the 4th latest news item.</a></li>
</ul>



<div class="widget" id="widget1">
<div class="widgettext"><h3>Like on Facebook</h3></div>
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Frobotixiitkgp&amp;width=292&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;appId=445179998826018" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:258px; margin:0 23px;" allowTransparency="false"></iframe>
</div>

<div class="widget" id="widget2">
<div class="widgettext"><h3>Subscribe</h3></div>
<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=robotixblog', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p style="color:black;">Subscribe to our e-mail newsletter to receive updates.</p><p><input type="text" name="email" style="margin:0 auto;" value="Email ID"/></p><input type="hidden" value="robotixblog" name="uri"/><input type="hidden" name="loc" value="en_US"/><input onfocus="inputFocus(this)" onblur="inputBlur(this)"  class="form-button" style="margin:0 90px;" type="submit" value="Subscribe" /></form>
</div>

<div class="widget" id="widget3">
<div class="widgettext"><h3>Watch our Videos</h3></div>
<iframe align="middle" frameborder="0" id="fr" scrolling="no" src="http://www.youtube.com/subscribe_widget?p=RobotixIITKgp" style="overflow: hidden; padding-left:25px; height: 105px; width: 300px; border: 0; background:#3A3A3A:"></iframe>
</div>


<div class="widget" id="widget4">
<div class="widgettext"><h3>Recommend on Google +</h3></div>
<div style="margin:0 25px;" class="g-plus" data-width="310" data-href="//plus.google.com/117481117164748333739?rel=publisher" ></div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</div>

<!--<div id="bottom">
<p><span>&copy; 2012 Technology Robotix Society || <a href="mailto:contact@robotix.in" title="Email Us">contact [at] <b>robotix</b> .in</a></p>
</div>-->

<footer>
  <p><span>&copy; 2012 Technology Robotix Society || <a href="mailto:contact@robotix.in" title="Email Us">contact [at] <b>robotix</b> .in</a></p>
</footer>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33668522-1']);
  _gaq.push(['_setDomainName', 'robotix.in']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>