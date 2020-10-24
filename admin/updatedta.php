<?php
    include('../dbcon.php');
    $name = $_POST['name'];
    $issue = $_POST['issue'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $conno = $_POST['conno'];
    $status = $_POST['status'];
    $amount = $_POST['amount'];
    $id = $_POST['sid'];
    //$imagename = $_FILES['simg']['name'];
    //$tempname = $_FILES['simg']['tmp_name'];
    //move_uploaded_file($tempname,"../dataimg/$imagename")


    if($status == 'clear'){
        session_start();
        $id0 = $_SESSION['uid'];

        $qry0 = "SELECT * FROM `admin` WHERE `id` = '$id0'";
        $run0 = mysqli_query($con, $qry0);
        $row0 = mysqli_num_rows($run0);

        $data0 = mysqli_fetch_assoc($run0);
        $bal = $data0['balance'];

        $bal = $bal + $amount;

        $qry2 = "UPDATE `admin` SET `balance`= '$bal' WHERE `id` = '$id0'";
        $run2 = mysqli_query($con, $qry2);
    }

    $qry = "UPDATE `people` SET `name` = '$name', `issue` = '$issue', `city` = '$city', `date` = '$date', `conno` = '$conno', `status` = '$status', `amount` = '$amount' WHERE `id` = $id;";

    $run = mysqli_query($con, $qry);
    if($run == true){
        ?>
            <script>
                alert('data updated successfully');
                //alert('<?php echo $status; ?>');
                <?php //header('location: updateform.php?$sid=$id') ?>
                window.open('updatefrm.php?sid=<?php echo $id; ?>','_self');
            </script>
        <?php
    }
?>