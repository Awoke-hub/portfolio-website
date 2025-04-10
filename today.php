<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $x=10;
    $y=5;
    $sum=$x+$y;
    echo"the sum of x and y is ".$sum."<br>";
    echo"the quetiont of x and y is ".$x/$y."<br>";
    echo"the product of x and y is ".$y*$x."<br>";
    echo"the difference of x and y is ".$x-$y."<br>";
    function sum($a,$b){
        echo($a+$b);
    }
    sum(20,13);
    if(isset($_POST['submit'])){
        echo $_POST['name'];
        echo $_POST['gender'];
    }
    ?>
     <form method="POST" action="today.php">
        <input type="text" name="name" id=""> <br> <br>
        <input type="radio" name="gender" value="Female">Female <br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="submit" name="submit" value="submit">
     </form>
     <div class="google-log">
     </div>
</body>
</html>