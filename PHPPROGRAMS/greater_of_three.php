<html>
<head>
    <title>Greater of three number</title>
</head>
<body>
    <form method="POST">
        Enter First Number  <br><input type="number" name="a" placeholder="Enter Number" ><br><br>
        Enter Second Number  <br><input type="number" name="b" placeholder="Enter Number" ><br><br>
        Enter Third Number  <br><input type="number" name="c" placeholder="Enter Number" ><br><br>
        <input type="submit" value="click">
<?php
if($_POST){
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];

    if( !is_numeric($a) && !is_numeric($b) && !is_numeric($c)){
        echo "Wrong input";
    }
    else{
     if($a>$b){
        if($a>$c)
        echo "$a is greatest";
        else
        echo "$c is greatest";
     }
     else{
        if($b>$c)
        echo "$b is greatest";
        else
        echo "$c is greatest";
     }
    }
}
?>
</form>
</body>