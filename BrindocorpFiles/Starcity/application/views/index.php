<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>No.1 Star Portal</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/css.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/slideshow.css">
<link href="http://vjs.zencdn.net/5-unsafe/video-js.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="http://vjs.zencdn.net/5-unsafe/video.js"></script>
<script>
$(window).scroll(function() {
  if ($(document).scrollTop() > 598) {
    $('.menu_area').addClass('menu_area_fixed');
  } else {
    $('.menu_area').removeClass('menu_area_fixed');
  }
});
</script>

<script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
</head>

<body>

<!--LOGIN-->
<div id="login_pop" class="overlay">
	<div class="popup">
		<a class="close" href="#0">&times;</a>
		<div class="content">
			<div class="main">
  
               <form>
               <h2>LOGIN</h2><br>
                  <input type="text" placeholder="Username">
                  <input type="password" placeholder="Password">
                  <input type="submit" value="Send">
                  <input style="background:#3b5998; border:#3b5998;" type="submit" value="Sign In With Facebook">
                  <span>Not Registered? Click <a href="#register_pop">Here</a></span>
               </form>
  
            </div>
             
		</div>
	</div>
</div>
<!--LOGIN ENDS-->


<!--LOGIN-->
<div id="register_pop" class="overlay">
	<div class="popup">
		<a class="close" href="#0">&times;</a>
		<div class="content">
			<div class="main">
  
               <form action="registration">
               <h2>REGISTER</h2><br>
                  <input type="text" placeholder="Firstname">
                  <input type="text" placeholder="Lastname">
                  <input type="text" placeholder="Email">
                  <select>
                  <option>--Select Your Category--</option>
                  <option>Talent</option>
                  <option>Agent</option>
                  <option>Producer</option>
                  <option>Agency</option>
                  </select>
                  <input type="submit" value="Continue">
                  <span>Already Registered? Click <a href="#login_pop">Here</a> to Login</span>
               </form>
  
            </div>
             
		</div>
	</div>
</div>
<!--LOGIN ENDS-->




<div class="menu_container"><!--MENU CONTAINER-->

<div class="menu_area">
<div id="nav_container">

<a href="#banner"><div id="logo"></div></a>

<div id="navbar">
<nav>
<ul>
<li class="active"><a href="/">HOME</a></li>
<li class="dropdown"><a href="index.php/talent_directory">TALENT DIRECTORY</a>
<div class="dropdown-content">
<a href="index.php/new">NEWEST TALENTS</a>
</div>
</li>
<li><a href="index.php/jobs">JOBS / AUDITIONS</a></li>
<li><a href="index.php/events">EVENTS</a></li>
<li><a href="index.php/contests">CONTESTS</a></li>
<li><a href="index.php/blog">BLOG</a></li>
<li class="dropdown"><a href="#business">MORE +</a>
<div class="dropdown-content">
<a href="#">GAMES</a>
<a href="#">MUSIC</a>
<a href="#">VIDEOS/MOVIES</a>
</div>
</li>
</ul>
</nav>
</div>

</div><!--nav_container ends-->

<div id="register">
   <a href="#login_pop"><div id="register_login">
      REGISTER / LOGIN
   </div></a>
</div>

</div><!--menu_area ends-->

</div><!--MENU CONTAINER ENDS-->





<div class="banner_ad">
   
   <div class="slideshow">
      <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="#"><img src="img/slide1.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <div class="caption_title_line"><h2>TITLE 1</h2><p>Body</p></div>
                </div>
	    		</li>
	    	<li>
	    		<a href="#"><img src="img/slide2.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <div class="caption_title_line"><h2>TITLE 2</h2><p>Body</p></div>
                </div>
	    		</li>
	    	<li>
	    		<a href="#"><img src="img/slide3.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <div class="caption_title_line"><h2>TITLE 3</h2><p>Body</p></div>
                </div>
	    		</li>
	    	<li>
	    		<a href="#"><img src="img/slide4.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <div class="caption_title_line"><h2>TITLE 4</h2><p>Body</p></div>
                </div>
	    		</li>
	    </ul>
	  </div>
   </div>
   </div>
   
   <div class="skyscrapper">
      <div id="ad" style="margin-bottom:4px;">
         <img src="img/ad.gif" height="300">
      </div>
      
      <div id="ad">
         <img src="img/ad.gif" height="300">
      </div>
   </div>
   
</div><!--BANNER AD ENDS-->






<div class="body"><!--BODY STARTS-->

   <section class="main_section">
      <div class="container">
         <div class="row">
            <div class="left">
               <h1>ABOUT &nbsp; STARCITY.......</h1>
               <p>StarCity is a platform for talented people in different areas to connect with one another.......place text</p>
            </div>
            
            <div class="right">
               <h1>NEWEST &nbsp; TALENTS.......</h1>
               <div id="new_members" style="margin-bottom:30px;">
                  <img src="img/user2.png" width="100" height="100">
                  <img src="img/user2.png" width="100" height="100">
                  <img src="img/user2.png" width="100" height="100">
                  <img src="img/user2.png" width="100" height="100">
                  <img src="img/user2.png" width="100" height="100">
                  <img src="img/user2.png" width="100" height="100">
                  <div class="button"><a href="#">VIEW ALL</a></div>
               </div>
               
               <h1>MOST &nbsp; VIEWED &nbsp; TALENTS.......</h1>
               <div id="new_members">
                  <img src="img/user.png" width="100" height="100">
                  <img src="img/user.png" width="100" height="100">
                  <img src="img/user.png" width="100" height="100">
                  <img src="img/user.png" width="100" height="100">
                  <img src="img/user.png" width="100" height="100">
                  <img src="img/user.png" width="100" height="100">
                  <div class="button"><a href="#">VIEW ALL</a></div>
               </div>
            </div>
         </div>
         
         
         <div class="row" style="margin-top:20px;">
            <div id="jobs_auditions">   
               <h1>AUDITIONS / JOB OPENINGS</h1>
               <div id="jobs_auditions_inner">
                  <a href="#"><div class="jobs">
                     <img src="img/actor.png" width="50" height="50">
                     <span>ACTORS/ACTRESS WANTED (2 Openings)</span>
                  </div></a>
                  
                  <div class="jobs">
                     <img src="img/stylist.png" width="50" height="50">
                     <span>STYLIST WANTED (11 Openings)</span>
                  </div>
                  
                  <div class="jobs">
                     <img src="img/dancer.png" width="50" height="50">
                     <span>DANCER WANTED (6 openings)</span>
                  </div>
                  
                  <div class="jobs">
                     <img src="img/sound.png" width="50" height="50">
                     <span>SOUND MANAGER NEEDED</span>
                  </div>
                  
                  <div class="jobs">
                     <img src="img/doc.png" width="50" height="50">
                     <span>DOCTOR NEEDED (5 openings)</span>
                  </div>
                  
                  <div class="jobs">
                     <img src="img/presenter.png" width="50" height="50">
                     <span>PRESENTERS NEEDED (9 openings)</span>
                  </div>
                  
                  <div class="button"><a href="#">VIEW ALL</a></div>
                  
               </div>
            </div>   
         </div>
      
         
      </div>
   </section>






   <section class="main_section blog parallax">
      <div class="container">
         <div class="row">
            <h1 class="row_title" style="color:#FFF;">LATEST &nbsp; BLOGPOSTS</h1>
            <div class="blog_left">
               <h1>VIDEO &nbsp; TITLE.......</h1>
               <video id="my_video_1" class="video-js vjs-default-skin" width="640px" height="500px" controls preload="none" 
               poster='img/cover.jpg'data-setup='{ "aspectRatio":"640:500", "playbackRates": [1, 
               1.5, 2] }'>
               <source src="mp4/FIFA 17 Gameplay - Manchester United vs Leicester City.mp4" type='video/mp4' />
               <source src="mp4/FIFA 17 Gameplay - Manchester United vs Leicester City.webm" type='video/webm' />
               </video>
            </div>
            
            
            <div class="blog_right">
               <div class="blog_box">
                  <div class="img_cover"><img src="img/blogcover.jpg"><span>ENTERTAINMENT</span></div>
                  <div class="det">DETAILS GOES HERE...</div>
               </div>
               
               <div class="blog_box">
                  <div class="img_cover"><img src="img/blogcover.jpg"><span>ENTERTAINMENT</span></div>
                  <div class="det">DETAILS GOES HERE...</div>
               </div>
               
               <div class="blog_box">
                  <div class="img_cover"><img src="img/blogcover.jpg"><span>ENTERTAINMENT</span></div>
                  <div class="det">DETAILS GOES HERE...</div>
               </div>
               
               <div class="blog_box">
                  <div class="img_cover"><img src="img/blogcover.jpg"><span>GAMES</span></div>
                  <div class="det">DETAILS GOES HERE...</div>
               </div>
               
               <div class="button"><a href="#">VIEW ALL</a></div>
               
            </div>
            
            
         </div>
         
         <div class="row">
            <div id="jobs_auditions">
              <h1>OTHERS...</h1>
               <div id="jobs_auditions_inner" style="box-shadow:none;">
                  <div class="blog_box other">
                     <div class="img_cover"><img src="img/blogcover.jpg"><span>ENTERTAINMENT</span></div>
                     <div class="det">WATCH JENIFAS DIARY SEASON 6 TRAILER...</div>
                  </div>
                 
                  <div class="blog_box other">
                     <div class="img_cover"><img src="img/blogcover.jpg"><span>ENTERTAINMENT</span></div>
                     <div class="det">DOWNLOAD JENIFAS DIARY S05 Ep7...</div>
                  </div>
                  
                  <div class="blog_box other">
                     <div class="img_cover"><img src="img/blogcover.jpg"><span>GAMES</span></div>
                     <div class="det">PES 2017 DEMO OUT NOW...</div>
                  </div>
                  
                  <div class="blog_box other">
                     <div class="img_cover"><img src="img/blogcover.jpg"><span>SPORTS</span></div>
                     <div class="det">MOSES HAPPY IN CHELSEA WIN...</div>
                  </div>
                  
                  <div class="blog_box other">
                     <div class="img_cover"><img src="img/blogcover.jpg"><span>ENTERTAINMENT</span></div>
                     <div class="det">DOWNLOAD EEDRIS ABDULKAREEMS LATEST SONG "LABOUR ROOM"...</div>
                  </div>
                  
                  <div class="blog_box other">
                     <div class="img_cover"><img src="img/blogcover.jpg"><span>ENTERTAINMENT</span></div>
                     <div class="det">DETAILS GOES HERE...</div>
                  </div>
                  
                  <div class="blog_box other">
                     <div class="img_cover"><img src="img/blogcover.jpg"><span>ENTERTAINMENT</span></div>
                     <div class="det">DETAILS GOES HERE...</div>
                  </div>
                  
                  <div class="blog_box other">
                     <div class="img_cover"><img src="img/blogcover.jpg"><span>ENTERTAINMENT</span></div>
                     <div class="det">DETAILS GOES HERE...</div>
                  </div>
                  
                  <div class="button"><a href="#">VIEW ALL</a></div>
                  
               </div>
            </div>
         </div>
         
      </div>
   </section>

   
   
   
   <section class="main_section">
      <div class="container">
         <div class="row">
            <h1 class="row_title">SIGNUP FOR FREE TODAY</h1>   
            <p class="row_p">And &nbsp;Connect &nbsp;With &nbsp;Talented &nbsp;People &nbsp;Like &nbsp;You</p>   
            <div class="button button_free"><a href="#">JOIN NOW</a></div>
         </div>
      </div>
   </section>
   
   




</div><!--BODY ENDS-->

<footer>
   <div class="container">
      <div class="row">
         <div id="footer_top">
            <img src="img/logo.png">
            <form id="search"><input type="text" name="search" placeholder="Search Starcity..."></form>
            <div class="footer_social">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-google-plus"></i></a>
               <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
         </div>
         
         <div id="footer_bottom">
            Developed by <a href="http://www.brindocorp.com/" target="_blank">Brindocorp.</a>
         </div>
         
      </div>
   </div>
</footer>

</body>
</html>
