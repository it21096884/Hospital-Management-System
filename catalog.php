<?php
	require 'configure.php';
?>

<html>
	<head>
		<!-- add a title (a)-->
		<title>PharmacyMS</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/home.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
	<script type="text/javascript">
		<!--
		$(function() {

			function autoCalcSetup() {
				$('form#cart').jAutoCalc('destroy');
				$('form#cart tr.line_items').jAutoCalc({keyEventsFire: true, decimalPlaces: 2, emptyAsZero: true});
				$('form#cart').jAutoCalc({decimalPlaces: 2});
			}
			autoCalcSetup();


			$('button.button-remove').on("click", function(e) {
				e.preventDefault();

				var form = $(this).parents('form')
				$(this).parents('tr').remove();
				autoCalcSetup();

			});

			$('button.button-add').on("click", function(e) {
				e.preventDefault();

				var $table = $(this).parents('table');
				var $top = $table.find('tr.line_items').first();
				var $new = $top.clone(true);

				$new.jAutoCalc('destroy');
				$new.insertBefore($top);
				$new.find('input[type=text]').val('');
				autoCalcSetup();

			});

		});
		//-->
	</script>
	
	   <style>


			.container{
	width : 700px;
	background-color:rgb(0,0,0,0.8);
	margin: auto;
	color: #FFFFFF;
	padding: 0.5px 0px 0.5px 0px;
	text-align: center;
	border-radius: 10px 10px 0px 0px;
}
			
.container{
	background-color:#e5e9e6;
	width : 1400px;
	height :1000px;
	padding:50px 50px 50px 50px;
	margin: auto ;
	border-radius: 20px 20px 20px 20px;
}
			
form{
	padding: 10px
	width: 150%;
}
.fromadd{
	color: black;
	font-size: 15px;
}
.formnijustify{
	display: flex;
	justify-content: space-between;
}


  		#medi {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#medi  td, #medi th {
  border: 1px solid #ddd;
  padding: 25px;
   font-size:15px;
}

#medi tr:nth-child(even){background-color: #f2f2f2;}

#medi  tr:hover {background-color: #ddd;}

#medi  th {
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: left;
  background-color:#1e4e83 ;
  color: white;
  font-size:20px;
}


input[type=text] {
  width: 300px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 20px;
  background-color: #F5F5F5;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;

}

input[type=text1] {
  width: 300px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 20px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;

}

.button-remove {
  display: inline-block;
  padding: 12px 20px;
  font-size: 17px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: black;
  border: none;
  border-radius: 8px;
  box-shadow: 0 9px #999;
}

.button-remove:hover {background-color: #1e4e83}


.button-remove:active {
  background-color: #1e4e83;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


.button-add {
  display: inline-block;
  padding: 12px 20px;
  font-size: 17px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: black;
  border: none;
  border-radius: 8px;
  box-shadow: 0 9px #999;
}

.button-add:hover {background-color: #1e4e83}


.button-add:active {
  background-color: #1e4e83;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.op {
  width: 60%;
  padding: 10px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.button1 {
  display: inline-block;
  padding: 12px 20px;
  font-size: 17px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: black;
  border: none;
  border-radius: 8px;
  box-shadow: 0 9px #999;
}

.button1:hover {background-color: #1e4e83}


.button1:active {
  background-color: #1e4e83;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
	 
	 .lab{
		 
		font-size: 20px;
		color: black;
	 }
	 </style>
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
	
	<br><br>

	
	<div class="container">
		<center><h1 style="color:black; text-decoration: underline;">PHARMACY MEDICINE CATALOG</h1></center><br><br>
	<center>
	
	<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>

		<div class="contain1">
		<input type="text1" name="txtname" >
		<input type="submit" class= "button1" value="SEARCH MEDICINE" name="btnsubmit" class="button">
		</div>
		</form>
			
		
	
	<br><br>
	
	<?php

if(isset($_POST["btnsubmit"]))
{
$Name = $_POST['txtname'];

$sql = "SELECT * FROM medicine WHERE name LIKE '%$Name%'";

 $result = $con -> query($sql);

if($result -> num_rows > 0)
{
	echo "<table id='medi' border='1'>";
	echo "<th> MedicineID </td> <th> Name </th><th> Price </th>
	<th> Current_Quantity </th>";
	
	//read data
	while($row = $result -> fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["MedicineID"] . "</td>"; 
		echo "<td>" . $row["Name"] . "</td>";
		echo "<td>" . $row["price"] . "</td>";
		echo "<td>" . $row["Current_Quantity"] . "</td>";
		echo "</tr>";	
	}
	
	echo "</table>";
}

else
{
	
	echo "<script> alert('No Records!!') </script>";
	
}

}

?>

<br><br><br>

	<form id="cart">
	<table name="cart">
		<tr>
			<th></th>
			<th style="font-size: 25px;">Name</th>
			<th style="font-size: 25px;">Quantity</th>
			<th style="font-size: 25px;">Price</th>
			<th>&nbsp;</th>
			<th style="font-size: 25px;">Item Total</th>
		</tr>
		<tr class="line_items">
			<td><button class="button-remove">Remove</button></td>
			<td><input type="text" name="name" ></td>
			<td><input type="text" name="qty" ></td>
			<td><input type="text" name="price"></td>
			<td>&nbsp;</td>
			<td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
		</tr>
		<tr class="line_items">
			<td><button class="button-remove">Remove</button></td>
			<td><input type="text" name="name" ></td>
			<td><input type="text" name="qty" ></td>
			<td><input type="text" name="price" ></td>
			<td>&nbsp;</td>
			<td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
		</tr>
		<tr class="line_items">
			<td><button class="button-remove">Remove</button></td>
			<td><input type="text" name="name" ></td>
			<td><input type="text" name="qty" ></td>
			<td><input type="text" name="price" ></td>
			<td>&nbsp;</td>
			<td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
		</tr>
		<tr class="line_items">
			<td><button class="button-remove">Remove</button></td>
			<td><input type="text" name="name" ></td>
			<td><input type="text" name="qty" ></td>
			<td><input type="text" name="price" ></td>
			<td>&nbsp;</td>
			<td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
		</tr>
		<tr class="line_items">
			<td><button class="button-remove">Remove</button></td>
			<td><input type="text" name="name" ></td>
			<td><input type="text" name="qty" ></td>
			<td><input type="text" name="price" ></td>
			<td>&nbsp;</td>
			<td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
		</tr>
		<tr class="line_items">
			<td><button class="button-remove">Remove</button></td>
			<td><input type="text" name="name" ></td>
			<td><input type="text" name="qty" ></td>
			<td><input type="text" name="price" ></td>
			<td>&nbsp;</td>
			<td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td style="font-size: 25px;">Subtotal</td>
			<td>&nbsp;</td>
			<td><input type="text" name="sub_total" value="" jAutoCalc="SUM({item_total})"></td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td style="font-size: 25px;">
				Tax:
				<select name="tax" class="op">
					<option value=".06">CT Tax</option>
					<option selected value=".00">Tax Free</option>
				</select>
			</td>
			<td>&nbsp;</td>
			<td><input type="text" name="tax_total" value="" jAutoCalc="{sub_total} * {tax}"></td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td style="font-size: 25px; color: red;">Total</td>
			<td>&nbsp;</td>
			<td><input type="text" name="grand_total" value="" jAutoCalc="{sub_total} + {tax_total}"></td>
		</tr>
		<tr>
			<td colspan="99"><button class="button-add">ADD+</button></td>
		</tr>
	</table>
</form>
</center>
</div>


<br><br>
	
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
		<footer>
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
</head>
</html>