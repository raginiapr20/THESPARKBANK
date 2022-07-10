<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bankers.com</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<style>
	body
	{
		background: Blue;
	}
	.frowcontainer
	{
		width:auto;
		height:100%;
		display:flex;
		flex-direction:row;
		justify-content:space-around;
	}
	.fitem1
	{
		background: linear-gradient(to right, #ffc653 0%, green 37%, #e9f3ff 36%, #e9f3ff 100%);
		margin: 18px;
		border: 10px;
		width: 710px;
		height: 325px;
		border-radius:60px;
	}
	.fitem2
	{
		background: linear-gradient(to right, #ff3f4a 0%, purple 37%, #e9f3ff 36%, #e9f3ff 100%);
		margin: 18px;
		border: 2px;
		width: 710px;
		height: 325px;
		border-radius:60px;
	}
	.fitem3
	{
		background: linear-gradient(to right, #609fad 0%, yellow 37%, #e9f3ff 36%, #e9f3ff 100%);
		margin: 18px;
		border: 2px;
		width: 710px;
		height: 325px;
		border-radius:60px;
	}
	.fitem4
	{
		background: linear-gradient(to right, #438aa8 0%, red 37%, #e9f3ff 36%, #e9f3ff 100%);
		margin: 18px;
		border: 2px;
		width: 710px;
		height: 325px;
		border-radius:60px;
	}
	.fcolcontainer
	{
		width:auto;
		height:100%;
		display:flex;
		flex-direction:column;
		justify-content:space-around;
	}
	.fonthead
	{
		font-family: 'Source Sans Pro', sans-serif;
		font-size: 32px;
		line-height: 1.8em;
		font-weight: bold;
	}
	.button1 
	{
  		background-color: #e9f3ff; 
  		color: #ffc653;
  		padding: 12px 12px;
  		text-align: center;
  		text-decoration: none;
  		display: inline-block;
  		font-size: 17px;
  		font-family: 'Source Sans Pro', sans-serif;
  		border-radius:5px;
  		transform:scale(1);
  		transition:1s;
	}
	.button1:hover
	{
		transform:scale(1.15);
		transition:1s;
	}
	.button2
	{
  		background-color: #e9f3ff; 
  		color: #609fad;
  		padding: 12px 12px;
  		text-align: center;
  		text-decoration: none;
  		display: inline-block;
  		font-size: 17px;
  		font-family: 'Source Sans Pro', sans-serif;
  		border-radius:5px;
  		transform:scale(1);
  		transition:1s;
	}
	.button2:hover
	{
		transform:scale(1.15);
		transition:1s;
	}
	.button3 
	{
  		background-color: #e9f3ff; 
  		color: #ff3f4a;
  		padding: 12px 12px;
  		text-align: center;
  		text-decoration: none;
  		display: inline-block;
  		font-size: 17px;
  		font-family: 'Source Sans Pro', sans-serif;
  		border-radius:5px;
  		transform:scale(1);
  		transition:1s;
	}
	.button3:hover
	{
		transform:scale(1.15);
		transition:1s;
	}
	.button4 
	{
  		background-color: #e9f3ff; 
  		color: #438aa8;
  		padding: 12px 12px;
  		text-align: center;
  		text-decoration: none;
  		display: inline-block;
  		font-size: 17px;
  		font-family: 'Source Sans Pro', sans-serif;
  		border-radius:5px;
  		transform:scale(1);
  		transition:1s;
	}
	.button4:hover
	{
		transform:scale(1.15);
		transition:1s;
	}
	</style>
</head>
<body>
	<div class="frowcontainer">
		<div class="fcolcontainer">
			<div class="fitem1">
				<div class="frowcontainer">
					<div>
						<div class="fonthead">
							<p><font color="white">TRANSACTIONS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></p>
						</div>
						<div>
							<font color="white" face="Source Sans Pro" >&nbsp&nbsp&nbspThe user can send or receive<br>&nbsp&nbsp&nbspmoney from the<br>&nbsp&nbsp&nbsp<strong>TRANSACTIONS</strong> tab.</font>
							<br>
							<p></p>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<p class="button1"><a href="trans.php"style="text-decoration: none; color:#ffc653"><strong>LEARN MORE</strong></a></p><br>
							<font color="white" size="5px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9673&nbsp&nbsp&nbsp&#9675&nbsp&nbsp&nbsp&#9675&nbsp&nbsp&nbsp&#9675</font>
						</div>
					</div>
				<div>
					<p></p>
					<img src="send_prev_ui.png" width="340px" height="310px">&nbsp&nbsp&nbsp
				</div>
				</div>
			</div>
			<div class="fitem3">
				<div class="frowcontainer">
					<div>
						<div class="fonthead">
							<p><font color="white">&nbsp&nbspACCOUNTS</font></p>
						</div>
						<div>
							<font color="white" face="Source Sans Pro">The user can check the <br>accounts registered in<br> the bank by <strong>ACCOUNTS</strong> tab.</font>
							<br>
							<br>
							&nbsp&nbsp&nbsp&nbsp&nbsp<p class="button2"><a href="accounts.php"style="text-decoration: none; color:#609fad"><strong>LEARN MORE</strong></a></p><br>
							<font color="white" size="5px">&nbsp&nbsp&nbsp&#9675&nbsp&nbsp&nbsp&#9675&nbsp&nbsp&nbsp&#9673&nbsp&nbsp&nbsp&#9675</font>
						</div>
					</div>
					<div>
					<p><br></p>
					<img src="acc.png" width="290px" height="240px">&nbsp&nbsp&nbsp&nbsp
				</div>
				</div>
			</div>
		</div>
		<div class="fcolcontainer">
			<div class="fitem2">
				<div class="frowcontainer">
					<div>
						<div class="fonthead">
							<p><font color="white">&nbsp&nbsp&nbsp&nbspHISTORY</font></p>
						</div>
						<div>
							<font color="white" face="Source Sans Pro">The user can check the history<br> of transactions performed <br>in the <strong>HISTORY</strong> tab.</font>
							<br>
							<p></p>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<p class="button3"><a href="history.php"style="text-decoration: none; color:#ff3f4a"><strong>LEARN MORE</strong></a></p><br>
							<font color="white" size="5px">&nbsp&nbsp&nbsp&nbsp&#9675&nbsp&nbsp&nbsp&#9673&nbsp&nbsp&nbsp&#9675&nbsp&nbsp&nbsp&#9675</font>
						</div>
					</div>
					<div>
					
					<img src="his3_prev_ui.png" width="330px" height="330px">&nbsp&nbsp&nbsp&nbsp&nbsp
				</div>
				</div>
			</div>
			<div class="fitem4">
				<div class="frowcontainer">
					<div>
						<div class="fonthead">
							<p><font color="white">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHOME</font></p>
						</div>
						<div>
							<font color="white" face="Source Sans Pro">The user can go back to the <br>home page<br> by <strong>HOME</strong> tab.</font>
							<br>
							<p></p>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<p class="button4"><a href="index.php"style="text-decoration: none; color:#438aa8"><strong>LEARN MORE</strong></a></p><br>
							<font color="white" size="5px">&nbsp&nbsp&nbsp&nbsp&nbsp&#9675&nbsp&nbsp&nbsp&#9675&nbsp&nbsp&nbsp&#9675&nbsp&nbsp&nbsp&#9673</font>
						</div>
					</div>
				<div>
					<p><br></p>
					&nbsp<img src="ho.png" width="330px" height="255px">
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>