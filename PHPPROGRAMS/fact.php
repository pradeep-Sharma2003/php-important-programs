<html>
    <head>
        <title>Factorial</title>
</head>
<body>
    <form method="POST">
Enter Number  <br><input type="number" name="num" placeholder="Enter Number" ><br><br>
        <input type="submit" value="click">
</form>
<?php
function fact($n){
    if($n==0 || $n==1)
    return 1;
    else
    return $n*fact($n-1);
}
if($_POST){
$n=$_POST["num"];
if(!is_numeric($n)){
    echo "wrong input";
}
else{
$s=fact($n);
echo "Factorial $n is $s";
}
}
?>
</body>