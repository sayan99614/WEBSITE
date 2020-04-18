<?php
?>
<html>
<head>
<style>
p.a {
    word-spacing: 60px;
  }
* {box-sizing: border-box}
body{
    background-color: black;
  }

.q
{
  border: 25px solid #B88846;
    border-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='75' height='75'%3E%3Cg fill='none' stroke='%23B88846' stroke-width='2'%3E%3Cpath d='M1 1h73v73H1z'/%3E%3Cpath d='M8 8h59v59H8z'/%3E%3Cpath d='M8 8h16v16H8zM51 8h16v16H51zM51 51h16v16H51zM8 51h16v16H8z'/%3E%3C/g%3E%3Cg fill='%23B88846'%3E%3Ccircle cx='16' cy='16' r='2'/%3E%3Ccircle cx='59' cy='16' r='2'/%3E%3Ccircle cx='59' cy='59' r='2'/%3E%3Ccircle cx='16' cy='59' r='2'/%3E%3C/g%3E%3C/svg%3E") 25;

}

.mySlides {display: none}
img {vertical-align: middle;}

.header {
  padding: 8px 14px;
  background: white;
  color: white ;
  position: relative;
  top: 0;
  width: 100%;
}
a{
  text-decoration: none;
}

/* Slideshow container */
.slideshow-container {
  height: 510px;
  width: 728px;
  position: relative;
  margin: 0 auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.h1 { color: #d54d7b; font-family: "Vogue", cursive; font-size: 120px; line-height: 160px; font-weight: normal; margin-bottom: 0px; margin-top: 40px; text-align: center; text-shadow: 0 1px 1px #fff; }

.cit { color: #7a7c7f; font-size: 29px; font-family: "Libre Baskerville", serif; line-height: 45px; text-align: center; text-shadow: 0 1px 1px #fff; padding-top: 20px; }

.byline { font-style: italic; color: #B6B6B6; font-size: 24px; margin-top: 20px; text-align: center; text-shadow: 0 1px 1px #fff; }



/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}



/* Caption text */
.text {
  color: #FFFFFF;
  font-size: 24px;
  font-weight: bold;
  padding: 8px 12px;
  background-color: rgba(0,0,0,0.8);
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: infinite;
  transition: background-color 0.6s ;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

</style>
<div class ="header"  id ="my Header">
<center><h3><p class="a">
 

<img src ="img.png" width="15" height="10" ></img>
<a href="main.php"><font color="575772">   HOME    </font>  </a>
<a href="gallery.php"><font color="575772">   GALLERY    </font>  </a>
<font color="#575772">  ACTIVITIES </font> 
<a href="contact.php"><font color="575772">   CONTACT     </font>  </a>
<a href="login.php"><font color="575772">   JOIN    </font>  </a>
<a href="pay.php"><font color="575772">   DONATION     </font>  </a>
<a href="logout.php"><font color="575772">   LOGOUT    </font>  </a>  
<img src ="img.png" width="15" height="10" ></img>
</p></h3></center>

</div>
</head>

<body>
<br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 16</div>
  <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201306/u1_660_062713053447.jpg" style="height: 510px;
  width: 728px">
  <div class="text">EOE Volunteers in Kedarnath</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 16</div>
  <img src="https://newsinfo.inquirer.net/files/2018/12/itogonbodies.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteers in kedarnath Landslides</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 16</div>
  <img src="https://static.indianexpress.com/m-images/M_Id_395364_Uttarakhand.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">Helping the rescue team to distribute food</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 16</div>
  <img src="https://images.news18.com/ibnlive/uploads/2018/08/Kerala-Flood-Aug8.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteers in the Floods</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 16</div>
  <img src="https://www.artofliving.org/sites/www.artofliving.org/files/unity2/blog_image/Uttarakhand-floods-Immediate-call-for-relief-action.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteers helping the locals </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 16</div>
  <img src="https://i.ndtvimg.com/i/2016-06/kedarnath-1_650x400_61466231389.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteers making shelters </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 6</div>
  <img src="https://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2018/08/12/Pictures/floods-in-kerala_cb811aa2-9dff-11e8-8838-278d266b5e3b.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteers in kerala floods </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 16</div>
  <img src="https://th.thgim.com/news/national/kerala/dr2y3y/article24716318.ece/alternates/FREE_660/KERALAFLOODS" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteers making a human chain in kerala floods</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 16</div>
  <img src="https://www.thenational.ae/image/policy:1.762818:1534950995/567565-01-02.jpg?f=16x9&w=1200&$p$f$w=7599aad" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteers distributing food  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">10 / 16</div>
  <img src="https://images.livemint.com/rf/Image-621x414/LiveMint/Period2/2018/08/17/Photos/Processed/Keralarescue11-kSsE--621x414@LiveMint.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteers helping the authorities </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">11 / 16</div>
  <img src="https://www.dailyherald.com/storyimage/DA/20150827/news/150828972/EP/1/13/EP-150828972.jpg&updated=201508281059&MaxW=800&MaxH=800&noborder" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteers helping after Hurricane Katrina </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">12 / 6</div>
  <img src="https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F170828161219-hurricane-harvey-boat-rescue-aug-27.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteer serving in Hurricane Harvey </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">13 / 16</div>
  <img src="https://images.thestar.com/s-wyHqVglRfP3RkoWzW3TP6DXn8=/1200x873/smart/filters:cb(2700061000)/https://www.thestar.com/content/dam/thestar/news/world/2011/03/12/japan_launches_military_rescue_effort_after_quake_tsunami/japanrescue.jpeg" style="height: 510px;
  width: 728px;">
  <div class="text">EOE Volunteer providing after a tsunami in Japan</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">14 / 16</div>
  <img src="https://opt.toiimg.com/recuperator/img/toi/m-70907309/70907309.jpg?resizemode=1&width=90&height=66" style="height: 510px;
  width: 728px;">
  <div class="text">EOE organizeing a blood camp</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">15 / 16</div>
  <img src="https://www.helpageindia.org/wp-content/uploads/2017/06/to-volunteer-mobile.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">EOE also have several old age homes</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">16 / 16</div>
  <img src="https://media.ifrc.org/ifrc/wp-content/uploads/sites/5/2016/07/p-GRC0823.jpg" style="height: 510px;
  width: 728px;">
  <div class="text">we have teamed with Red Cross</div>
</div><br>
<div class="q">
<div class="h1"> We Care </div>
<div class="cit"> E.O.E has served both in national and international grounds.
  We have rescued, served food,  made shelters in Kedarnath Crisis, Kerala floods etc. in India.
  Our volunteers have served internationally  in Hurricane Katrina and Harvey, 2011 tsunami in Japan and many more.
  We also have made several old age homes, orphanages, organised blood donation camps.
  Our volunteers have also teamed up with international NGOs like Red Cross.
  We need humanity and humanity needs us.Let's join hands and make E.O.E a family.
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>


<br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>