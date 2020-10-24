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

<header class="jumbotron" style="background: rgb(86, 89, 92);">
        <div class="container my-0">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1 style="color: white;">Admin Dashboard</h1>
                    <h2>Update</h2>
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
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>3.&nbsp; &nbsp;</span><a href="balance.php">Check Balance</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>4.&nbsp; &nbsp;</span><a href="viewdetails.php">View Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
</header>
<!--
<div classs="container">
    <table align="center">
        <form method="post" action="update.php">
            <tr>
                <th>Enter Name</th>
                <td><input type="text" name="name" placeholder="enter name" required="required"></td>

                <th>Enter City</th>
                <td><input type="text" name="city" placeholder="enter city" required="required"></td>

                <td colspan="2"><input type="submit" name="submit" value="search"></td>
            </tr>
        </form>
    </table>
</div>
-->
<div class="container">
<form class="form-horizontal" method="post" action="update.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Enter Name:</label>
    <div class="col-sm-7">
      <input type="text" name="name" class="form-control" id="email" placeholder="Enter name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Enter City:</label>
    <div class="col-sm-7">
      <input type="text" name="city" class="form-control" id="pwd" placeholder="Enter city">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="submit" class="btn btn-dark" name="submit" value="search">
    </div>
  </div>
</form>
</div>

<div class="container">
    <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Issue</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
    <?php
        if(isset($_POST['submit'])){
            include('../dbcon.php');

            $name = $_POST['name'];
            $city = $_POST['city'];
            
            // $sql = "SELECT * FROM `people` WHERE `std` = '$standard' AND `name` LIKE '%$name%';";
            $sql = "SELECT * FROM `people` WHERE `name` LIKE '%$name%' AND `city` LIKE '%$city%'";
            $run = mysqli_query($con, $sql);

            if(mysqli_num_rows($run)<1){
                echo "<tr><td colspan='4' align='center'>no records found</td></tr>";
            }else{
                $count = 0;
                while($data = mysqli_fetch_assoc($run)){
                    $count++;
                    ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['city']; ?></td>
                            <td><?php echo $data['issue']; ?></td>
                            <td><?php echo $data['status']; ?></td>
                            <td><a href="updatefrm.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
                        </tr>
                    <?php
                }
            }
        }
    ?>
        </tbody>
    </table>
</div>
</body>
</html>


