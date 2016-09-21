<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>No.1 Star Portal || Admin Panel</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin_css.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/canvasjs.min.js"></script>
</head>

<body>
   
   <div class="admin_body">
      
      <div id="side_panel">
         <ul class="menu">
            <li title="home"><a href="../starcityadmin" class="menu-button home">menu</a></li>    
            <li title="users"><a href="users_landing" class="search current_item">users</a></li>
            <li title="message"><a href="messages" class="pencil">message</a></li>
            <li title="database"><a href="all_db" class="about">database</a></li>
            <li title="upload"><a href="upload" class="archive">upload</a></li>
            <li title="logout"><a href="#" class="contact">logout</a></li>
         </ul>
      </div><!--SIDE PANEL ENDS-->
      
      
      <div class="header">
         <div id="header_cont">
            
            <form id="search"><input type="text" name="search" placeholder="Search"></form>
            
            <form id="logout"><input type="submit" value="LOGOUT ADMIN"></form>
            
            <ul>
               <li class="dropdown"><a href="talent_directory.html"><i class="fa fa-bell-o" aria-hidden="true"></i></a>
                  <div class="dropdown-content">
                  <a href="new.html">1 Unread Notification</a>
                  </div>
               </li>
            </ul>
            
         </div>
      </div>
      
      