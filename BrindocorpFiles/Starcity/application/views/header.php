<head>
<meta charset="utf-8">
<title>No.1 Star Portal || Talent Diecrtory</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/css.css">
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
<li><a href="../">HOME</a></li>
<li class="dropdown active"><a href="talent_directory">TALENT DIRECTORY</a>
<div class="dropdown-content">
<a href="<?php echo base_url()?>new">NEWEST TALENTS</a>
</div>
</li>
<li><a href="jobs">JOBS / AUDITIONS</a></li>
<li><a href="events">EVENTS</a></li>
<li><a href="contests">CONTESTS</a></li>
<li><a href="blog">BLOG</a></li>
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



