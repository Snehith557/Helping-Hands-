
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Request data</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	<style>
	
        body {
 background-image: url("img20.jpg");
 background-color: rgb(226, 230, 173);

  /* background-image: url('w3css.gif'); */
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;

}
	body {
            padding: 10 0px 10px;
			text-align: justify;
			overflow: auto;
        }

        .formdesign {
			text-align: center;

        }
        .formdesign1 {
			font-size: large;
			width: 40;
			text-align: justify;
			text-align: center;
           
        }
        .formdesign input {
            width: 40%;
            padding: 5px;
            border: 1px solid blue;
            margin: 10px;
            border-radius: 4px;
            
			/* text-align: justify; */
			font-size: large;
        }

        .formerror {
            color: red;
        }
		.submitbtn {
			border-radius: 9px;
            width: 100px;
            height: 35px;
            font-size: 25px;
            margin: 20px;
			  position: relative;
			  left: 50%;
			  -ms-transform: translate(-50%, -50%);
			  transform: translate(-50%, -50%);
			  }

            tr[data-href]{
                cursor: pointer;
                        
            }

	</style>
    </head>
    <body>
	<h1 class="formdesign">Request Details</h1>
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <form name="myForm" action="req_db.php"  method="POST" class="form-horizontal" role="form" >
                <div class="form-group">
                   <?php 
                   if(isset($_GET['msg']))
                    {
                        echo $_GET['msg'];
                    }

                   ?>
                </div>
                    
            
                <div class="dropdown">
                <button class="drpbutton"><i class="fa fa-globe"></i> Donate:</button>
                <div class="droplist">
                    <a href="money.php"><b><u>Fund__</u></a>
                    <a href="clothes.php"><b><u>Clothes__</u></a> 
                    <!-- <a href="medicine.php"><b><u>Medicines__</u></a> -->
                    <a href="food.php"><b><u>Food</u></a>   

                </div>
                <div class="droplist">
                        
                </div>
                <div class="droplist">
                       
                </div>
                <div class="droplist">
                     
                </div>

            </div>
        </form>
        

        </div>

                <!-- <div class='formdesign1' id="req1">
            <br>
            <b>Request: 
			
			<input type="radio" name="req"  id="money" value="money" onclick="toggleVisibility('imgemployment');" >
			<label for="req1">Money</label>
			<input type="radio" name="req" value="clothes" id="Clothes" onclick="" >
			<label for="req2">Clothes</label>
			<input type="radio" name="req" id="food" value="Food">
			<label for="req1">Food</label>
			<input type="radio" name="req" id="medicine" value="Clothes">       
			<label for="req1"> Medicine</label>
            <br><br>
            <label id = "checkBoxes" style="color:red;"></label>
            
        </b>

		</div> -->


        <div class="col-md-2"></div>
            <div class="col-md-8">
            <!-- <h1>Temporary Database</h1> -->
            <br>   
           
            <br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Requirements</th>
                      
                    </tr>
                </thead>
                <tbody>
                  <?php
                    require_once('rec_db_conn.php');
                   
                   $query="Select * from requestor";
                    
                    if($result = mysqli_query($conn, $query)){
                        if($result->num_rows > 0){
                            while($row = $result->fetch_object()){
                                
                    ?>
                        <tr data-href = "money.php">
                                <td><?php echo $row->ID; ?></td>
                                <td><?php echo $row->Name; ?></td>
                                <td><?php echo $row->Email; ?></td>
                                <td><?php echo $row->Phone; ?></td>
                                <td><?php echo $row->Address; ?></td>
                                <td><?php echo $row->Requirements; ?></td>
                        </tr>       
                               
                        

                 <?php         
                            }
                       } 
                    }     
                  ?>
                </tbody>
            </table>
            <script>

                document.addEventListener("DOMContentLoaded",() =>{
                    const rows = document.querySelectorAll("tr[data-href]");

                    rows.forEach(row => {
                        row.addEventListener("click",() =>{
                            window.location.href = row.dataset.href;
                        });
                    });
                });
        //     $(document).ready(function(){
        //         $(document.body).on("click","tr[data-href]",function(){
        //             window.location.href = this.dataset.href;
        //     });
        // });


    </script>
            
    </div>   
    
    

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
<script src="formvalidate1.js"></script>
</html>
