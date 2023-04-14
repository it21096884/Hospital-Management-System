<!DOCTYPE html>
<html lang="en">
<?php

	require 'config.php';
	// select Query
	$sql ="SELECT RequestListID ,Item_Name,Section,Required_Date,Quantity,Status FROM requestlist";
	// resultser int result variable
	
	$result= mysqli_query($con,$sql);
	
?>
<html>
	<head>

	<meta charset="UTF-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">

	<title>Monthly Report</title>



    
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
		<style>
		
				
body {
 background-image: url("../image/img.jpg");
 background-repeat:no-repeat;

}

.maindiv{
	
	padding:1px;
	position:relative;
	background:#E0FFFF;
	width:800px;
	height:500px;
	text-align:center;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
	bottom: 0;
	margin-left:15px;
	margin-bottom:5px;
}
.bottom{
	padding:1px;
	position:relative;
	background:#E0FFFF;
	width:1000px;
	height:100px;
	text-align:center;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
	bottom: 0;
	margin-left:15px;
	margin-bottom:5px;
	
}
.leftdiv{
	float:left;
	position:absolute;
	height:500px;
	width:200px;
	background:#98AFC7;
	bottom: 0;
}
.rightdiv{
	
	left:3px;
	float:right;
	display:inline-block;
	height:500px;
	width:600px;
	background:#E0FFFF;
	bottom: 0;
}

div[class*=box] {
  height: 33.33%;
  width: 100%; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.box-1 { background-color:#29465B}

.btn {
  line-height: 50px;
  height: 50px;
  text-align: center;
  width: 250px;
  cursor: pointer;
}

/* 
========================
      BUTTON ONE
========================
*/
.btn-one {
  color: #FFF;
  transition: all 0.3s;
  position: relative;
}
.btn-one span {
  transition: all 0.3s;
}
.btn-one::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  transition: all 0.3s;
  border-top-width: 1px;
  border-bottom-width: 1px;
  border-top-style: solid;
  border-bottom-style: solid;
  border-top-color: rgba(255,255,255,0.5);
  border-bottom-color: rgba(255,255,255,0.5);
  transform: scale(0.1, 1);
}
.btn-one:hover span {
  letter-spacing: 2px;
}
.btn-one:hover::before {
  opacity: 1; 
  transform: scale(1, 1); 
}
.btn-one::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.3s;
  background-color: rgba(255,255,255,0.1);
}
.btn-one:hover::after {
  opacity: 0; 
  transform: scale(0.1, 1);
}

*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}

.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
.sbutton {
  background-color:#737CA1;
  border: none;
  color: black;
  padding: 5px 5px;
  <!--padding: 15px 32px;-->
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  
  cursor: pointer;
}
.col-75 {
  margin-left:100px;
  width: 25%;
  margin-top: 6px;
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
				<div class="leftdiv">
				<center><br><br><br><br><br>
					<div class="box-1" onclick="window.location='StocksD.php';">
					  <div class="btn btn-one">
						<span>STOCK DETAILS</span>
					
					  </div>
					</div>
					<br><br>
					<!--2 -->
					<div class="box-1" onclick="window.location='Additem.php';">
					  <div class="btn btn-one">
						<span>ADD NEW ITEM</span>
						
					  </div>
					</div>
					<br><br>
					<!-- #3 -->
					<div class="box-1" onclick="window.location='supplierD.php';">
					  <div class="btn btn-one">
						<span>SUPPLIER DETAILS</span>
						
					  </div>
					</div>
					<br><br>
					<!-- #4 -->
					<div class="box-1" onclick="window.location='reportInv.php';">
					  <div class="btn btn-one">
						<span>VIEW REPORT</span>
						
					  </div>
					</div>
			
				</center>
				<p style="font-size:20px;color:#BCC6CC">
				</p>
				
			</div>
			<div class="rightdiv">
			<center>
				<h2>Request Item List</h2>
				<div class="table-wrapper">
					<table class="fl-table">
						<thead>
						<tr>
							<th>ReqID</th>
							<th>Section</th>
							<th>Item name</th>
							<th>Quantity</th>
							<th>Required Date</th>
							<th>Status</th>
							<th>Check</th>
						</tr>
						</thead>
						<?php

							while ($row = $result -> fetch_assoc())
							{
								if($row ["Status"]=='P')
								{
									$s=$row["Status"]="P";
							
						?>						
						<tbody>
						<tr>
								<td><?php echo $row["RequestListID"]; ?></td>
								<td><?php echo $row["Section"]; ?></td>
								<td><?php echo $row["Item_Name"]; ?></td>
								<td><?php echo $row["Quantity"]; ?></td>
								<td><?php echo $row["Required_Date"]; ?></td>
								<td><?php echo $s; ?></td>
								<td><button type="button" class="sbutton" ><a href="ckbutton.php?id=<?php echo $row["RequestListID"]; ?>">Check</a></button></td>
						</tr>
						<?php
								}
							}
						?>						

						</tbody>
					</table>
				</div>
			</center>
			
			</div>

		</div>
		
 

	<h2>Search items</h2>
 
							<center>
                                <form action="" method="GET">
                                    <div class="col-75">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="sbutton">Search</button>
                                    </div>
                                </form>
							</center>
	    <div class="table-wrapper">
					<table class="fl-table">
						<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Price</th>
							<th>Current Stock</th>
							<th>Description</th>
							<th>Supplier Name</th>
							
						</tr>
						</thead>
                           
							<tbody>
                                <?php 
                                    

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM item WHERE CONCAT(ItemID,Name) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['ItemID']; ?></td>
                                                    <td><?= $items['Name']; ?></td>
                                                    <td><?= $items['Price']; ?></td>
                                                    <td><?= $items['Current_Stock']; ?></td>
													<td><?= $items['Description']; ?></td>
													<td><?= $items['SupplierName']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
							</div>
                        </table>


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

</html>