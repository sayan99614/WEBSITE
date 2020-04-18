<?php
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>payment gateway</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="checkout_form">
    <div class="card_number" id="card-container">
        <input type="text" class="input" id="card" placeholder="0000 0000 0000 0000"> 
        <div id="logo"></div>
    </div>
    <div class="card_grp">   
      <div class="expiry_date">
        <input type="text" class="expiry_input" data-mask="00"  placeholder="00">
        <input type="text" class="expiry_input" data-mask="00" placeholder="00">
      </div>
      <div class="cvc">
        <input type="text" class="cvc_input" data-mask="000" placeholder="000">
        <div class="cvc_img">
            ?
           <div class="img">
             <img src="https://i.imgur.com/2ameC0C.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="btn">
      pay
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="card-validator.js"></script>
</body>
</html>