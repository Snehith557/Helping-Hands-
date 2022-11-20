<div class="col-md-2"></div>
            <div class="col-md-8">
            <h1>Admin Page</h1>
            <br>   
           
            <br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Item_Name</th>
                        <th>Item_quantity</th>
                        <th>No_of_requests</th>
                        <th>Status</th>
                      
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
                                <td> <form method="post">
                                        <input type="submit" name="button1"
                                        class="button" value="ALLOCATE" />
                            </form>
                                </td>
                            
                        

                 <?php 
                            }
                        }
                    } 
                  function button1() {
                    
                   // require_once('user_db_conn.php');
                   $sname = "localhost";
$uname = "root";
$password = "";

$db_name = "Donation";

                   $conn = mysqli_connect($sname, $uname, $password, $db_name);
                   $query="Select * from items;";
                    $query2="Update requests,items set No_of_requests=No_of_requests-1,item_quantity=item_quantity-1 where item_name=request_item";
                    if($result = mysqli_query($conn, $query2)){
                        
                            $row = $result->fetch_object();
                                echo '<script> alert("Money Allocated") </script>';
                                
                    
                }}  
                 if(array_key_exists('button1', $_POST)) {
                    button1();
                }
               
                   
                    //         }
                    //    } 
                    // }     
                    
                  ?>
                </tbody>
            </table>
            