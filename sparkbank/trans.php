
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<style>
    body
    {
        background: url(transs.png);
        background-size: 1000px 700px;
        background-attachment:fixed;
        background-repeat:no-repeat;
        background-position:100% 470%;
        padding-left: 90px;
        color: whitesmoke;
        background-color:#c7b7f8;
    }
    button
    {
        background:#86b378;
        border: none;
        color: whitesmoke;
        text-align: center;
        font-size: 20px; 
        padding: 10px 24px;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        transform:scale(1);
        transition:1s;
        cursor: pointer;
    }
    button:hover
    {
        transform:scale(1.15);
        transition:1s;
    }
    select
    {
        width:235px;
        font-size:20px;
        border: 0;
        border-radius: 10px;
        height: 30px;
        padding-left: 10px;
    }
    .rotateimg180 
    {
        transform: rotate(90deg);
    }
    .fheadleft
    {
        justify-content:space-around;
        font-family: 'Capriola', sans-serif;
        padding-left: 8px;
    }
    .fheadright
    {
        justify-content:space-around;
        font-family: 'Capriola', sans-serif;
        padding-left: 900px;
        font-size: 25px;
        text-decoration: none;
    }
</style>
<body>
    <div class="fheadleft">
        <font size="20px"><strong>Bankers</strong></font><font size="5px">.COM</font>
        <span class="fheadright"><a href="spark2.php" style="text-decoration: none; color:white">Explore</a></span>
    </div>
    <table width="300px" height="300px" cellpadding="0px">
        <tr>
            <form action="insert.php" method="post">
            <td> 
                <label><font color="white" size="20px" style="font-family:'Source Sans Pro', sans-serif;"><strong>Sender</strong></font></label><br>
                <select name="Sender" id="Sender" required><br>
                <option disabled selected></option>
                <?php include "dropdownmenu.php" ?></select>
            </td>
            <td></td>
            <td width="300px" height="300px">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="up-arrow.png"class="rotateimg180" width="100px" height="200px"></img>
            </td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td>
                <label><font color="white" size="20px" style="font-family:'Source Sans Pro', sans-serif;"><strong>Receiver</strong></font></label><br>
                <select name="Receiver" id="Receiver"  required >
                <option disabled selected></option>
                <?php include "dropdownmenu.php" ?></select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="Amount" ><font color="white" size="22px" style="font-family:'Source Sans Pro', sans-serif; padding-left: 20px;"><strong>Amount</strong></font></label><br>
                <input type="integer" id="Balance" name="Balance" required style="border: 0; height: 27px; border-radius: 10px;" size="30px">
                <tr><br><td><br><br><br><br><button type="submit" name="submit" onclick="validate()"><strong>TRANSFER</strong></button><br></td></tr>
            </td>
            <td></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
        </tr>
            </form>
    </table>
     <script>
        function validate(){
            var field1=document.getElementById("Sender").value;
            var field2=document.getElementById("Receiver").value;
            if(field1==field2){
                alert("The sender cannot be the Receiver");
            }
        }
    </script>
</body>
</head>
</html>