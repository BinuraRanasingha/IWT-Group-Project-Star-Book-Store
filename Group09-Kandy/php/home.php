<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
</head>
<title>Sign Up</title>

<body>

<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="js/sign up.js"> </script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
			height:100%;
			width:100%;
			background-image:linear-gradiant(rgba(0,0,0,0.4))rgba(0,0,0,0.4)),url(BG1.jpg);
			position:absolute;
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

	
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1><br><br>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>