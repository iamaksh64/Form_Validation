<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Validation</title>
</head>
<body>
    <?php
        $name = $age = $email = $website = $comment = $gender = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = user_input($_POST['name']);
            $age = user_input($_POST['age']);
            $email = user_input($_POST['email']);
            $website = user_input($_POST['website']);
            $comment = user_input($_POST['comment']);
            $gender = user_input($_POST['gender']);
        }

        function user_input($info){
            $info = trim($info);
            $info = stripslashes($info);
            $info = htmlspecialchars($info);
            return $info;
        }
    ?>
    <div class="container mt-3">
    <h2>Form Validation</h2><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        Name: <input type="text" name="name" class="form-control col-xs-2 w-25" placeholder="Enter your name"><br>
        Age: <input type="text" name="age" class="form-control col-xs-2 w-25" placeholder="Enter your age"><br>
        Email: <input type="text" name="email" class="form-control col-xs-2 w-25" placeholder="Enter your email"><br>
        Website: <input type="text" name="website" class="form-control col-xs-2 w-25" placeholder="Enter your website"><br>
        Comment: <textarea name="comment" cols="30" rows="5" class="form-control col-xs-2 w-25" placeholder="Type your comment"></textarea><br>
        Gender:
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other
        <br><br>
        <input type="submit" value="Submit" name="submit" class="btn btn-primary"class="col-xs-2">
        <br><br>

        <h2>Your Input: </h2>
        <br>
        <small>Name: </small><h5 style="display:inline-block"><?php echo $name; ?></h5><br>
        <small>Age: </small><h5 style="display:inline-block"><?php echo $age; ?></h5><br>
        <small>Email: </small><h5 style="display:inline-block"><?php echo $email; ?></h5><br>
        <small>Website: </small><h5 style="display:inline-block"><?php echo $website; ?></h5><br>
        <small>Comment: </small><h5 style="display:inline-block"><?php echo $comment; ?></h5><br>
        <small>Gender: </small><h5 style="display:inline-block"><?php echo $gender; ?></h5>
        
<!--             
        //     echo $name."<br>";
        //     echo $age."<br>";
        //     echo $email."<br>";
        //     echo $website."<br>";
        //     echo $comment."<br>";
        //     echo $gender."<br>";
         -->
        <br>
    </form>
    </div>
</body>
</html>