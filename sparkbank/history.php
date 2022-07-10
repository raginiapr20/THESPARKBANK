<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <style type="text/css">
        body
        {
            background: #66c7e7;
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
        <span class="fheadright"><a href="index.php" style="text-decoration: none; color:black">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="spark2.php" style="text-decoration: none; color:black;">Explore</a></span>
    </div>

	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Sr.no</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'dbconnect.php';

            $sql ="select * from history";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
            <tr>
            <td class="py-2"><?php echo $rows['Sr.no']; ?></td>
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
            <td class="py-2"><?php echo $rows['Balance']; ?> </td>
                            
        <?php
            }

        ?>
        </tbody>
    </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>