<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ACCOUNTS</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">

	<style type="text/css">
		body
		{
			background: url(acc1.png);
			background-size: 800px 550px;
			background-attachment:fixed;
			background-repeat:no-repeat;
			background-position: right;
			padding-left: 10px;
			background-color:  /*#eab676*/#edcaab;
		}
		.fitem
		{	
			background-color: white;
			background: url(acc1.png);
			background-size: 600px 500px;
			background-attachment:fixed;
			background-repeat:no-repeat;
			background-position: 90% 65%;
			width: 1460px;
			height: 640px;
			position: fixed;
			border-radius:30px;
		}
		.fitem1
		{
			background: linear-gradient(to bottom, /*#aeb8fd*/#36474f 0%, /*#aeb8fd*/#36474f 33%, #e9f3ff 33%, #e9f3ff 100%) rgba(255, 255, 255, 0.1);
			margin-top: 50px;
			margin-left: 30px;
			width: 300px;
			height: 300px;
			border-radius:20px;
			padding-left: 27px;
			padding-top: 20px;
			border-color: black;
			overflow: hidden;
			position: static;
		}
		.fitemin
		{
			background: white; /*linear-gradient(to bottom, /*#aeb8fd*/#03c04f 0%, /*#aeb8fd*/#03c04f 39%, #e9f3ff 39%, #e9f3ff 100%);*/
			margin: 90px;
			width: 120px;
			height: 120px;
			border-color: black;
			border-radius:50%;
			margin-left: 225px;
			margin-bottom: 28px;
		}
		.fcolcontainer
		{	
			width:auto;
			height:100%;
			display:flex;
			flex-direction:column;
			justify-content:space-around;
		}
		.frowcontainer
		{
			width:auto;
			height:100%;
			display:flex;
			padding-right: 800px;
			flex-direction:row;
			justify-content:space-around;
		}
		.img1
		{
			position: absolute;
		}
		.fonthead
		{
			font-family: 'Source Sans Pro', sans-serif;
			font-size: 17px;
			font-weight: bold;
		}
		.pos
		{
			position: relative;
			margin-top: 100px;
		}
		.button 
		{
  			display: flex;
  			height: 45px;
  			padding: 0;
  			margin-left: 50px;
  			background: #009578;
  			border: none;
  			outline: none;
  			border-radius: 5px;
  			overflow: hidden;
  			font-family: "Quicksand", sans-serif;
  			font-size: 15px;
  			font-weight: 500;
  			cursor: pointer;
  			transform:scale(1);
  			transition:1s;
		}
		.button:hover 
		{
  			background: #008168;
  			transform:scale(1.15);
			transition:1s;
		}
		.button:active
		{
  			background: #006e58;
  		}
		.button__text,
		.button__icon 
		{
  			display: inline-flex;
  			align-items: center;
  			padding: 0 20px;
  			color: #fff;
  			height: 100%;
		}
		.button__icon 
		{
  			font-size: 1.5em;
  			background: rgba(0, 0, 0, 0.08);
		}
		.fheadleft
		{
			justify-content:space-around;
			font-family: 'Capriola', sans-serif;
			padding-left: 70px;
			padding-top: 12px;
		}
		.fheadright
		{
			justify-content:space-around;
			font-family: 'Capriola', sans-serif;
			padding-left: 800px;
			font-size: 25px;
			text-decoration: none;
		}	
	</style>
</head>
<body>
	<div class="fheadleft">
		<font size="20px"><strong>Bankers</strong></font><font size="5px">.com</font>
		<span class="fheadright"><a href="index.php" style="text-decoration: none; color:white">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="spark2.php" style="text-decoration: none; color:white">Explore</a></span>
	</div>
	<div class="frowcontainer">
		<div class="fcolcontainer">
		<div class="img1">
			<div class="fitemin"><img src="1.1.png" width="120px" height="112px">&nbsp</div>
		</div>
			<div class="fitem1" style="background: linear-gradient(to bottom, /*#aeb8fd*/#d91a60 0%, /*#aeb8fd*/#d91a60 33%, #e9f3ff 33%, #e9f3ff 100%);">
				<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=1";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    			?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
						<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
	</div>	
	 <?php
        }
     ?>
		<div class="fcolcontainer">
			<div class="img1">
				<div class="fitemin"><img src="2.2i.png" width="120px" height="110px"></div>
			</div>
				<div class="fitem1">
				<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=2";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    			?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
						<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
		</div>
	</div>
		 <?php
        }
     ?>
	
	<div class="frowcontainer">
		<div class="fcolcontainer">
			<div class="img1">
				<div class="fitemin"><img src="3.3.png" width="121px" height="120px"></div>
			</div>
				<div class="fitem1" style="background: linear-gradient(to bottom, #0277bd 0%, #0277bd 33%, #e9f3ff 33%, #e9f3ff 100%);">
					<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=3";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    			?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
						<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
		</div>
			 <?php
        }
     ?>
	
		<div class="fcolcontainer">
			<div class="img1">
				<div class="fitemin"><img src="4.4.png" width="118px" height="118px"></div>
			</div>
				<div class="fitem1" style="background: linear-gradient(to bottom, #c4c4c4 0%, #c4c4c4 33%, #e9f3ff 33%, #e9f3ff 100%);">
					<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=4";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    			?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
						<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
		</div>
	</div>
		 <?php
        }
     ?>
	
	<div class="frowcontainer">
		<div class="fcolcontainer">
			<div class="img1">
				<div class="fitemin"><img src="5.5.png" width="122px" height="116px"></div>
			</div>
				<div class="fitem1" style="background: linear-gradient(to bottom, #3367d5 0%, #3367d5 33%, #e9f3ff 33%, #e9f3ff 100%);">
					<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=5";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    				?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
						<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
		</div>
			 <?php
	       		 }
	     		?>
	
		<div class="fcolcontainer">
			<div class="img1">
				<div class="fitemin"><img src="6.6.png" width="118px" height="115px"></div>
			</div>
				<div class="fitem1" style="background: linear-gradient(to bottom, #566e7a 0%, #566e7a 33%, #e9f3ff 33%, #e9f3ff 100%);">
					<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=6";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    			?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
						<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
		</div>
</div>
	 <?php
        }
     ?>

<div class="frowcontainer">
		<div class="fcolcontainer">
			<div class="img1">
				<div class="fitemin"><img src="7.7.png" width="153px" height="115px"></div>
			</div>
				<div class="fitem1" style="background: linear-gradient(to bottom, #0277bd 0%, #0277bd 33%, #e9f3ff 33%, #e9f3ff 100%);">
					<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=7";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    			?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
					<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
		</div>
	 <?php
        }
     ?>
	
		<div class="fcolcontainer">
			<div class="img1">
				<div class="fitemin"><img src="8.8.png" width="116px" height="120px"></div>
			</div>
				<div class="fitem1" style="background: linear-gradient(to bottom, #e4b433 0%, #e4b433 33%, #e9f3ff 33%, #e9f3ff 100%);">
					<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=8";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    			?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
					<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
		</div>
	</div>
		 <?php
        }
     ?>
	
	<div class="frowcontainer">
		<div class="fcolcontainer">
			<div class="img1">
				<div class="fitemin"><img src="9.9.png" width="120px" height="116px"></div>
			</div>
				<div class="fitem1" style="background: linear-gradient(to bottom, #80c893 0%, #80c893 33%, #e9f3ff 33%, #e9f3ff 100%);">
					<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=9";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    			?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
						<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
		</div>
		 <?php
        }
     ?>
	
		<div class="fcolcontainer">
			<div class="img1">
				<div class="fitemin"><img src="10.10.png" width="151px" height="140px"></div>
			</div>
				<div class="fitem1" style="background: linear-gradient(to bottom, #5bbdda 0%, #5bbdda 33%, #e9f3ff 33%, #e9f3ff 100%);">
					<?php
    				include 'dbconnect.php';
   		 			$sql = "SELECT * FROM accounts where ID=10";
   					 $result = mysqli_query($conn,$sql);
					?>
					<?php 
       				 while($rows=mysqli_fetch_assoc($result)){
    			?>
					<div>
						<div class="fonthead"><font color="white"><strong>E-mail :</strong></font> 
						<br><?php echo $rows['E-mail']?></div>
					</div>
					<div class="fonthead">
							<br><br><br>
							<div><strong>ID :</strong> <?php echo $rows['ID'] ?><br><br></div>
							<div><strong>Name :</strong> <?php echo $rows['Name']?><br><br></div>
							<div><strong>Balance :</strong> <?php echo $rows['Balance']?></div><br>
					</div>
						<a href="transaction.php?id= <?php echo $rows['ID'] ;?>" style="text-decoration: none; color:white"><button type="button" class="button">
  							<span class="button__text">TRANSACT</span>
  							<span class="button__icon"><i class="fa fa-paper-plane-o" style="font-size: 18px;"></i>
  							</span>
						</button></a>
			</div>
		</div>
	</div>
	 <?php
        }
     ?>
	
</body>
</html>