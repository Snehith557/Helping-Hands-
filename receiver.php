
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fund Form</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	<style>
	
        body {
 background-image: url("bckimg2.jpg");
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
    <style>
        .formdesign2 {
            width:100%;
            height: 45px;
            /* border:2px solid #aaa; */
            border-radius:8px;
            margin:15px 0;
              position: relative;
			  /* left: 50%; */
            outline:none;
            padding:8px;
            box-sizing:border-box;
            text-align: center;
        }
    </style>


    </head>
    <body>
	<h1 class="formdesign">REQUEST FORM</h1>
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <form name="myForm" action="money_db.php"  method="POST" class="form-horizontal" role="form" >
                <div class="form-group">
                   <?php 
                   if(isset($_GET['msg']))
                    {
                        echo $_GET['msg'];
                    }

                   ?>
                </div>

                <div class='formdesign1' id="req1">
            <br>
            <b>Request: 
			
			<input type="radio" name="req"  id="money" value="money" onclick="toggleVisibility('imgemploymentselected');" >
			<label for="req1">Money</label>
			<input type="radio" name="req" value="clothes" id="Clothes" >
			<label for="req2">Clothes</label>
			<input type="radio" name="req" id="food" value="Food">
			<label for="req1">Food</label>
			<input type="radio" name="req" id="medicine" value="Clothes">       
			<label for="req1"> Medicine</label>
            <br><br>
            <label id = "checkBoxes" style="color:red;"></label>
            
        </b>

		</div>

                    <div class="formdesign input" >
           * Name: <input type="text" placeholder="Name" name="fname" id="name" onchange="validateName()" required><b><p style="color:red;"id="name_err"></p></b>
            
        </div>

        <div class="formdesign input" >
           * Email: <input type="email" placeholder="email" name="femail"  id = "email"onchange="validateEmail()" required><b><p style="color:red "id="email_err"> </p></b>
        </div>

        <div class="formdesign input" id="address">
            Address: <input type="text" placeholder="Location" name="faddress"   required><b><span class="formerror"></span></b>
        </div>

       <div class="formdesign input" >
           * Phone: <input type="text" placeholder="Contact Number" name="f1"  id="phone" onchange="validatePhone()" required><b><p style="color:red;"id="phone_err"></p></b>
        </div>
		
		

        <div class="formdesign input" id="Description">
            *Description: <input type="text"  placeholder="Your requirements" name="description"   required><b><span class="formerror"></span></b>
        </div>

        <div class='formdesign1' id="req1">
            <!-- <br>
            <b>Donate: 
			
			<input type="radio" name="req"  id="money" value="money" onclick="toggleVisibility('imgemployment');" >
			<label for="req1">Money</label>
			<br>
            <label id = "checkBoxes" style="color:red;"></label>
            
        </b> -->

		</div>
				<img class="submitbtn" id="imgemployment" src="https://www.hellotech.com/guide/wp-content/uploads/2020/05/HelloTech-qr-code-1024x1024.jpg"  style="visibility:hidden"/>
		<p>

                <a href="https://paytm.com/"><input class="submitbtn" type="submit"  value="Submit"><p></p></a>
        </form>
        
       
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
<script src="formvalidate1.js"></script>
</html>
