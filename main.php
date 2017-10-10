<?php
  session_start();
?>


<!DOCTYPE html>
<html>

  <h1 style="font-family:Georgia;color:orange;text-align:center;font-size:60px"> InstaDrink   
   </h1>
   
  <h5 style="color:orange"> Sign in</h5>
		<form action="signin.php" method="POST">
          Username <input type="text" name="username">  <br>
		  Password <input type="text" name="password">  <br>
		       
		  <button type="submit"> Sign in</button>
		  </form>
	<br>
    <form action="signout.php" >Sign out
			  <button type="submit"> Sign out</button>
	</form>	
<?php
   if(isset($_SESSION['id']))
   {echo "Your Session id is" ; echo $_SESSION['id'];
	}
   else echo "You are not logged in";
   
?> 	   
   
 <body style="background:rgb(31, 32, 32);color:white;">
 
	 <div style="font-size:40px">
	    <ul>
		 <li><a href="#chapter1">How does it work </a>   </li>
		 <li><a href="#chapter2">Shop drinks </a>        </li>
		 <li><a href="#chapter3">Customers's reviews</a> </li>
		 <li><a href="#chapter4">Register</a>            </li>
		 <li><a href="#chapter5">Contact </a>            </li>
		 </ul>
	  </div>
	  
	  <img src="http://www.wallpapersin4k.org/wp-content/uploads/2017/04/Funny-Beer-Wallpaper-23.jpeg" 
	      style="width:720px;height:480px;" >
    <br>
    	
   <div style="font-size:30px">	 
	 <div id="chapter1";>
	    <h5 style="color:orange"> How it works </h5>
			<ul><li>Perfect when you are too lazy to go to the store to buy them yourselves. </li>
				<li>Shop your favourite beer,wine,whisky etc. </li>
				<li>You do not have to order a minimum ammount of drinks.Order what you want. </li>
				<li>Very fast delivery.Almost insta delivery.	 </li>
            </ul>				
	   </div>
	<br>
    	
   
     <div id="chapter3";>
	    <h5 style="color:orange"> Customers's reviews </h5>
		<p> Our customers were very satisfied with our services.Here are some of their reviews.
		</div>
	<br>	
	
     <div id="chapter4">
	    <h5 style="color:orange"> Register your account </h5>
		<form action="signup.php" method="POST">
          Username <input type="text" name="username">  <br>
		
		  Password <input type="text" name="password">  <br>
		       
		  <button type="submit"> Sign Up</button>
		  </form>
     </div> 
     <br>	 
   
      <div id="chapter5">
	    <h5 style="color:orange"> Contact  </h5>
		<p> Here is our facebook page if you have any questions.We will respond imediatelly.</p> <br>
		<a href="https://www.facebook.com/profile.php?id=100008389098624"> </a>
		</div> 
   
    </div>
   
   <body/> 
   </html>