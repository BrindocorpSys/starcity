<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>No.1 Star Portal || Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/admin_css.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/canvasjs.min.js"></script>
</head>

<body>
   
   <div class="admin_body">
      
      <div id="side_panel">
         <ul class="menu">
            <li title="home"><a href="admin.html" class="menu-button home">menu</a></li>    
            <li title="users"><a href="users_landing.html" class="search">users</a></li>
            <li title="message"><a href="messages.html" class="pencil current_item">message</a></li>
            <li title="database"><a href="all_db.html" class="about">database</a></li>
            <li title="upload"><a href="upload.html" class="archive">upload</a></li>
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
      
      
      <div class="main_body">
       
         
         <div id="others" style="margin-top:20px;">
            
            <div class="table">
               <h1 class="description">
                  Jobs, Adverts, Auditions......(100)
               </h1>
               <table>
  <tr>
    <th>Company</th>
    <th>Logo</th>
    <th>Message</th>
    <th>Status</th>
    <th>Time</th>
  </tr>
  <tr>
    <td>Company Name</td>
    <td><img src="img/logo.png"></td>
    <td>Message Goes Here. Message Goes Here. Message Goes Here. Message Goes Here.</td>
    <td><i style="color:#0F0;" class="fa fa-check" aria-hidden="true"></i></td>
    <td>2 days ago</td>
    <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    <td><a style="color:white; padding: 7px 7px 7px 7px; border-radius:5px; background-color:red; " 
    href="#">Unapprove</a></td>
  </tr>
  <tr>
    <td>Company Name</td>
    <td><img src="img/logo.png"></td>
    <td>Message Goes Here. Message Goes Here. Message Goes Here. Message Goes Here.</td>
    <td><i style="color:#0F0;" class="fa fa-check" aria-hidden="true"></i></td>
    <td>2 days ago</td>
    <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    <td><a style="color:white; padding: 7px 7px 7px 7px; border-radius:5px; background-color:red; " 
    href="#">Unapprove</a></td>
  </tr>
  <tr>
    <td>Company Name</td>
    <td><img src="img/logo.png"></td>
    <td>Message Goes Here. Message Goes Here. Message Goes Here. Message Goes Here.</td>
    <td><i style="color:#0F0;" class="fa fa-check" aria-hidden="true"></i></td>
    <td>2 days ago</td>
    <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    <td><a style="color:white; padding: 7px 7px 7px 7px; border-radius:5px; background-color:red; " 
    href="#">Unapprove</a></td>
  </tr>
  <tr>
    <td>Company Name</td>
    <td><img src="img/logo.png"></td>
    <td>Message Goes Here. Message Goes Here. Message Goes Here. Message Goes Here.</td>
    <td><i style="color:#0F0;" class="fa fa-check" aria-hidden="true"></i></td>
    <td>2 days ago</td>
    <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    <td><a style="color:white; padding: 7px 7px 7px 7px; border-radius:5px; background-color:red; " 
    href="#">Unapprove</a></td>
  </tr>
  <tr>
    <td>Company Name</td>
    <td><img src="img/logo.png"></td>
    <td>Message Goes Here. Message Goes Here. Message Goes Here. Message Goes Here.</td>
    <td><i style="color:#0F0;" class="fa fa-check" aria-hidden="true"></i></td>
    <td>2 days ago</td>
    <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    <td><a style="color:white; padding: 7px 7px 7px 7px; border-radius:5px; background-color:red; " 
    href="#">Unapprove</a></td>
  </tr>
  <tr>
    <td>Company Name</td>
    <td><img src="img/logo.png"></td>
    <td>Message Goes Here. Message Goes Here. Message Goes Here. Message Goes Here.</td>
    <td><i style="color:#0F0;" class="fa fa-check" aria-hidden="true"></i></td>
    <td>2 days ago</td>
    <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    <td><a style="color:white; padding: 7px 7px 7px 7px; border-radius:5px; background-color:red; " 
    href="#">Unapprove</a></td>
  </tr>
  <tr>
    <td>Company Name</td>
    <td><img src="img/logo.png"></td>
    <td>Message Goes Here. Message Goes Here. Message Goes Here. Message Goes Here.</td>
    <td><i style="color:#0F0;" class="fa fa-check" aria-hidden="true"></i></td>
    <td>2 days ago</td>
    <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    <td><a style="color:white; padding: 7px 7px 7px 7px; border-radius:5px; background-color:red; " 
    href="#">Unapprove</a></td>
  </tr>
  
            </table>
             
               <div id="pagination">
                  <span><a class="selected" href="#">1</a></span>
                  <span><a href="#">2</a></span>
                  <span><a href="#">3</a></span>
                  <span><a href="#">4</a></span>
                  <span><a href="#">5</a></span>
                  <span><a href="#">6</a></span>
                  <span><a href="#">7</a></span>
                  <span><a href="#">NEXT</a></span>
                  <span><a href="#">LAST</a></span>
               </div>      
            
            </div>
            
            
             
         </div><!--OTHERS ENDS-->
         
         
         
         
         
         
         
         
         
      </div><!--MAIN-->
      
   </div><!--ADMIN_BODY ENDS-->
</body>
</html>
