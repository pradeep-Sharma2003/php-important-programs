<html>
<head>
    <title>Registration form</title>
</head>
<body>
    <h1><center> Student Registeration Form </center></h1>
    <form method="POST">
    <fieldset>
    <lable>Name :</lable>
    <input type="text" name="name" required placeholder="Enter name">
    <br><br>
    <lable>Email :</lable>
    <input type="email" name="email" required placeholder="Enter Email">
    <br><br>
    <lable>Age :</lable>
    <input type="number" name="age" placeholder="Enter Age">
    <br><br>
    <lable  >Gender :</lable>
    <input type="Radio" name="gender" checked >Male
    <input type="Radio" name="gender">Female
    <input type="Radio" name="gender" >Other
    <br><br>
    <lable >Favourite Sports:</lable>
    <input type="checkbox" name="game" >Cricker
    <input type="checkbox" name="game">Hockey
    <input type="checkbox" name="game" >Football
    <br><br>
    <lable>Password :</lable>
    <input type="password" name="password" placeholder="Enter password">
    <br><br>
    <input type="submit" value="Submit">
</fieldset>
    <?php
     if($_POST){
        $age=$_POST["age"];
        $password=$_POST["password"];
        if($age<18){
        die("Age must be greater than 18");
        }
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 && !$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) >12) {
    die("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character");
}
     }

    ?>
</body>
</html>
