<?php
    function showdetails($name, $city){
        include('dbcon.php');

        $sql = "SELECT * FROM `people` WHERE `name` LIKE '%$name%' AND `city` LIKE '%$city%'";
        $run = mysqli_query($con, $sql);

        ?>
        <!--    <table align="center" width="59%" border="1" style="margin-top: 20px;">
                <tr>
                    <td>Name</td>    
                    <td>Issue</td>    
                    <td>City</td>    
                    <td>Date</td>    
                    <td>Contact No</td>    
                    <td>Status</td>    
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
                                <th>Status</th>    
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>

        <?php

        if(mysqli_num_rows($run)>0){
            while($data = mysqli_fetch_assoc($run)){
            ?>   
                <tr>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['issue']; ?></td>
                    <td><?php echo $data['city']; ?></td>
                    <td><?php echo $data['date']; ?></td>
                    <td><?php echo $data['conno']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['amount']; ?></td>
                </tr>
            <?php
            }
        }else{
            echo "<script>alert('no record found');</script>";
        }
    }
?>
</table>