<?php
  $email = $_POST['email'];

  if(!empty($email)) {
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "late_registration";

      //create connection
      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

      if(mysqli_connect_error()) {
        die('Connection Error('.mysqli_connect_errno().')'. mysqli_connect_error());
      } else{
        $SELECT = "SELECT email From client Where email = ? Limit 1";
        $INSERT = "INSERT INTO client (email) VALUES(?)";

        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0) {
          $stmt->close();

          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("s",$email);
          $stmt->execute();
          include ("registration-complete.html");
        } else {
          echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();
      }
  } else{
    echo "All field are required";
    die();
;  }
?>