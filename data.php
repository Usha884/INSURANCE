<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>payment Form</title>
     <style>
     *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
      }
      body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
      }
      .container{
        max-width: 700px;
        position: center;
        width: 50%;
        background-color: #fff;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.15);
      }
      .container .title{
        font-size: 25px;
        font-weight: 500;
        position: relative;
      }
 
    </style>
   </head>
<body>

  <div class="container">
    <div class="title">DATA PAGE</div><br>
    <div class="content">

    <ul>
      <li><a href="agent/modified1.php"><h2> Agents Data</h2></a></li><br>
        <li><a href="client/modified1.php"><h2> Customers Data</h2></a></li> <br>
        <li><a href="policy/modified1.php"><h2> Policies Data</h2></a></li> <br>
        <li><a href="premium/modified1.php"><h2> Premiums Data</h2></a></li> <br>
  </ul>
    <ul>
			<li style="float:right;"><a href="index.php"> <h4>Back to homepage</h4></a></li>
		</ul>
</body>
</html>    