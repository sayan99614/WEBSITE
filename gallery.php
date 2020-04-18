<?php
?>
<html>
<head>
<title>gallery</title>
<style>
<style>

p.a {
  word-spacing: 60px;
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
 background-image: url("hh.jpg");
  min-height: 400px;
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
  letter-spacing: 5px;
  text-align:middle;

}

h3 {
  letter-spacing: 10px;
  text-transform: uppercase;
  font: 18px "Lato", sans-serif;
  color: #ffffff;
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
  font-color: #f0f8ff
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}


.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}


.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}


.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}


.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}


.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

.form-container .cancel {
  background-color: red;
}


.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}


div.gallery {
  margin: 5px;
  

  width: 180px;
}



div.gallery img {
  width: 170%;
  height: auto;
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
<a href="main.php"><font color="575772">   HOME   </font> </a> 
<font color="#575772">  GALLERY</font>
<a href="activity.php"><font color="575772">   ACTIVITIES   </font> </a> 
<a href="contact.php"><font color="575772">   CONTACT </font> </a> 
<a href="login.php"><font color="575772">   JOIN    </font>  </a> 
<a href="pay.php"><font color="575772">   DONATION     </font>  </a>
<a href="logout.php"><font color="575772">   LOGOUT    </font>  </a>  
</p></h3></center>

</p></h3></center>
</div>



</head>
<body>
<br>
<br>
<br>

  
<img src="earthquake.jpg" alt="nepal" width="400" height="200" hspace="65">
<img src="kedarnath.jpg" alt=" kedarnath crisis" width="400" height="200"  hspace="35">
<img src="kenya.jpg" alt="war refugee" width="400" height="200"  hspace="35">
<img src="image2.jpg" alt="kids" width="400" height="200"  hspace="65">
<img src="image3.jpg" alt="nepal" width="400" height="200" hspace="35">
<img src="image4.jpg" alt=" kedarnath crisis" width="400" height="200"  hspace="35">
<img src="image5.jpg" alt="war refugee" width="400" height="200"  hspace="65">
<img src="image6.jpg" alt="kids" width="400" height="200"  hspace="35">
<img src="image7.jpg" alt="nepal" width="400" height="200" hspace="35">
<img src="image8.jpg" alt=" kedarnath crisis" width="400" height="200"  hspace="65">
<img src="image9.jpg" alt="war refugee" width="400" height="200"  hspace="35">
<img src="image10.jpg" alt="kids" width="400" height="200"  hspace="35">
<img src="homeless.jpg" alt="nepal" width="400" height="200" hspace="65">
<img src="old.jpg" alt=" kedarnath crisis" width="400" height="200"  hspace="35">
<img src="irma.jpg" alt="war refugee" width="400" height="200"  hspace="35">
<img src="humanity1.jpeg" alt="kids" width="400" height="200"  hspace="65">
<img src="humanity2.jpeg" alt="war refugee" width="400" height="200"  hspace="35">
<img src="humanity.jpg" alt="kids" width="400" height="200"  hspace="35">


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


