
<!--external css-->
<link rel="stylesheet" href="admin_style.css">

<video class="video_css" width="800" height="500" autoplay muted>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
<div class="col-md-2"></div>
            <div class="col-md-8">
            <h1 class="admin_page">SUNSHINE AND SMILES :)  ADMIN PAGE</h1>
            <p class="p_tag">We love to help you!!!</p>
            <br>   
           
            <br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Item_Name</th>
                        <th>Item_quantity</th>
                        <th>No_of_requests</th>
                        
                      
                    </tr>
                </thead>
                <tbody>
                  <?php
                    require_once('user_db_conn.php');
                   
                   $query="Select * from items,requests where item_name=request_item";
                    
                    if($result = mysqli_query($conn, $query)){
                        if($result->num_rows > 0){
                            while($row = $result->fetch_object()){
                                
                                
                    ?>
                        <tr>
                                <td><?php echo $row->item_name; ?></td>
                                <td><?php echo $row->item_quantity; ?></td>
                                <td><?php echo $row->No_of_requests; ?></td>
                                <!-- <td> <form method="post">
                                        <input type="submit" name="allocate_money"
                                        class="button" value="UPDATE MONEY" />
                            </form>
                                </td> -->
                            
                        

                 <?php 
                            }?>
                            
                            <form method="post">
                            <input type="submit" name="allocate_money"
                            class="button" value="UPDATE MONEY" onclick='allocate_money'/>
                </form>
                    
                    
                            <form method="post">
                            <input type="submit" name="allocate_food"
                            class="button" value="UPDATE FOOD" onclick='allocate_food'/>
                </form>
                    
                    
                            <form method="post">
                            <input type="submit" name="allocate_clothes"
                            class="button" value="UPDATE CLOTHES" onclick='allocate_clothes'/>
                </form>
                    
                           <?php
                        }
                    } 
                  function allocate_money() {
                    
                   // require_once('user_db_conn.php');
                   $sname = "localhost";
$uname = "root";
$password = "";

$db_name = "Donation";

                   $conn = mysqli_connect($sname, $uname, $password, $db_name);
                   $query="Select * from items;";
                    $query2="Update requests,items set No_of_requests=0,item_quantity=item_quantity-No_of_requests   where item_name='money' and request_item='money'";
                    if($result = mysqli_query($conn, $query2)){
                        
            
                                
                    
                }}  
                 if(array_key_exists('allocate_money', $_POST)) {
                    allocate_money();
                }
                function allocate_food() {
                    
                    // require_once('user_db_conn.php');
                    $sname = "localhost";
                    $uname = "root";
                    $password = "";
                    
                    $db_name = "Donation";
 
                    $conn = mysqli_connect($sname, $uname, $password, $db_name);
                    $query="Select * from items;";
                     $query1="Update requests,items set No_of_requests=No_of_requests-1,item_quantity=item_quantity-1 where item_name='food' and request_item='food'";
                     if($result = mysqli_query($conn, $query1)){
                         
             
                                 
                     
                 }}  
                  if(array_key_exists('allocate_food', $_POST)) {
                     allocate_food();
                 }
                 function allocate_clothes() {
                    
                    // require_once('user_db_conn.php');
                    $sname = "localhost";
 $uname = "root";
 $password = "";
 
 $db_name = "Donation";
 
                    $conn = mysqli_connect($sname, $uname, $password, $db_name);
                    $query="Select * from items;";
                     $query3="Update requests,items set No_of_requests=No_of_requests-1,item_quantity=item_quantity-1 where item_name='clothes' and request_item='clothes'";
                     if($result = mysqli_query($conn, $query3)){
                         
             
                                 
                     
                 }}  
                  if(array_key_exists('allocate_clothes', $_POST)) {
                     allocate_clothes();
                  }   
                    
                  ?>
                </tbody>
            </table>
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h1>Temporary Database</h1>
            <br>   
           
            <br>
            <table style="border: 1px solid;
                            border-collapse: collapse" 
                            class="table table-bordered table-hover">
                <thead>
                    <tr style="border: 1px solid">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Donation</th>
                      
                    </tr>
                </thead>
                <tbody>
                  <?php
                    require_once('user_db_conn.php');
                   
                   $query="Select * from donor";
                    
                    if($result = mysqli_query($conn, $query)){
                        if($result->num_rows > 0){
                            while($row = $result->fetch_object()){
                                
                    ?>
                        <tr>
                                <td><?php echo $row->ID; ?></td>
                                <td><?php echo $row->Name; ?></td>
                                <td><?php echo $row->Email; ?></td>
                                <td><?php echo $row->Phone; ?></td>
                                <td><?php echo $row->Address; ?></td>
                                <td><?php echo $row->Donation; ?></td>
                                <!-- <td><img src='<?php echo $row->qrImage; ?>' width="50px" height="50px"</td> -->
                               
                        

                 <?php         
                            }
                       } 
                    }     
                  ?>
                </tbody>
            </table>
            
    </div>
            