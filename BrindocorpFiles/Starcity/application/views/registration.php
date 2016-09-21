<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>No.1 Star Portal || Job Diecrtory</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/css.css">
<link href="http://vjs.zencdn.net/5-unsafe/video-js.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
                  <span>Not Registered? Click <a href="#register">Here</a></span>
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
<li><a href="index.html">HOME</a></li>
<li class="dropdown"><a href="talent_directory.html">TALENT DIRECTORY</a>
<div class="dropdown-content">
<a href="new.html">NEWEST TALENTS</a>
</div>
</li>
<li><a href="jobs.html">JOBS / AUDITIONS</a></li>
<li><a href="events.html">EVENTS</a></li>
<li><a href="contests.html">CONTESTS</a></li>
<li><a href="blog.html">BLOG</a></li>
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



<div class="body"><!--BODY STARTS-->

   <section class="main_section">
      <div class="container">
         <div class="row" style="text-align:center;">
         
         <div class="horizontal_ad">
            <img src="img/h_ad.jpg">
         </div>
         
         
            <div class="talent_row">
            
               <div class="reg_form">
                  <form>
                     <h2>THIS TAKES JUST A FEW MINUITES.....</h2>
                     <h3>Fill in all fields</h3><br>
                     
                     <input type="text" placeholder="FIRSTNAME">
                     <input type="text" placeholder="LASTNAME">
                     <input type="text" placeholder="EMAIL">
                     <input type="checkbox" name="vehicle" value="male"> Male
                     <input type="checkbox" name="vehicle" value="female"> Female
                     <input style="margin-top:10px;" placeholder="DATE OF BIRTH" class="textbox-n" type="text" onfocus=
                     "(this.type='date')"  id="date"> 
                     <select>
                     <option>--Select Your Country--</option>
                     <option>Nigeria</option>
                     <option>Argentina</option>
                     <option>Ghana</option>
                     <option>S.Africa</option>
                     </select>
                     <select>
                     <option>--Select Your State/Region--</option>
                     <option>Nigeria</option>
                     <option>Argentina</option>
                     <option>Ghana</option>
                     <option>S.Africa</option>
                     </select>
                     <select>
                     <option>--Select Your Language--</option>
                     <option>Yoruba</option>
                     <option>Igbo</option>
                     <option>Hausa</option>
                     <option>English</option>
                     </select>
                     <input type="password" placeholder="CHOOSE PASSWORD">
                     <input type="password" placeholder="CONFIRM PASSWORD">
                     <input type="text" placeholder="PHONE NUMBER">
                     <input type="submit" value="SUBMIT">
                  </form>
               </div>
            
            
               <div class="skyscrapper" style="float:right;">
                 <div id="ad" style="margin-bottom:4px;">
                    <img src="img/ad.gif" height="300">
                 </div>
      
                 <div id="ad">
                    <img src="img/ad.gif" height="300">
                 </div>
               </div>
            
            
            </div><!--TALENT ROW ENDS-->



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
