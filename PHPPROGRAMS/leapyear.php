<html>
<head>
    <title>Leap Year</title>
</head>
<body>
    <form method="POST">
        Year <br><input type="number" name="year" placeholder="Enter year" ><br><br>
        <input type="submit" value="click">
<?php
if($_POST){
    $num=$_POST["year"];
    if(!is_numeric($num)){
        echo "Wrong input";
    }
    else{
     if($num%4==0 || $num%400==0 && $num%100!=0)
     echo "$num is leap year";
     else
     echo "$num is not a leap year";
    }
}
?>
</form>
</body>