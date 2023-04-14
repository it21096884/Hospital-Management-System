<!DOCTYPE html>

<html>
	<head>
	<html lang="en">


	<meta charset="UTF-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">

	<title>Request Form</title>



    
		<!-- add a title (a)-->
		
		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="Styles/Docmain.css">
		<link rel="stylesheet" href="Styles/Request.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
				<script>
			function validateForm(){
                it= document.forms["form"]["ReqID"].value;
                qt = document.forms["form"]["Qty"].value;
				dt = document.forms["form"]["date"].value;
				var numpattern=/^[0-9]+$/;
				var datepatton=/^(0[1-9]|1[0-9]|2[0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
				/*var datepatton = =/^(0[1-9]|1[0-9]|2[0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;*/
				if (it==null||it=="") {
                    alert("Pl. enter the ID")
                    return false
                }
				else if (! qt.match(numpattern) && qt!=""){
					alert("Only enter numbers")
					return false;
				}
                else if (!dt . match(datepatton) && dt!="") {
                    alert(" Enter valid date!")
                    return false
                }
		
				
                else  {
                    return true; 
                }
            }
		
		</script>
		<style>
		
		.sbutton {
  background-color:#424242;
  border: none;
  color: black;
  padding: 14px 30px;
  <!--padding: 15px 32px;-->
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  margin: 4px 2px;
  cursor: pointer;
}
		</style>
	</head>
    <body>
		
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="image/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="#">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="#" class="login">Login</a>
		</div>
		<br>
	</div>
	<div class="wrapper">
		<br>
		<center>
			<div class="maindiv">
				<h3>Request Form</h3>
					<div class="container">
					  <form name="form"  action="req.php" method="post" onsubmit="return   validateForm()" >
						<div class="row">
						  <div class="col-25">
							<label for="Rid"> Request ID</label>
						  </div>
						  <div class="col-75">
							<input type="text" id="Rid" name="ReqID">
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="sname">Section Name</label>
						  </div>
						  <div class="col-75">
							<select id="sname" name="Secname">
							  <option value="Laboratory">Laboratory</option>
							  <option value="pharmacy">Pharmacy</option>
							</select>
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="Iname">Item Name</label>
						  </div>
						  <div class="col-75">
							<select id="Iname" name="Itemname">
							  <option value="Masks">Masks</option>
							  <option value="Gloves">Gloves</option>
							  <option value="Injections">Injections</option>
							  <option value="Amoxicillin">Amoxicillin</option>
							  <option value="Liquid">Liquid</option>
							</select>
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="Qty">Quantity</label>
						  </div>
						  <div class="col-75">
							<input type="text" id="Qty" name="Qty">
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="RDay">Required Date</label>
							
						  </div>
						  <div class="col-75" >
						  <!--span class="lnr lnr-calendar-full"></span>
							<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" id="dp1"-->
							
						  <!--span class="lnr lnr-calendar-full"></span-->
							<input type="text" name="date" placeholder="dd/mm/yyyy">
							
					
						  </div>
						</div>
						<input type= "submit" value="Request" class="sbutton"><br>

					  </form>
					</div>

			</div>
		</center>
	
		<br>
		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- DATE-PICKER -->
			<script src="vendor/date-picker/js/datepicker.js"></script>
			<script src="vendor/date-picker/js/datepicker.en.js"></script>

			<script src="js/main.js"></script>
	</div>
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
		<footer >
			 <img class = "image1" src="image/qr2.PNG" width="121px" height="100px">
			
		    <p>+94 712 571 22</p>
			<p>eservice@gmail.com</p>
			<p>eService PLC,nO:108,W A D Ramanayaka Mawatha,Kandy,Sri Lanka</p>
		
			<br><hr class = "hr1">
			<p class="para4"> @2022 All Rights Reserved </p><br>
			
			<div class="socialmedia">
				<ul>
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-instagram"></a></li>
				</ul>
			</div>
			
			<br>
		</footer>
   </body>	

</html>