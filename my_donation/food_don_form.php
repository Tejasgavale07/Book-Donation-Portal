<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dobation Form</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/food_don_form.css">
</head>

<body>
  <div class="container">
    <div class="row register">
      <h1> Volunteer Details....</h1>
      <!-- <h1> Donate Food here....</h1> -->
      <div class="col-sm-3">
      </div>

      <div class="col-sm-6 reg">
        <form action="" class="form-horizontal hr" method="post">

          <div class="form-group">
            <label for="fname" class="control-label col-sm-4"> First Name</label>
            <div class="col-sm-8">
              <input name="FName" type="text" class="form-control " id="uname" placeholder="Enter Your First name">
            </div>
          </div>

          <div class="form-group">
            <label for="lname" class="control-label col-sm-4"> Last Name</label>
            <div class="col-sm-8">
              <input name=" LName" type="text" class="form-control " id="uname" placeholder="Enter Your Last name">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="control-label col-sm-4"> Email ID</label>
            <div class="col-sm-8">
              <input name="Email" type="email" class="form-control " id="uname" placeholder="Enter Your Email Id">
            </div>
          </div>

          <div class="form-group">
            <label for="mnum" class="control-label col-sm-4"> Mobile Number</label>
            <div class="col-sm-8">
              <input type="number" class="form-control " id="uname" placeholder="Enter Your  MobileNumber">
            </div>
          </div>

          <div class="form-group">
            <label for="address" class="control-label col-sm-4"> Address</label>
            <div class="col-sm-8">
              <input name="Add" type="text" class="form-control " id="uname" placeholder="Enter Your address">
            </div>
          </div>

          <!-- <div class="form-group">
            <label for="Cat-Food" class="control-label col-sm-4"> Category Of Food</label>
            <div class="col-sm-8">
              <input type="text" class="form-control " id="uname" placeholder="Enter the Category oF Food. e.g.Rice,Grains,Snacks,...">
            </div>
          </div>

          <div class="form-group">
            <label for="Qnt.food" class="control-label col-sm-4"> Quantity Of Food</label>
            <div class="col-sm-8">
              <input type="text" class="form-control " id="uname" placeholder="Enter Quantity of Food In Kg">
            </div>
          </div>

          <div class="form-group">
            <label for="Date" class="control-label col-sm-4"> Date Of Donation</label>
            <div class="col-sm-8">
              <input type="date" class="form-control " id="uname" placeholder="">
            </div>
          </div> -->

          <div class="form-group">
            <label for="gen" class="control-label col-sm-4"> Gender</label>
            <div class="col-sm-2">
              Male:<input name="Male" type="radio" " id=" mal">
            </div>
            <div class="col-sm-3">
              Female:<input name="Fenale" type="radio" " id=" mal">
            </div>
            <div class="col-sm-2">
              Other:<input name="Other" type="radio" " id=" mal">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
              <div class="checkbox">
                <label for=""> <input type="checkbox" name="remender">accept all the terms and conditions.</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
              <button name="sub-btn-1" type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>

      </div>
      </form>
    </div>

    <div class="col-sm-3">
    </div>
  </div>
  </div>
</body>

</html>



<?php 
if(isset($_POST["sub-btn-1"])){
  if(isset($_SESSION["login-user"])){
  
  echo '<script type="text/javascript">';
            echo ' alert(" Submited")';  // User Do not exist
            echo '</script>';
  }
  else{ 
    echo "<script>window.location='../Login.php'</script>";
    
  }
}


?>