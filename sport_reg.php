
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
  body{  
    font-family: Calibri, Helvetica, sans-serif;  
    background:url('https://thumbs.dreamstime.com/b/sport-equipment-2-22802518.jpg');  
  }  
  .container {  
    padding: 50px;
    background-color: rgb(255 255 255 / 50%);
    width: 33%;
    margin: auto;
    margin-top: 50px;
  }  
    
  input[type=text], input[type=password], textarea {  
    width: 100%;  
    padding: 15px;  
    margin: 5px 0 22px 0;  
    display: inline-block;  
    border: none;  
    background: #f1f1f1;  
  }  
  input[type=text]:focus, input[type=password]:focus {  
    background-color: rgb(248, 226, 185);  
    outline: none;  
  }  
   div {  
              padding: 3px 0;  
           }  
  hr {  
    border: 1px solid #f1f1f1;  
    margin-bottom: 25px;  
  }  
  .registerbtn {  
    background-color: #4CAF50;  
    color: white;  
    padding: 16px 20px;  
    margin: 8px 0;  
    border: none;  
    cursor: pointer;  
    width: 100%;  
    opacity: 0.9;  
  }  
  .registerbtn:hover {  
    opacity: 1;  
  }  
  .form-group{
    cursor: pointer;
  }
  </style>
  <title>Sport reg</title>
</head>

<body>

<?php
// require('login.php');

    require('db.php');
    // include("stunav.html");
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {

        $prn    = stripslashes($_REQUEST['prn']);
        $prn    = mysqli_real_escape_string($con, $prn);
  
  
        $sport = stripslashes($_REQUEST['sport']);
        $sport = mysqli_real_escape_string($con, $sport);
       
        $create_datetime = date("Y-m-d H:i:s");
        
        $query    = "INSERT into `sports` ( prn, sport,create_datetime)
                     VALUES ('$prn','$sport','$create_datetime')";
       
       $result   = (mysqli_query($con, $query));
        if ($result) {
            echo "<script>alert('You have registered successfully');
            window.location.href='userprof.php'; </script>";
        } 
        else {
            echo "<script>alert('Can not proceed<br>Try again later');
            window.location.href='userprof.php';  </script>";
        }
    }
     else {
?>

  <div class="container ">
  <strong><h1 class="m-4 text-decoration-underline">Sports Registration</h1>
  <form class="form" action="" method="post">

      <div class="form-row">
        <div class="form-group ">
          <label>Email</label>
        <input type="text" c lass="form-control" name="prn" placeholder="Enter your PRN Number" required>
        </div>
      </div>

      <div class="form-group">
        <div class="form-check">
    <strong>Select Sport:</strong>
    <br>
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="cricket" required>
   Cricket
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios2" value="Vollyball">
    Vollyball
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios3" value="Badminton" >
    Badminton
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Chess" required>
   Chess
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Football" required>
   Football
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Basketball" required>
   Basketball
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Kabaddi" required>
   Kabaddi
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Table Tennis" required>
   Table Tennis
  </label>
</div>
        <!-- <input type="text" class="login-input" name="sport" placeholder="Enter your sport" required> -->
     </br>
        <!-- <input type="submit" name="submit" value="Register" class="login-button"> -->
      </div>
      <br>
      <button type="submit" name="submit"value="submit" class="btn btn-primary">Register </button>
    </form>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <?php
    }
?>
</body>

</html>