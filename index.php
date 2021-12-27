<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  
<?php
 include("validation.php");
?>
  
<h2>Form Validation</h2>  
<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    Name:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>  
    E-mail:   
    <input type="email" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>  
    Age:
    <input type="number" name="age">  
    <span class="error">* <?php echo $ageErr; ?> </span>  
    <br><br>  
    Website:   
    <input type="text" name="website">  
    <span class="error"><?php echo $websiteErr; ?> </span>  
    <br><br>  

    Comments:   
    <textarea name="comment" cols="30" rows="5" placeholder="Enter your comment"></textarea>
    <span class="error"><?php echo $commentErr; ?> </span>  
    <br><br>  
    Gender:  
    <input type="radio" name="gender" value="Male"> Male  
    <input type="radio" name="gender" value="Female"> Female  
    <input type="radio" name="gender" value="Other"> Other  
    <span class="error">* <?php echo $genderErr; ?> </span>  
    <br><br>                       
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form>  
  
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $ageErr == "" && $genderErr == "" && $websiteErr == "" && $commentErr == "") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Name: " .$name;  
        echo "<br>";  
        echo "Email: " .$email;  
        echo "<br>";  
        echo "Age: " .$age;  
        echo "<br>";  
        echo "Website: " .$website;  
        echo "<br>";  
        echo "Comment: " .$comment; 
        echo "<br>";
        echo "Gender: " .$gender;  
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    }  
?>  
  
</body>  
</html>
