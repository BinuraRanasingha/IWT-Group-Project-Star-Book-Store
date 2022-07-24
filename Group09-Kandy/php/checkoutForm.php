<!DOCTYPE.html>
<html>
<head>
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
	<!--checkout from links-->
	<link rel="stylesheet" type="text/css" href="css/checkoutform.css">
	<script src="js/booklistOrder.js"></script>
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

<!--------------Checkoutform------------------------------------------------------------------------------------------>

  <div class="col-2">
  
     <div class="checkform">
	    
		 <!--creating the form-->
	   <form action="checkoutFormProcess.php" method="post" >
	   
         <div class="row">
         <div class="col-1">		  
		   <h3>Billing Address </h3>
			<label>Customer NIC</label> 
		   <input type="text" name="cusID" placeholder="923456789V" required><br>
		   
		   <label>Full Name</label> 
           <input type="text" name="fname" placeholder="Emma Devis" required><br>
		 
		 
           <label>Email</label>
           <input type="text" name="email" id="email"  placeholder="emma@abc.com"><br>
		 
		   <label >Address</label>
           <input type="text" name="adr" id="adr"  placeholder="97. Devine Street"><br>
		 
		   <label>City</label>
           <input type="text" name="city" id="city" placeholder="Newyork"><br>
		 
   		  <div class="row">
           <div class="col-3">
		   <label>State</label>
           <input type="text" name="state" id="state" placeholder="NY"><br>
		   </div>
		   <div class="col-3">
		   <label>Zip</label>
           <input type="text" name="zip" id="zip" placeholder="10001"><br>
		   </div>
          </div>
         </div>
		 
		  <div class="col-2">
		  <h3>Payment</h3>
		   
		    <label>Accepted Cards</label>
            <img src="Images/icon-cc.png" width="230" height="40"><br>
		    			
		    <label>Name on Card</label>
            <input type="text" name="cname" id="cname" placeholder="Emma Elle Davis"><br>
		    
			<div class="col-3">
		      <label>Credit card number</label>
              <input type="text" name="ccnum" id="ccnum" placeholder="1111-2222-3333-4444"><br>
		    </div>
			<div class="col-3">
		      <label>Exp Month</label>
              <input type="text" name="expmonth" id="expmonth" placeholder="September"><br>
		    </div>
		    <div class="row">
             <div class="col-3">
		      <label>Exp Year</label>
              <input type="text" name="expyear" id="expyear" placeholder="2025"><br>
		     </div>
             <div class="col-3">
		      <label>CVV</label>
              <input type="text" name="cvv" id="cvv" placeholder="352"><br>
		 	 </div>
            </div>
           </div>
		 </div>  
            <label>
            <input type="checkbox" id="check1" onclick="enableButton()" selected > Shipping address same as billing
            </label>  
		  
		    <a href="finaldetails.html"><input type="submit" id="btnsub1" name="btn" value="Continue to checkout"  disabled></a>
		 </form>  
	  </div>
    

   </div>
  



<!-- checkout form ends here-->


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