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
  <link rel="stylesheet" href="css/don_form.css">
</head>

<body>
  <div class="container">
    <div class="row register">
      <h1> Donate Book here....</h1>
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
              <input name="EMail" type="email" class="form-control " id="uname" placeholder="Enter Your Email Id">
            </div>
          </div>

          <div class="form-group">
            <label for="mnum" class="control-label col-sm-4"> Mobile Number</label>
            <div class="col-sm-8">
              <input name="mobno" type="number" class="form-control " name="mobno" id="uname" placeholder="Enter Your  MobileNumber">
            </div>
          </div>

          <div class="form-group">
            <label for="address" class="control-label col-sm-4"> Address</label>
            <div class="col-sm-8">
              <input name="add" type="text" class="form-control " id="uname" placeholder="Enter Your address">
            </div>
          </div>

          <div class="form-group">
            <label for="Cat-book" class="control-label col-sm-4"> Category Of Book</label>
            <div class="col-sm-8">
              <input name ="catbook"type="text" class="form-control " id="uname" placeholder="Enter the Category oF Book. e.g.Educational,non-edu,...">
            </div>
          </div>

          <div class="form-group">
            <label for="ifsc" class="control-label col-sm-4"> ISBN Code</label>
            <div class="col-sm-8">
              <input name="ISBN" type="text" class="form-control " id="uname" placeholder="Enter IFSC code of Book">
            </div>
          </div>

          <!-- <div class="form-group">
            <label for="Date" class="control-label col-sm-4"> Date Of Donation</label>
            <div class="col-sm-8">
              <input type="date" class="form-control " id="uname" placeholder="">
            </div>
          </div> -->

          <!-- <div class="form-group">
            <label for="gen" class="control-label col-sm-4"> Gender</label>
            <div class="col-sm-2">
              Male:<input name="Male" type="radio"  id=" mal">
            </div>
            <div class="col-sm-3">
              Female:<input name="Fenale" type="radio" id=" mal">
            </div>
            <div class="col-sm-2">
              Other:<input name="Other" type="radio"  id=" mal">
            </div>
          </div> -->

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
$conn=mysqli_connect("localhost","root","","don_db");
if(isset($_POST["sub-btn-1"])){
  if(isset($_SESSION["login-user"])){

    $fname=$_POST["FName"];
    $lname=$_POST["LName"];
    $email=$_POST["EMail"];
    $mobno=$_POST["mobno"];
    $add=$_POST["add"];
    $catbook=$_POST["catbook"];
    $isbn=$_POST["ISBN"];
    $cp1 = "INSERT INTO `book_don`(`FName`, `LName`, `Email`, `Mob.No.`, `Address`, `Cat-Book`, `ISBN`) VALUES ('$fname','$lname','$email','$mobno','$add','$catbook','$isbn')";
            $cp2 = mysqli_query($conn,$cp1);
            if($cp2){
                echo '<script type="text/javascript">';
                echo ' alert(" You have Successfully Submitted Book donation form.You can Submit your books at tha location--Plot No. 46, near MSEB Sub Station, Sector-5, Kharghar, Navi Mumbai, Maharashtra 410210 within next 2-3 Working Days ")';  //data added..
                echo '</script>';
                
            }
            else{
                echo '<script type="text/javascript">';
                echo ' alert(" Error! Try Again")';  //Error!!..
                echo '</script>';
                
  // echo 'User is loged in';
  }}
  else{ 
    echo "<script>window.location='../Login.php'</script>";
    
  }
}


?>