
<!DOCTYPE.html>
<html>
<head>
	<script src="js/sign up.js"> </script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
    		background-image: url(images/BG1.jpg);
    		-webkit-background-size: cover;
    		background-size: cover;
    		background-position: center;
    		background-attachment: fixed;
    		height: 100vh;
    		margin: 0;
	    	}
    	
	    .menu-area{
	    	height: 38%;
	    	width: 81.6%;
	    	overflow: auto;
	    	background:url("images/headerBG2.jpg");
	    	float:right;
	    }

	    .menu-area ul{
	    	margin: 0;
	    	padding: 0;
	    	list-style: none;
	    }

	    .menu-area ul li{
	    	float: left;

	    }

	    .menu-area ul li a{
	    	width: 120px;
	    	display: block;
	    	padding: 10px;
	    	color: #fff;
	    	text-decoration: none;
	    	text-transform: uppercase;
	    	font-family: poppins;
	    	font-size: 18px;
	    	text-align: center;
	    	margin-top: 80px;
	    }

	    .menu-area ul li a:hover{
	    	background: blue;
	    }

	    #search{
	    	width:220px;
	    	padding:5px;
	    	-webkit-border-radius:25px;
	    	-moz-border-radius:25px;
	    	border-radius:20px;
	    	border: none;
	    	font-size: 18px;
	    	text-align: center;
	    	margin: 15px;
	    	margin-top: 80px;

	    }

	    #searchButton{
	    	color: #e84118;
	    	float: right;
	    	width: 100px;
	    	height: 50px;
	    	border-radius: 20px;
	    	background: orange;
	    	display: flex;
	    	justify-content: center;
	    	align-items: center;
	    	padding:5px;
	    	border: none;
	    	font-size: 18px;
	    	margin: 10px;
	    	margin-top: 80px;
	    }

   	    #shoppingCartButton{
	    	color: #e84118;
	    	float: right;
	    	width: 140px;
	    	height: 50px;
	    	border-radius: 20px;
	    	background: orange;
	    	display: flex;
	    	justify-content: center;
	    	align-items: center;
	    	padding:5px;
	    	border: none;
	    	font-size: 18px;
	    	margin: 10px;
	    	margin-top: 80px;
	    }


	   .wrapper{
	   	width: 1100px;
	   	margin: 0 auto;
	   }

	   .side-navbar{
	   	height:38%;
	   	width: 248px;
	   	position: relative;
	   	z-index: 1;
	   	top: 0;
	   	left: 0;
	   	background-color: black;
	   	overflow-x: hidden;
	   	padding-top:0px;
	   }

	   .side-navbar a{
	   	padding: 1px 1px 1px 10px;
	   	text-decoration: none;
	   	font-size: 16px;
	   	display: block;
	   	text-transform: uppercase;
	   	color: #fff;
	   	overflow-x: hidden;
	   	
	   }

	   .side-navbar a.active{
	   	background-color: #4CAF50;
	   	color: white;
	   }

	   .side-navbar a:hover:not(.active){
	   	background-color: blue;
	   	color: white;
	   }
	   .side-navbar a:hover{
	   	color: blue;
	   }

	   .side-navbar a{
	   	line-height: 60px;
	   	border-bottom: 1px solid blue;
	   	float: none;
	   }

	   	.side-navbar button{
	   	line-height: 60px;
	   	border-bottom: 1px solid blue;
	   	float: none;
	   }

	   .sidenav a, .dropdown-btn {
 	    padding: 5px 1px 1px 10px;
        text-decoration: none;
        font-size: 16px;
        color: white;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
       }

       .sidenav a:hover, .dropdown-btn:hover {
       color: cyan;
       }

       .main {
       margin-left: 200px; 
       font-size: 20px;      
       padding: 0px 10px;
     }

     .active {
      background-color: green;
      color: white;
    }

    .dropdown-container {
     display: none;
     background-color: grey;
     padding-left: 8px;
   }



   .wrapper{
   	width: 1100px;
   	margin: 0 auto;
   }

  .banner{
   	height: 100vh;
   	width: 100%;
   	overflow: hidden;
   	background-image: "Images/logo.png";
   	-webkit-background-size:cover;
   	background-size: cover;
   	background-position: center center;
  }

.text-content h2{
	text-transform: uppercase;
	text-align: center;
	padding-top: 20%;
	font-size: 90px;
	margin: 0;
	color: #fff;
	text-shadow: 0 5px 10px;
	}



.awardedBooksHeader{
	       padding: 1px;
     	   text-align: center;
     	   opacity: .9;
      	   color: white;
      	   font-size: 15px;
      	   
        }


.content{
     	   padding: 5px;
        }

.popularAuthorsHeader{
	       padding: 1px;
     	   text-align: center;
     	   opacity: .9;
      	   color: white;
      	   font-size: 15px;
      	   
        }

.award {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.awardBox{
	width:100%;
	height: 50px;
	position: relative;
	bottom: 0;
	z-index: -1;
	background-color: white;

	

}

    </style>
	<link rel ="stylesheet" href="css/HomeStyles.css">
	<link rel ="stylesheet" href="css/awardedBooks.css">
	
	<title>STAR BOOK STORE</title>

</head>
<body>
<center>
  
	<img src="Images/logo.png" width="200"height="200" class="logo">
 </center>
 
 <center>
	<h1 style="background-color:black; color:white; width: 80%;";>STAR BOOK STORE</h1>
   
</center>

<center>
	<h3 style="background-color:black; color:white; width: 20%;" id="header">WELCOME!</h3>
</center>

</body>
<hr id="test">

<div class="menu-area">
<ul> 
    <li class="menu"><a href="home.html">Home</a></li>
    <li class="menu"><a href="starPublications.html">STAR Publications</a></li>
        
	<li class="menu"><a href="kidsZone.html">Kids Zone</a></li>
	<li class="menu"><a href="newsPapers.html">News Papers</a></li>

	
<form action="php/searchButtonSubmit.php" method="POST">
	<li>
	<input type="text" name="search" id="search" placeholder="what are you looking for...">
	</li>

	<li>
	<button type="submit" name="submit" id="searchButton" class="submit" value="Search">search</button>
	</li>
</form>
	<li>
	<button type="submit" name="Cart" id="shoppingCartButton" class="submit" value="Shopping Cart">Shopping Cart</button>
	</li>

</ul>

</div>




<div class="side-navbar">
	
	<button class="dropdown-btn">My Account</button>
 
  <div class="dropdown-container">

  	<!--Save your page as signIn.html-->
    <a href="signIn.html">Sign In</a>

    <!--Save your page as signUp.html-->
    <a href="signUp.html">Sign Up</a>
  </div>

  	<!--Save your page as bestSellers.html-->
	<a href="bestSellers.html">Best Sellers</a>
	
  <button class="dropdown-btn">Sinhala
    
  </button>
  <div class="dropdown-container">
  	<!--Save your page as sinhalaNovels.html-->
    <a href="#">Novels</a>
    <!--Save your page as sinhalaShortStories.html-->
    <a href="#">Short Stories</a>
    <!--Save your page as sinhalaFictions.html-->
    <a href="#">Fictions</a>
  </div>

 <button class="dropdown-btn">English
    
  </button>
  <div class="dropdown-container">
  	<!--Save your page as englishNovels.html-->
  	<a href="englishNovels.html">Novels</a>
    <!--Save your page as englishShortStories.html-->
    <a href="englishShortStories.html">Short Stories</a>
    <!--Save your page as englishFictions.html-->
    <a href="englishFictions.html">Fictions</a>
  </div>
	
 <button class="dropdown-btn">Tamil
      </button>
  <div class="dropdown-container">
  	<!--Save your page as tamilNovels.html-->
    <a href="tamilNovels.html">Novels</a>
    <!--Save your page as tamilShortStories.html-->
    <a href="tamilShortStories.html">Short Stories</a>
    <!--Save your page as tamilFictions.html-->
    <a href="tamilFictions.html">Fictions</a>
  </div>

	<!--Save your page as magazines.html-->
	<a href="magazines.html">Magazines</a>
	<!--Save your page as stationaries.html-->
	<a href="stationaries.html">Stationaries</a>

	<!--Save your page as specialOrders.html-->
	<a href="specialOrders.html">Special Orders</a>
	<!--Save your page as giftVouchers.html-->
	<a href="giftVoucher.html">Gift Vouchers</a>
	<!--Save your page as delivery.html-->
	<a href="delivery.html">Delivery</a>
</div>


<div class="form">
<h3><center> Sign in</center></h3>
<br>

<form action = "index.php" target = "_self" method = "Post" onsubmit = "return checkPassword()" onclick = "enableButton()">

<label> User Name </label> <br>
	<input type = "text" id = "uname" name = "uname" style = "width:500px" required> <br> <br>
<label> Password </label> <br>
	<input type = "password" id="pwd" name = "pwd" style = "width:500px"  pattern = "[a-z]+[A-Z]+[0-9]{5 , 10} "required> <br> <br>
	<input type = "checkbox" id = "policy" name= "policy" required> Accept privacy policy terms <br> <br>
<center>
<input type = "submit" id = "submit" name = "submit" value = "Sign in" disabled </center>
<br><br>




<center>
<a href="http://www.facebook.com/">
<img alt="FB" src="images/FB.PNG" width="250px" height="40px"></a></center>
<br> <center>
<a href="http://www.Google.com/">
<img alt="Sign in" src="images/Sign in.PNG" width="250px" height="40px"></a></center>

<p><B><center>Not a member? <a href="registration.php">Create new account</a></B></p></center>



</div>
</article></section>


		

<div class="qualityAwardsHeader">
	<center>
      <h2 style="background:blue; color:white; width: 85%; padding:2px;">Premium Quality Best Online Book Store In Sri Lanka </h2>
    </center>
</div>


<div class="awardBox">

<center>
	<img src="images/aW1.jpg" alt="Award" class="award">
    <img src="images/aW2.jpeg" alt="Award" class="award">
    <img src="images/aW3.jpeg" alt="Award" class="award">
    <img src="images/aW4.png" alt="Award" class="award">
    <img src="images/aW5.jpg" alt="Award" class="award">
    <img src="images/aW6.jpg" alt="Award" class="award">
    <img src="images/aW7.jpg" alt="Award" class="award">
</center>
</div>


<!-- Delete Upto Here-->


<br>
<br>


</div>
<footer>
  <div class="footer-wrapper">

	<div class="single-footer" >
	<h2>Payment Options</h2>
	<ul>
		<li>Visa Card</li>
	  	<li>Master Card</li>
	  	<li>American Express</li>
	  	<li>Credit Card</li>
	  	<li>PayPal</li>
	  	<li>EZY Cash</li>
	</ul>
	</div>

	<div class="single-footer" >
	<h2>Contact Us</h2>
	<ul>
		<li>Address:</li>
		<li>Star Publications</li>
	  	<li>No.212/A</li>
	  	<li>New Kandy Road</li>
	  	<li>Kandy</li>
	  	<li>Email:</li>
	  	<li>Books@STAR.lk</li>
	  	<li>Telephone:</li>
	  	<li>0112233445</li>
	</ul>
	</div>


	<div class="single-footer" >
          <br>
	  <img src="Images/logo.png" id="i2">
	  <h2>Star Publications</h2>

	</div>



	<div class="single-footer" >
	  <h2>Our Store</h2>
	  	<ul>
		<li><a href="aboutUs.html">About Us</a></li>

		<!--Save your page as feedback.html-->
		<li><a href="feedbacks.html">Feedbacks</a></li>
		<!--Save your page as privacyPolicy.html-->
		<li><a href="privacyPolicy.html">Prvacy Policy</a></li>
		<!--Save your page as termsAndConditions.html-->
	  	<li><a href="termsAndConditions.html">Terms and Conditions</a></li>
		<!--Save your page as returnPolicy.html-->
	  	<li><a href="returnPolicy.html">Return Policy</a></li>
	  	</ul>
	</div>

		<div class="single-footer" >
	  <h2>Social Media</h2>
	  	<ul>
		<li><a href="https://www.facebook.com/StarBookStore">Facebook</a></li>
	  	<li><a href="https://www.twitter.com/StarBookStore">Twitter</a></li>
	  	<li><a href="https://www.instagram.com/StarBookStore>Instagram"></a></li>
	  	<li><a href="https://www.linkedin.com/StarBookStore">LinkedIn</a></li>
	  	<li>Whatsapp : 0789101112</li>
	  	<li>Viber: 0789101112</li>
	</ul>
	</div>


  </div>
</footer>

<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}




</script>




</body>
 



















</html>