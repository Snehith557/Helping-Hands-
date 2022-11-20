<!DOCTYPE html>
<html>

<head>

<title>Sunshine and Smiles</title>

<!--meta tags for responsive website-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--icons-->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--external css-->
<link rel="stylesheet" href="style.css">

<!--Javascript-->
<script src="javascript.js"></script>

</head>


<body>
<!--navigation bar-->
<div class="topnav">
  <a class="active" href="css.html"><i class="fa fa-home"></i> Home</a>
  <div class="dropdown">
   <button class="drpbutton"><i class="fa fa-globe"></i> Donate</button>
   <div class="droplist">
    <a href="donateN.php"><b><u> Clothes</u></a>
    <a href="donateP.php"><b><u> Money</u></a>
	<a href=""><b><u> Medicines </u></a>
  <!-- <a href="request.php"><i class="fa fa-globe"><b><u> Request form</u></a>
  <a href="reqDet.php"><i class="fa fa-home"><b><u>Request Details</u></a> -->
  
    </div>
   </div>
  <a href="contact.html"><i class="fa fa-envelope"></i> Contact</a>
  <a href="index.html"><i class="fa fa-user"></i> Log in/out</a> 
  <a href="request.php"><i class="fa fa-globe"><b><u> Request form</u></a>
  <a href="reqDet.php"><i class="fa fa-home"><b><u>Request Details</u></a>
  

<!--search bar-->
  <div class="search">
   <input type="text" placeholder="Search..." class="text1" autocomplete="off" onkeyup="myFunction()">
   <button type="submit"><i class="fa fa-search"></i></button>
   <ul class="myUL">
    <li><a href="css.html"> About Us</a></li>
    <li><a href="contact.html"> Contact</a></li>
    <li><a href="clothes.php"> Donate Clothes</a></li> <!-- add link of the Donate clothes page --> 
    <li><a href="donateP.php"> Donate Money</a></li> <!-- add link of the  Donate Money Page--> 
    <li><a href="Contact.html"> Email</a></li>
    <li><a href="login.php"> Login</a></li>
    <li><a href="signup.php"> </a></li>
    <li><a href="css.html"> Social media</a></li>
    <li><a href="policy.html" target="_blank">Terms & Policy</a></li>
    <li><a href="#" style="cursor:context-menu;background-color:white;color:black;"><i>No results found..</i></a></li>
   </ul>
  </div>
</div>

<!--Slides-->
<!--slide 1-->
 <div class="slideshow-container">
  <div class="mySlides">
   <img src="clothes.jpg" style="width:100%" height = "600">
   <div class="text">
    <p>If not you, then who? If not now, then when?</p>
   </div>
  </div>
<!--slide 2-->
  <div class="mySlides">
   <img src="food_.jpg"  width="100%" height="600">
   <div class="text">
    <p>If not you, then who? If not now, then when?</p>
   </div>
  </div>
<!--slide 3-->
  <div class="mySlides">
   <img src="money_sen.jpg" style="width:100%" height= "600">
   <div class="text">
    <p>If not you, then who? If not now, then when?</p>
   </div>
  </div>
 </div>
</br>
</br>
</br>
</br>
</br>

<!--dots-->
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<!--Social media bar-->
<div class="icon-bar">
  <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook" ></i></a>
  <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
  <a href="https://accounts.google.com/" class="google" target="_blank"><i class="fa fa-google-plus"></i></a>
  <a href="https://gr.pinterest.com/" class="pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a>
  <a href="https://www.instagram.com" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
</div>

<!--main text-->

<div class="main">
 <h2>Who are we?</h2>
 <p>In our charity, we provide help to people in need. </br> People impacted of poverty, starvation, natural disaster and war are some of the people we help every day. Through our help we encourage them to dream of a better life. We support, financially and physically, human rights for people of all ages around the world. </br></p>
 <br/><br/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>



 
		
	
		
		<div id = "div1-el">
			
			<a href ="clothes.php" ><img src="clothes.png" height = 350	></a> 
			
			
		</div>
		
		<div id = "div2-el">
			
			
			<a href ="food.php" ><img src="food2.png" height = 350 width=1235 	></a> 
			
		</div>
		
		<div id = "div3-el">
			
			
			<a href ="money.php" ><img src="money.png" width=1150	></a> 
		</div>
			
		
			
	
	
	
    


 
 <h2>Want to help?</h2>
 <p> Become a member! <a href="donateP.php"><b>Donate.</b></a> Your donation could be life-saving for someone else around the world. Your donation can help us to provide millions of people a better lives. <a href="donateN.php"><b>Get involved.</b></a> Take action with us. Join our team to some voluntary actions of our charity.</br></br></p><p align="center"><b> Together we are stronger. <a href="login.php">Sign Up.</a></b> </br></br> <i class="fas fa-hand-holding-heart"></i> </p></br>
</div>


<!--JavaScript-->
<!--Script for slides and dots-->
<script>
 var slideIndex = 1;
 showSlides(slideIndex);
</script>


</body>
</html> 
