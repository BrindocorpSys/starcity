<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>No.1 Star Portal || Admin Panel</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin_css.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title: {
        text: "Analytics Demo"
      },
        data: [
      {
        type: "area",
        dataPoints: [//array

        { x: new Date(2012, 00, 1), y: 2600 },
        { x: new Date(2012, 01, 1), y: 3800 },
        { x: new Date(2012, 02, 1), y: 4300 },
        { x: new Date(2012, 03, 1), y: 2900 },
        { x: new Date(2012, 04, 1), y: 4100 },
        { x: new Date(2012, 05, 1), y: 4500 },
        { x: new Date(2012, 06, 1), y: 8600 },
        { x: new Date(2012, 07, 1), y: 6400 },
        { x: new Date(2012, 08, 1), y: 5300 },
        { x: new Date(2012, 09, 1), y: 6000 }
        ]
      }
      ]
    });

    chart.render();
  }
</script>
<script src="<?php echo base_url(); ?>js/canvasjs.min.js"></script>
</head>

<body>
   
   
   <!--LOGIN-->
<div id="notification" class="overlay">
	<div class="popup">
		<a class="close" href="#0">&times;</a>
		<div class="content">
			<div class="main_pop">
  
               <h2>NEW NOTIFICATIONS</h2>
               <a href="#"><div class="notifications">
                  <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png"></span>
                  <span class="clear text-ellipsis" style="font-weight:bold;">
                     <span>Audrey Graham's subscription has expired Click to view more</span>
                  </span>
               </div></a>
               
               <div class="notifications">
                  <span class="avatar"><img style="border-radius: 500px;" src="img/user.png"></span>
                  <span class="clear text-ellipsis" style="font-weight:bold;">
                     <span>You have one unread message from user 12345</span>
                  </span>
               </div>
               
               <div class="notifications">
               <span class="avatar"><i class="fa fa-comment-o" aria-hidden="true" style="color:#ED1763; font-size:34px"></i></span>
                  <span class="clear text-ellipsis" style="font-weight:bold;">
                     <span>You have 12 unapproved comments. Click to view more</span>
                  </span>
               </div>
               
               
               
               
               
               
               
  
            </div>
             
		</div>
	</div>
</div>
<!--LOGIN ENDS-->
   
   
   <div class="admin_body">
      
      <div id="side_panel">
         <ul class="menu">
            <li title="home"><a href="starcityadmin/" class="menu-button home current_item">menu</a></li>    
            <li title="users"><a href="starcityadmin/users_landing" class="search">users</a></li>
            <li title="message"><a href="starcityadmin/messages" class="pencil">message</a></li>
            <li title="database"><a href="starcityadmin/all_db" class="about">database</a></li>
            <li title="upload"><a href="starcityadmin/upload" class="archive">upload</a></li>
            <li title="logout"><a href="starcityadmin/logout" class="contact">logout</a></li>
         </ul>
      </div><!--SIDE PANEL ENDS-->
      
      
      <div class="header">
         <div id="header_cont">
            
            <form id="search"><input type="text" name="search" placeholder="Search"></form>
            
            <form id="logout"><input type="submit" value="LOGOUT ADMIN"></form>
            
            <ul>
               <li class="dropdown"><a href="talent_directory"><i class="fa fa-bell-o" aria-hidden="true"></i></a>
                  <div class="dropdown-content">
                  <a href="#notification">3 Unread Notification</a>
                  </div>
               </li>
            </ul>
            
         </div>
      </div>
      
      
      <div class="main_body">
         
         <div id="top_dashboard">
         
            <div class="stat">
               <span>Total Auditions</span>
               <h3>20,030</h3>
            </div>
            
            <div class="stat" style="background:#d51459;">
               <span>Total Sales</span>
               <h3>20,030</h3>
            </div>
            
             <div class="stat">
               <span>Members</span>
               <h3>20,030</h3>
            </div>
            
            <div class="stat" style="background:#d51459;">
               <h3 style="margin:0;">Total Downloads - 300</h3>
               <span>Music Downloads - 100</span><br>
               <span>Video Downloads - 100</span><br>
               <span>Games Downloads - 100</span><br>
            </div>
            
         </div>
         
         
         
         
         <div id="analytics">
            
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:49.5%;float:left;"><div id="gmap_canvas" style="height:400px;width:100%;"><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">wordpress themes</a></div></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(6.601838,3.3514863000000332),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.601838, 3.3514863000000332)});infowindow = new google.maps.InfoWindow({content:"<b>Analytics</b><br/>Ikeja<br/> Lagos" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
            
            <div id="chartContainer" style="height: 400px; width: 49.5%; -webkit-box-shadow: 0 1px 2px 
            rgba(0,0,0,0.15); box-shadow: 0 1px 2px rgba(0,0,0,0.15); float:right;"></div>
         
         </div>
         
         
         
         
         <div id="others">
            
            <div class="col">
               <div class="panel">
                  <div class="panel_header">
                     <span class="p_right">+</span>
                     <a href="#">Premium Members</a>
                  </div>
                  
                  <ul>
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        <i class="active"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        <i class="unactive"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        <i class="active"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        <i class="unactive"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        <i class="active"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                  </ul>
               
               </div>
            </div>
            
            
            <div class="col">
               <div class="panel">
                  <div class="panel_header">
                     <span class="p_right">+</span>
                     <a href="#">Basic Members</a>
                  </div>
                  
                  <ul>
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="img/user.png">
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        </span>
                     </a>
                  </ul>
               
               </div>
            </div>
            
            
            <div class="col">
               <div class="panel">
                  <div class="panel_header">
                     <span class="p_right">+</span>
                     <a href="#">Pending Posts</a>
                  </div>
                  
                  <ul>
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        <i class="active"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        <small class="text-ellipsis">Needed Photographer with minimum of 2 years experience aged 20-30</small>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        <i class="unactive"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        <small class="text-ellipsis">Needed Photographer with minimum of 2 years experience aged 20-30</small>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        <i class="unactive"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        <small class="text-ellipsis">Needed Photographer with minimum of 2 years experience aged 20-30</small>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="img/user.png">
                        <i class="unactive"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        <small class="text-ellipsis">Needed Photographer with minimum of 2 years experience aged 20-30</small>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar"><img style="border-radius: 500px;" src="<?php echo base_url(); ?>img/user.png">
                        <i class="unactive"></i>
                        </span>
                        
                        <span class="clear">
                        <span>Audrey Graham</span>
                        <small class="text-ellipsis">Needed Photographer with minimum of 2 years experience aged 20-30</small>
                        </span>
                     </a>
                  </ul>
               
               </div>
            </div>
            
            
            
            
         </div><!--OTHERS ENDS-->
         
         
         
         <div id="others">
            
            <div class="col">
               <div class="panel">
                  <div class="panel_header">
                     <a href="#">Member Signup</a>
                  </div>
                  
                  <ul>
                     <a href="#">
                        <span class="avatar stats">
                        <b>Today</b>
                        </span>
                        
                        <span class="clear">
                        <span>100 new members</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>Last Week</b>
                        </span>
                        
                        <span class="clear">
                        <span>320 Members for a Week</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>Last Month</b>
                        </span>
                        
                        <span class="clear">
                        <span>520 Members for a Month</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>Last Year</b>
                        </span>
                        
                        <span class="clear">
                        <span>890 Members for a Year</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>All Time Total</b>
                        </span>
                        
                        <span class="clear">
                        <span><b>1,000,000 Users Currently On the App</b></span>
                        </span>
                     </a>
                  </ul>
               
               </div>
            </div>
            
            
            <div class="col">
               <div class="panel">
                  <div class="panel_header">
                     <a href="#">Starmaker Signup</a>
                  </div>
                  
                  <ul>
                     <a href="#">
                        <span class="avatar stats">
                        <b>Today</b>
                        </span>
                        
                        <span class="clear">
                        <span>100 new members</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>Last Week</b>
                        </span>
                        
                        <span class="clear">
                        <span>320 Members for a Week</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>Last Month</b>
                        </span>
                        
                        <span class="clear">
                        <span>520 Members for a Month</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>Last Year</b>
                        </span>
                        
                        <span class="clear">
                        <span>890 Members for a Year</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>All Time Total</b>
                        </span>
                        
                        <span class="clear">
                        <span><b>1,000,000 Users Currently On the App</b></span>
                        </span>
                     </a>
                  </ul>
               
               </div>
            </div>
            
            
            <div class="col">
               <div class="panel">
                  <div class="panel_header">
                     <a href="#">Site Visits</a>
                  </div>
                  
                  <ul>
                     <a href="#">
                        <span class="avatar stats">
                        <b>Today</b>
                        </span>
                        
                        <span class="clear">
                        <span>100 Site Visits</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>Last Week</b>
                        </span>
                        
                        <span class="clear">
                        <span>320 Site Visits for a Week</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>Last Month</b>
                        </span>
                        
                        <span class="clear">
                        <span>520 Site Vists for a Month</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>Last Year</b>
                        </span>
                        
                        <span class="clear">
                        <span>890 Site Visits for a Year</span>
                        </span>
                     </a>
                     
                     <a href="#">
                        <span class="avatar stats">
                        <b>All Time Total</b>
                        </span>
                        
                        <span class="clear">
                        <span><b>1,000,000 Total Site Visits</b></span>
                        </span>
                     </a>
                  </ul>
               
               </div>
            </div>
            
            
            
            
         </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
      </div><!--MAIN-->
      
   </div><!--ADMIN_BODY ENDS-->
</body>
</html>
