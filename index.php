<?php
    $inserted = false;
    if(isset($_POST['name'])){

        $server = "localhost"; 
        $username = "root"; 
        $password = ""; 
        
        $conn = mysqli_connect($server, $username, $password);
        
        if(!$conn){
            die("Connection to this database failed due to".mysqli_connect_error());
        }
        
        // echo "Succesfully connected to the db";
        
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
        $sql = "INSERT INTO `form_01`.`formdata`(`Name`, `Age`, `Gender`, `Email`, `Phone`,`Address`, 
        `Time`) VALUES ('$name','$age','$gender','$email','$phone','$address',current_timestamp())";

        // echo "$sql";

        if($conn -> query($sql) == true)
        {
            // echo "Succesfully inserted";
            $inserted = true;
        }
        else
        {
            echo "ERROR: $sql <br> $conn->error";
        }

        $conn -> close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vysh Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "box">
    </div>

        <!-- <img class = "bg" src="formbg.jfif" alt="bg"> -->
        <div class = "form" id = "top">
            <h1>Student Details Form</h1>
            <p>Fill in the following form</p>
        </div>

        <?php
            if($inserted == true)
            {
                echo "<p class = 'submitMsg'> Thank you for submitting the form! Your entry has been recorded.<p>";
            }
        ?>
        
        <div class="form">
            <form action="index.php" method="post">
                <input type="text" name = "name" id = "name" placeholder="Your name">
                <input type="text" name = "age" id = "age" placeholder="Your age">
                <input type="text" name = "gender" id = "gender" placeholder="Your gender">
                <input type="email" name = "email" id = "email" placeholder="Your email id">
                <input type="phone" name = "phone" id = "phone" placeholder="Your phone number">
                <textarea name="address" id="address" cols="30" rows="5" placeholder="Your Address"></textarea>
                <button class="btn">SUBMIT</button>
            </form>
        </div>
        <script src = "index.js"></script>
    </body>
    </html>