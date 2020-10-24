<?php
    session_start();

    if(isset($_SESSION['uid'])){
        //echo $_SESSION['uid'];
    }else{
        //echo "error";
        header('location: ../index.php');
    }
?>

<?php
    include('header.php');
    include('titlehead.php');
?>

<header class="jumbotron my-" style="background: rgb(86, 89, 92);">
        <div class="container my-0">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1 style="color: white;">Admin Dashboard</h1>
                    <h2>Balance</h2>
                </div>
                <div class="col-12 col-sm align-self-center">
        <!--            <table class="table table-hover">
                        <tbody class="row justify-content-md-center">
                            <tr class="col-sm-7" align="center">
                                <th scope="row">1</th>
                                <td><a href="outgo.php">Outgo</a></td>
                            </tr>
                            <tr class="col-sm-7" align="center">
                                <th scope="row">2</th>
                                <td><a href="update.php">Update</a></td>
                            </tr>
                            <tr class="col-sm-7" align="center">
                                <th scope="row">3</th>
                                <td><a href="balance.php">Check Balance</a></td>
                            </tr>
                            <tr class="col-sm-7" align="center">
                                <th scope="row">4</th>
                                <td><a href="viewdetails.php">View Details</a></td>
                            </tr>
                        </tbody>
                    </table> -->
                    <ul class="list-group list-group-flush" style="background: rgb(86, 89, 92);">
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>1.&nbsp; &nbsp;</span><a href="income.php">Income</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>2.&nbsp; &nbsp;</span><a href="outgo.php">Outgo</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>3.&nbsp; &nbsp;</span><a href="update.php">Update</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>4.&nbsp; &nbsp;</span><a href="viewdetails.php">View Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
</header>

<?php
    include('../dbcon.php');

    $id = $_SESSION['uid'];

    $qry = "SELECT * FROM `admin` WHERE `id` = '$id'";
    $run = mysqli_query($con, $qry);
    $row = mysqli_num_rows($run);

    $data = mysqli_fetch_assoc($run);
    $bal = $data['balance'];

    ?>
    <div class="container">
        <h2 align="center">Your balance is <?php echo $bal; ?></h2>
    </div>
    <?php

    $qry1 = "SELECT * FROM `people` WHERE `status` = 'remaining'";
    $run1 = mysqli_query($con, $qry1);
    $row1 = mysqli_num_rows($run1);
    ?>
    <div class="container">
        <h2 align="center">Here is the remainig</h2>
    </div>
<!--
    <table border="1" width="70%" align="center">
            <tr>
                <td>Name</td>
                <td>Issue</td>
                <td>City</td>
                <td>Date</td>
                <td>Contact No</td>
                <td>Amount</td>
            </tr>
    -->         
<div class="container">
    <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Issue</th>
                    <th>City</th>
                    <th>Date</th>
                    <th>Contact No</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
    <?php
    while($data = mysqli_fetch_assoc($run1)){
        ?>
        <tr>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['issue']; ?></td>
            <td><?php echo $data['city']; ?></td>
            <td><?php echo $data['date']; ?></td>
            <td><?php echo $data['conno']; ?></td>
            <td><?php echo $data['amount']; ?></td>
        </tr>
        <?php
    }

    //$bal = $bal + $amount;

    //$qry2 = "UPDATE `admin` SET `balance`= '$bal' WHERE `id` = '$id'";
    //$run2 = mysqli_query($con, $qry2);


?>
</tbody>
</table>
</div>
