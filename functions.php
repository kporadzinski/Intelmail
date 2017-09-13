<?php

// establish connection with database

function french_connection() {

$conn = new mysqli('localhost','root','','purgatory') ;
if ($conn->connect_error) {
  echo 'hej';
  return(false);
} else {return $conn;}


}


// sends text and email to database while waiting for confirm via email

function purgatory(){

   $mail = $_POST['email'];
   $message = $_POST['message'];


   $query = 'INSERT INTO dante VALUES ("", "'.$mail.'", "'.$message.'","7","'.time().'")' ;
   $kon = french_connection();
   $result = $kon->query($query);


};


//
// // sends email to final destination after succesfull confirming
//
// function sendEmail(){
//
//
// };



?>
