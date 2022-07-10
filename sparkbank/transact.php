<?php
include 'dbconnect.php';

if(isset($_POST['submit']))
{
    $from = $_GET['ID'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from accounts where ID=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from accounts where ID=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE accounts set Balance=$newbalance where ID=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE accounts set Balance=$newbalance where ID=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO history(`Sender`, `Receiver`, `Balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);
                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <style type="text/css">
    	
		button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}

    </style>
</head>

<body>
	<div class="container">
        <h2 class="text-center pt-4">Transaction</h2>
            <?php
                include 'dbconnect.php';
                $sid=$_GET['ID'];
                $sql = "SELECT * FROM  accounts where ID=$sid";
                $result = mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext"><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['ID'] ?></td>
                    <td class="py-2"><?php echo $rows['Name'] ?></td>
                    <td class="py-2"><?php echo $rows['E-mail'] ?></td>
                    <td class="py-2"><?php echo $rows['Balance'] ?></td>
                </tr>
            </table>
        </div>
        <br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
        include "dbconnect.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT * FROM accounts");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['Name'] ."'>" .$data['Name'] ."</option>";  // displaying data in option menu
        }    
?>
               
                </option>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center">
            <button class="btn mt-3" name="submit" type="submit" ID="myBtn">Transfer</button>
            </div>
        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>