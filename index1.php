<?php
$insert = false;
error_reporting(0);
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    
    $name = $_POST['name'];
    $age = $_POST["age"];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    

    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sriracha&display=swap"
      rel="stylesheet"
    />
    <!----------------------- Link Css file in Html file -------------------->

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img class="bg" src="bg.jpg" alt="COLLEGE" />
    <div class="container">
      <h1>Welcome to COOCHBEHAR GOVERNMENT ENGINEERING COLLEGE US trip form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
      <p class="submitMsg">
        Thanks for submitting form we are happy to see you in this trip
      </p>

      <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
        />
        <input type="text" name="agee" id="agee" placeholder="Enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter your gender"
        />
        <input
          type="text"
          name="email"
          id="email"
          placeholder="Enter your email"
        />
        <input
          type="text"
          name="phone"
          id="phone"
          placeholder="Enter your phone number"
        />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Enter any other information"
        ></textarea>
        <button class="btn">Submit</button>
      </form>
    </div>
    <!------------------------ link javascript in html file ----------->
    <script src="index.js"></script>
  </body>
</html>
