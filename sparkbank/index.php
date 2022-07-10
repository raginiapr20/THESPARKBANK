<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BANKINGSYSTEM.com</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<style>
	body
	{
		box-sizing: border-box;
		background-color: green;
		color: black;
		font-family: 'Source Sans Pro', sans-serif;
	}
	.fitem
	{	
		background-color: #39a1ff;
		background: url(design-867f742a-21f8-4a03-8996-062b7a8fc3f6.png);
		background-size: 600px 500px;
		background-attachment:fixed;
		background-repeat:no-repeat;
		background-position: 80% 65%;
		box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
		width: 1430px;
		height: 580px;
		overflow: hidden;
		border-top: 1px solid rgba(255, 255, 255, 0.5);
		border-left: 1px solid rgba(255, 255, 255, 0.5);
		border-radius:30px;
		backdrop-filter:blur(50px);
		padding-top: 20px;
		padding-left: 2px;
	}
	.frowcontainer
	{
		width:auto;
		height:100%;
		display:flex;
		flex-direction:row;
		justify-content:space-around;
		padding: 10px;
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
		padding-left: 900px;
		font-size: 25px;
		text-decoration: none;
	}
	@import url(https://fonts.googleapis.com/css?family=PT+Mono);

h1 {
    font-size: 60px;
    padding-left: 30px;
}

@media (max-width:768px) {
    h1 {
        font-size: 5rem;
    }
}

.text-typing, .text-nowrap {
    white-space:nowrap;
    display: block;
}

a {
    color: white;
    -webkit-transition: all .35s;
    -moz-transition: all .35s;
    transition: all .35s;
    background-image: linear-gradient(,transparent 35%,#39a1ff 0);
    background-size: 0 100%;
    background-repeat: no-repeat;
    -webkit-transition: background-size .4s ease;
    transition: background-size .4s ease;
}

a:hover,
a:focus {
    color: white;
    outline: 0 !important;
    background-size: 100% 100%;
    }

.typing-words span {
    text-indent: 60px;
    position: absolute;
	overflow: hidden;
	font-size:50px;
	white-space: nowrap;
	color: white;
    visibility: hidden;
    border-right: 3px solid transparent;
    max-width: 338px; /* width of widest string */
}
/* steps is number of chars-1 */
.typing-words span:nth-child(1) {
	animation: typing 0.7s steps(5), typingReverse 0.7s steps(3) 0.7s, blink-wait 1s step-end 1 1.4s, blink-caret 0.6s step-end infinite;
}
.typing-words span:nth-child(2) { 
	animation: typing 0.7s steps(5) 2.4s, typingReverse 0.7s steps(3) 3.1s, blink-wait 1s step-end 1 3.8s, blink-caret 0.6s step-end infinite;
}
.typing-words span:nth-child(3) { 
	animation: typing 0.7s steps(5) 4.8s, typingReverse 0.7s steps(3) 5.5s, blink-wait 1s step-end 1 6.2s, blink-caret 0.6s step-end infinite;
}
.typing-words span:nth-child(4) { 
	animation: typing 0.7s steps(5) 7.2s, typingReverse 0.7s steps(3) 7.9s, blink-wait 1s step-end 1 8.5s, blink-caret 0.6s step-end infinite;
}
/* pause on last word, end cursor blink */
.typing-words span:nth-child(5) {  
	animation: blink-caret 0.6s step-end 7 9.5s, typing 1s steps(3) 9.5s forwards;
}

@keyframes typing {
    from { width: 0; visibility: hidden; }
    to { width: 100%; visibility: visible; color: white; }
}

@keyframes typingReverse {
    from { width: 100%; visibility: visible; color: white; }
    to { width: 0; }
}

@keyframes blink-wait {
    from, to { width: 0; visibility: hidden; }
    0%, 30% { width: 40px; visibility: visible; }
}

@keyframes blink-caret {
    from, to { border-color: transparent; }
    50% { border-color: white; }
}

	.button
	{
  		background-color: #140035; 
  		padding: 12px 12px;
  		text-align: center;
  		display: inline-block;
  		font-size: 22px;
  		font-family: 'Source Sans Pro', sans-serif;
  		transform:scale(1);
  		transition:1s;
	}
	.button:hover
	{
		transform:scale(1.15);
		transition:1s;
	}
	/*.header-area h2
	{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 100%;
		text-align:center;
		color: white;
		font-size: 4.5rem;
		text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
	}
	.header-area h2 space-around{
		color: chartreuse;
	}
	body{
background-image: url(https://i.postimg.cc/9FmspFn3/1.jpg);
-webkit-background-size:cover;
background-size:cover;
background-position: center center;
background-repeat:no-repeat;
}
.box {
width: 700px;
margin: 240px auto;
font-size: 30px;
font-weight: bold;
font-family: lato;
text-align: center;
}
.typed {
color: black;
}
.box h2 {
font-size: 80px;
color: #fff;
margin: 0;
font-family: lato;
font-weight: 900;
text-transform: uppercase;
-webkit-text-stroke: 1px black;
}
#example {
margin: 0;
}
*/

	</style>
</head>
<body>
	<div class="fheadleft">
		<font size="20px"><strong>Banking</strong></font><font size="20px"> System</font>
		<span class="fheadright"><a href="spark2.php" style="text-decoration: none; color:white">Explore</a></span>
	</div>
	<div class="frowcontainer">
		<div class="fitem">
			<div id="top">
    <div class="header-content container p-b-2">
        <div class="row bg-white">
            <div class="col-md-10 p-t-2 p-b-2">
                <h1 class="p-t-2 m-b-3">
                        &nbsp&nbsp&nbsp&nbsp&nbspONLINE BANKING <br>&nbsp&nbsp&nbsp&nbsp&nbspSYSTEM<br><br>
                        <span class="typing-words">
                			<span>Secure</span>
                			<span>Quick</span>
                			<span>Transactions.</span>
                		</span>
                    </a>
                </h1>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div class="button">
			<a href="spark2.php" style="text-decoration: none; color:#39a1ff"><font size="5px">EXPLORE</font>
	</div>

		</div>

	</div>
</body>
</html>