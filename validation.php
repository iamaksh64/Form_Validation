<?php  
$nameErr = $emailErr = $ageErr = $genderErr = $websiteErr = $commentErr = "";  
$name = $email = $age = $gender = $website = $comment = "";  
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = user_input($_POST["name"]);   
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            } 
            if(strlen($name)<6){
              $nameErr = "Name must be at least 6 characters long.";
            } 
            if(strlen($name)>15){
             $nameErr = "Name cannot be greater than 15 characters long.";
            }
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = user_input($_POST["email"]);  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
    
    //Age Validation  
    if (empty($_POST["age"])) {  
            $ageErr = "Age is required";  
    } else {  
            $age = user_input($_POST["age"]);  
            if (!preg_match ("/^[0-9]*$/", $age) ) {  
            $ageErr = "Only numeric value is allowed.";  
            }  
        if (strlen ($age) != 2) {  
            $ageErr = "Age must contain 2 digits.";  
            }  
    }  
      
    //Website Validation      
    if (empty($_POST["website"])) {  
        $website = "";  
    } else {  
            $website = user_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
                $websiteErr = "Invalid URL";  
            }      
    }  

    if(empty($_POST["comment"])){
        $comment="";
    }else{
            $comment = user_input($_POST["comment"]);
            if(strlen($comment)<10){
             $commentErr = "Comment must be at least 10 characters long.";
            }
            if(strlen($comment)>140){
             $commentErr = "Comment cannot be greater than 140 characters long.";
            }

    }
      
    //Gender Validation  
    if (empty($_POST["gender"])) {  
            $genderErr = "Gender is required";  
    } else {  
            $gender = user_input($_POST["gender"]);  
    }  
  
}  
function user_input($info) {  
  $info = trim($info);  
  $info = stripslashes($info);  
  $info = htmlspecialchars($info);  
  return $info;  
}  
?>  