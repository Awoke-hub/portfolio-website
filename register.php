<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        userName: <input type="text" name="username"> <br>
       password: <input type="number" name="password"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="login";
    $conn=new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error){
        die("connection failed ");
    }
    if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $stmt=$conn->prepare("INSERT INTO aw(username,password)VALUES(?,?)");
    $stmt->bind_param("si",$username,$password);
    if($stmt->execute()){
        echo"data inserted succefully";
    }
    else{
        echo"failed to insert data";
    }
}
    ?>
</body>
</html>