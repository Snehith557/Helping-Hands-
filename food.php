
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Food Form</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	<style>
	
        body {
 background-image: url("https://miro.medium.com/max/1200/1*4XRAX4obUOvMVqWibVCneQ.jpeg");
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
	</style>
    </head>
    <body>
	<h1 class="formdesign">Food Form</h1>
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <form name="myForm" action="food_db.php"  method="POST" class="form-horizontal" role="form" >
                <div class="form-group">
                   <?php 
                   if(isset($_GET['msg']))
                    {
                        echo $_GET['msg'];
                    }

                   ?>
                </div>
                    <div class="formdesign input" >
           * Name: <input type="text" name="fname" id="name" onchange="validateName()" required><b><p style="color:red;"id="name_err"></p></b>
            
        </div>

        <div class="formdesign input" >
           * Email: <input type="email" name="femail"  id = "email"onchange="validateEmail()" required><b><p style="color:red "id="email_err"> </p></b>
        </div>

       <div class="formdesign input" >
           * Phone: <input type="text" name="f1"  id="phone" onchange="validatePhone()" required><b><p style="color:red;"id="phone_err"></p></b>
        </div>
		
		
		<div class="formdesign input" id="address">
          * Address: <input type="text"  name="faddress"   required><b><span class="formerror"></span></b>
        </div>

        <div class='formdesign1' id="req1">
            <br>
            <b>How many packets of food:
			
			<input type="text" name="req" id="food">
			<br><br>
            <label id = "checkBoxes" style="color:red;"></label>
            
        </b>

		</div>
			

                <input class="submitbtn" type="submit" onclick = "checkBoxes()" value="Submit"></p>
        </form>
        

        <div class="col-md-2"></div>
            <div class="col-md-8">
            <h1>Temporary Database</h1>
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
                                <td><img src='<?php echo $row->qrImage; ?>' width="50px" height="50px"</td>
                               
                        

                 <?php         
                            }
                       } 
                    }     
                  ?>
                </tbody>
            </table>
            
    </div>          
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
<script src="formvalidate1.js"></script>
</html>
