<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <title><?= $title ?></title>
<link href="<?php echo base_url(); ?>/favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-latest.js"></script><?= $_styles ?>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.js"></script><script src="<?php echo base_url(); ?>js/jquery.transit.js" type="text/javascript"></script><script type="text/javascript" src="<?php echo base_url(); ?>js/menu.js"></script><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/slider/style.css" /><script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cslider.js"></script><script type="text/javascript">			$(function() {							$('#da-slider').cslider();							});</script>		
<link href='http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url(); ?>js/less-1.1.3.min.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>js/jquery.scrollTo-min.js" type="text/javascript" ></script>

<!--<script>

var height2;

var width2;
var cssheight2;

   $(document).ready(function(){

          height2 = $('div#topbar-outer').position().top;

          width2 = $('div#topbar-outer').css('width');
          cssheight2 = $('div#topbar-outer img').css('height');

         scrollalert2(height2);
         

      });

function scrollalert2(){

	var scrolltop1=$("body").scrollTop();

	

	if(scrolltop1>=height2)

	{
		$("div#topbar-outer").css("position","fixed");

		$("div#topbar-outer").css("top","0");

                $("div#topbar-outer").css("width",width2);
		
		$("div#topbar-outer").css("height", cssheight2);

	}

	else if(scrolltop1 == 0){

		$("div#topbar-outer").css("position","inherit");
                $("div#topbar-outer").css("height",cssheight2);
	}

	setTimeout('scrollalert2();', 10);

}

</script>-->

<script>
jQuery(document).ready(function($){	 

    
$("div#events a:first-child").ready(function() {
$(this).trigger('click');
});


      $('.nochild div').addClass('notclicked'); //Set them to display: none

      $('#events a').live("click",function(){

           
	    $(this).parent().find('a').removeClass('active'); //for adding css to the current active <a> tag
	    $(this).addClass('active');
	    
	    $('.clicked').removeClass('clicked').addClass('notclicked'); //Hide the currently active div
            var height = $('div.nochild' + ' #'+ $(this).attr('rel')).css("height");
            
            //$('.nochild').animate({height: height + 'px'}, 1000);
	    $('div.nochild' + ' #'+ $(this).attr('rel')).removeClass('notclicked').addClass('clicked'); //display target div

            $('div.content').append('<center><img align="center" class="loading" src="http://loadinggif.com/images/image-selection/36.gif" /></center>');
	    //$("div.nochild").find('div').hasClass('clicked').addClass('check');
	    var parent = $(this).parent().attr('id');
            var form_data = {
		name: $(this).attr('rel'),
		eventid : "<?php echo $maintabs[0] ->event_id ; ?>" ,
		ajax: '1'		
            };
            
            $.ajax({
		url: "<?php echo site_url('events/load'); ?>",
		type: 'POST',
		data: form_data,
	        dataType: 'json' ,
		success: function(json) {

		var elem ='#'+ parent + ' #'+ json.result.link ; //Target element for putting the subtabs New div is created in the parent of the current element
		$(elem).remove(); 
		var data = json.result.data; var list = ''; 
		//alert( json.result.data);
			$('#'+ parent).append('<div  class="tabsnav" id="'+ json.result.link +'">'); 
                        if(data == '') { $('img.loading').hide(); }
                        
                        
		        $.each(data, function(key , val){
                              list+='<a href="#" rel="' +val.id +'">'+val.name+'</a>';  //Subtab list created
			      $('#'+json.result.link).append('<a href="#" rel="' +val.id +'">'+val.name+'</a>');       //.show('fast') removed
			      if(key==0){ //Open the contents of first tab created
				  $('a[rel="'+ val.id +'"]').trigger('click');
		             

			      }
			});
                       
                        
                        //$('#'+json.result.link).append(list); //subtab list added to div
                       // $('a[rel="'+ data[0].id +'"]').trigger('click'); 
                       $('img.loading').hide();
                        
	       // }
		  
		} //End of success json

	    });
      
      $('body').scrollTo("#main", 1000, {easing : 'swing'});
      return false;
     });
$("div#events").find('a').eq(0).trigger('click').addClass('active');
 
});
</script>
   
<script type="text/javascript">		
$(document).ready(function () {
 
   
    var style = 'easeOutElastic';
   var left;
var width;
var top;
var lavaoff = $('div.lava').offset().left ;

  width = $('a.active').width()+ 20; 
  left = $('a.active').offset().left - lavaoff ;

  $('div.lava').animate({left: left,width: width},{duration:1000, easing: style}); 
      
    $('.tabsnav a').hover(function () {
         
       
       
       width = $(this).width()+ 20; 
       left = $(this).offset().left - lavaoff;
top = $("#events").offset().top - $(this).offset().top;

        $('div.lava').stop(false, true).animate({left: left,width: width, top: top},{duration:1000, easing: style}); 
 //$('div.lava').animate({},{duration:1000});  
       
    });
$('.tabsnav a').mouseleave(function () {
         
       
       
       width = $('.active').width()+ 20; 
       left = $('.active').offset().left - lavaoff;
top = $("#events").offset().top - $(this).offset().top;
     $('div.lava').stop(false, true).animate({left: left,width: width, top: top},{duration:1000, easing: style}); 
      
    });
   
});
</script>
 <link rel="stylesheet" href="<?php echo base_url()?>css/login/form.css" type="text/css" />
<!--FancyBox Start--> 
<script type="text/javascript" src="<?php echo base_url()?>fancybox/jquery.fancybox.js?v=2.0.6"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>fancybox/jquery.fancybox.css?v=2.0.6" media="screen" />

<script type="text/javascript">
	
		$(".fancybox").fancybox({
				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,
			});
	
</script>	  

<script src="https://raw.github.com/malsup/cycle/master/jquery.cycle.lite.js"></script>	
<script>
$(document).ready(function(){
	$('#eventupdates').cycle({next:   '#upscroll', pause : 1, containerResize: 1});
});
</script>

</head>
<body>




    <div id="outerWrapper" class="center">      <div id="innerWrapper">
         <div id="header">
            <?= $header ?>
         </div><div id="content">
         <div id="main" class="event">
          
             <div id="eventheader" style="height:120px;position:relative;"><div id="imagestrip" style="width:400px;float:left;padding-top:10px"><?= $image ?></div><h2 class="title" style="position: absolute;top: 20px;width: 100%;"><?= $title ?></h2><div id="contact" style=" right: 60px;
    position: absolute;
    height: 200px;
    width: 300px;"><?= $contact ?></div>

</div>

<style>
#eventupdates > *{
text-align:center;
width:100%;
font-style: italic;
}
#eventupdates {
top:-20px;
}
#upscroll{
position:relative;
right:230px;
z-index:10;
background:url("http://cdn1.iconfinder.com/data/icons/musthave/16/Next.png") no-repeat;
display:block;
float:right;
height:18px;
width:17px;
cursor:pointer;
}
</style>
<div id="updates-wrapper" style="padding: 20px 0 25px 0;">
<div id="upscroll" title="Click to see next update"></div>
<div id="eventupdates"  >
	<?= $updates ?>
</div>
</div>


                <div id="tabs">
                <div class="lava">
</div>
                  <?= $tabs ?>
               

                </div>
                  
              
                    <div class="content">
                    
                      <?= $content ?>
                   
                  </div>
                
         </div></div>
         <div id="footer">
            <?= $footer ?>
         </div>
   </div>
   </div>   </div>

</body>
</html>