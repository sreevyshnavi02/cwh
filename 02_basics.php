<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics  of php</title>
    <style>
        *{
            padding: 0;
            margin:0;
        }
        .box{
            background-color: pink;
            display: grid;
            padding: 20px 20px;
        }
    </style>
</head>
<body>
    <div class="box">

        <?php
        echo "Lorem ipsum dolor sit amet.";
        
        
        echo "for loop";

        for($a = 5; $a < 1; $a++)
        {
                echo "<br>The value of a is ";
                echo $a;
        }

        $arr = array(12, 45, 56, 67,67,56,45,3434,324,3222,23);
        $a =  0;
        while($a  < count($arr))
        {
                echo "<br>";
                echo $arr[$a];
                $a++;
        }

        echo "<br> for each loop<br>";

        foreach($arr as $a)
        {
            echo "<br>";
            echo ++$a;
        }


        $str = "Oiii";
        echo "<br>".$str."<br>";
        echo var_dump($str)."<br>";
        echo var_dump(strpos($str, "i"))."<br>";
        echo strpos($str, "i")."<br>";


        ?>
    </div>
</body>
</html>