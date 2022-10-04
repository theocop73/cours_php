<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["lastname"]);
  $firstname = test_input($_POST["firstname"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["number"]);
  $reason = test_input($_POST["MyRadio"]);
  $message = test_input($_POST["message"]);
  $civility = test_input($_POST["civility"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastname"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["lastname"]);
    }
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    }
    elseif(!preg_match($pattern, $_POST["email"])){
        $emailErr = "EMAIL NOT VALID";
    }
    else {
      $email = test_input($_POST["email"]);
    }
    
    if (empty($_POST["firstname"])) {
      $firstnameErr = "firstname required";
    } else {
      $firstname = test_input($_POST["firstname"]);
    }
  
    if (empty($_POST["phone"])) {
      $numberErr = "";
    } else {
      $number = test_input($_POST["phone"]);
    }

    if (empty($_POST["message"])) {
        $messErr = "message is required";
      } 
      elseif(strlen($_POST["message"]) < 5){
        $messErr = "message has to be at least 5 characters long";
      }
      else {
        $mess = test_input($_POST["message"]);
      }

      if (empty($_POST["MyRadio"])) {
        $reasonErr = "Reason required";
      } else {
        $reason = test_input($_POST["MyRadio"]);
      }
  
    if ($_POST["civility"] == "Civilité") {
      $genderErr = "your civility can't be Civilité IDIOT";
    } else {
      $gender = test_input($_POST["civility"]);

    }
  }
?>
