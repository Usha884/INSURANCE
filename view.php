<?php
include "connection.php";
if(is_numeric($_GET['Policy_Num'])){    
$sql = "select * from policy_data where Policy_Num = '".$_GET['Policy_Num']."'";    
$result = mysqli_query($conn,$sql); 
$row = mysqli_fetch_object($result);
$sql1 = "select * from customer where Customer_Num = $row->Customer_Num";    
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_object($result1);
$sql2 = "select * from agent where Agent_code = '$row->Agent_code'";    
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_object($result2);
$sql3 = "select * from premium where Policy_Num = $row->Policy_Num";    
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_object($result3);
}

?>
<html>    
	<style>
		body {
    color: #181515;
    font-size: 50px;
    font-family: Verdana, Arial, Helvetica, monospace;
    background: linear-gradient(135deg, #71b7e6, #cde0cf);
	font-color:black;	
}
		h1
		{
			color:black;
		}

		.container{
        max-width: 700px;
        width: 25%;
        background-color: #d5f4e6;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.15);
		color:black;
      }
	  table {
		border:10px solid black;
	  }
		</style>
    <head>    
        <title><u>Policy Information</u></title>  
		<link href = "style.css" type = "text/css" rel = "stylesheet" />  
    </head>    
    <body>    
        <link href = "policy/registration.css" type = "text/css" rel = "stylesheet" />
		<!-- <ul>
			<li><a href="policy/modified1.php"> Back to Policy datas</a></li>
			<li style="float:right;"><a href="index.php"> Back to homepage</a></li>
		</ul> -->
		<center>
		<h1> Policy Data </h1>
		<div class = "container">
		<!-- width = "50%" border="1" cellspacing = "1" cellpadding = "3" align="center"  -->
        <table width = "90%" height = "80%"  cellspacing = "1" cellpadding = "3" align="center">
            <tr valign = "top" align = "center">
                <td>Policy Number: <?php echo "$row->Policy_Num";?></td>
				<td>Agent Code: <?php echo "$row2->Agent_code";?></td>
                <td>Customer Number: <?php echo "$row1->Customer_Num";?></td>
				<td>Customer Name: <?php echo "$row1->First_Name $row1->Middle_Name $row1->Last_Name"; ?>				
			</tr>
			<!-- DOC Product Sum_Assured Pay_Period Ins_Period -->
				<tr valign = "top" align = "center">
					<td>DOC: <?php echo "$row->DOC";?></td>
					<td>Product: <?php echo "$row->Product";?></td>
					<td>Sum Assured: <?php echo "$row->Sum_Assured";?> Rs.</td>
					<td>Payment Period: <?php echo "$row->Pay_Period";?> Yrs.</td>
					<td>Insurance Period: <?php echo "$row->Ins_Period";?> Yrs.</td>
				</tr>
			<tr valign = "top" align = "center">
				<td>Marital Status: <?php if($row1->Marital_status=='M'){echo "Married";} else{echo "UnMarried";}?></td>
				<td>Spouse: <?php echo "$row1->Spouse";?></td>
			</tr>
			<tr valign = "top" align = "center">
				<td>Address: <?php echo "$row1->Address";?></td>
				<td>PIN: <?php echo "$row1->Pincode";?>
				<td>Contact: <?php echo "$row1->Contact_Number";?></td>
			</tr>
			<tr valign = "top" align = "center">
				<td>Mother: <?php echo "$row1->Mother_Name";?>[<?php if($row1->Mother_Status=='D'){echo "Dead";} else{echo "Alive";}?>]</td>
				<td>Father: <?php echo "$row1->Father_Name";?>[<?php if($row1->Father_Status=='D'){echo "Dead";} else{echo "Alive";}?>]</td>
				</tr>
			</table>
	</div>
	<ul>
			<li><a href="policy/modified1.php"> Back to Policy datas</a></li>
			<li style="float:right;"><a href="index.php"> Back to homepage</a></li>
		</ul>
		</center>
    </body>    
</html>