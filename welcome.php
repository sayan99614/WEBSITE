<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head> 
<title>    
EOE
</title>
<style>

    
p.a { 
  word-spacing: 40px;
}
body  
{
  background-image: ".jpg";
  background-color: #060606;
}

body, html 
{
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("hand.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("team.jpg");
  min-height: 400px;
}

.bgimg-3 {
  
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
 
position :relative;
bottom:240px;
}

.caption span.text
{
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
  text-align:middle;
  
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}


@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
}


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: white ;
  padding: 120px;
  text-align: center;
}

.header {
  padding: 8px 14px;
  background: white;
  color: white ;
  position: fixed;
  top: 0;
  width: 100%;
}



.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}


p.italic {
  font-style: italic;
}
a{
  text-decoration: none;
}

</style>
<br>
<br>
<br>


<div class ="header"  id ="my Header">



<center><h3><p class="a">
<b><?php echo htmlspecialchars($_SESSION["username"]);?></b>  
<img src ="img.png" width="15" height="10" ></img>
<a href="main.php"><font color="575772">   HOME  </font> </a>
<a href="gallery.php"><font color="575772">   GALLERY   </font> </a>
<a href="activity.php"><font color="575772">   ACTIVITIES   </font> </a>
<a href="contact.php"><font color="575772">   CONTACT   </font> </a>
<a href="pay.php"><font color="575772">   DONATION     </font>  </a>
<a href="logout.php"><font color="575772">   LOGOUT    </font>  </a>  
<img src ="img.png" width="15" height="10" ></img>
</p></h3></center>

</div>


</head>
<body >
<div class="bgimg-1">
  <div class="caption">
  <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"><img src="EOE.png" align="middle" width="1000" height="550" ></span>
  
  
  </div>
</div>
<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
<p class="p">“The best way to not feel hopeless is to get up and do something. Don’t wait for good things to happen to you. If you go out and make some good things happen, you will fill the world with hope, you will fill yourself with hope.”
― Barack Obama</p>
</div>
<div class="bgimg-2">
  <div class="caption">
  <span class="text" style="background-color:transparent;font-size:25px;color:black;text-align:bottom;"><h2>OUR TEAM</h2></span>
  </div>
</div>
<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
<p class="p">The organisation was started with the believe that <b>HUMANITY</b> is the only characterstics in every human that makes them united . 
Every person on this planet is somehow connected to eachother with this trait . Humans are the most in.  "During the crisis the fool makes the barrier but the wise makes the bridges" ~black panther
   </p>
</div>
</body>
<footer>

<p style="text-align:center"><span style="font-size:12px">CONNECT WITH US :</span></p>
<p style="text-align:center">
<!--Facebook icon-->
<a href="http://facebook.com/flashissue" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/YdvNzBsfTrqg9Cx9Tozh_Facebook-e1386022800280.png" style="height:50px; width:50px" /> </a>&nbsp; &nbsp; &nbsp;
<!--Google+ icon-->
<a href="http://plus.google.com" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/HdT6jbRJRhqyPu3BKhi7_google-Plus-e1386022876181.png" style="height:50px; width:50px" /> </a>&nbsp; &nbsp;&nbsp;
<!--Twitter icon-->
<a href="http://twitter.com/flashissue" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/3b3zdiavSf26SleQOaDd_twitter-e1386023015819.png" style="height:50px; width:50px" /> </a>&nbsp; &nbsp;&nbsp;
<!--Linkedin icon-->
<a href="http://linkedin.com" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/dJtLdIsbRAix3zQhvygP_linkedin_icon_dark_hover-5be7d72ca83a10c0c76c32d141b0b828.png" style="height:50px; width:50px" /> </a>
</p>
<center><p>Copyright &copy; EOE | all rights reserved.</p></center>
</footer>
</html>
