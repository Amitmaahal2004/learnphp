<?php
$amit=4+4;
if($amit>10){
echo"Sucess ";
}
else {
    echo"Fail";

}
$one=1;
while ($one < 11){
    echo"$one";
    $one++;

}
echo "<br>";

echo "Hello";
echo "<br>";
echo strlen("hello!");

echo "<br>";

$x="Hello";
$y="World";
$z=$x .$y;;
echo"$z";

echo "<br>";


$x="Hello";
$y="World";
$z=$x . "!" . $y;;
echo"$z";

echo "<br>";

$a="Hello World";
echo substr ($a,-4,4);
echo "<br>";

$ankumaahal="Hello World";

if ($ankumaahal){
echo "$ankumaahal";
}
else{
    echo"Fail";
}

for($x=0; $x<10; $x++){
if($x ==10)break;
echo"this number is $x<br>";
}

?>


<form action="" method="post">
    <select name="selectbox" id="selectbox">
    <option value="1">red</option>
    <option value="2">blue</option>
    <option value="3">green</option>
    <option value="4">yellow</option>
    </select>
    <button type="submit" class="btn btn-primary"> Submit</button>
    
 </form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amit = $_POST['selectbox'];
   
    
    
    switch ($amit) {
    case 1:
        echo "This is color red";
        break;
        case 2:
            echo "This is color blue";
            break;
            case 3:
                echo "This is color green";
                break;
                case 4:
                    echo "This is color yellow";
        break;
    default:
    echo "This is my default color red";
}
}
?>
<?php
echo "<br>";

echo date("Y");
echo "<br>";

echo date("d/m/Y");
echo "<br>";

date_default_timezone_set('Asia/Kolkata');
$time = getdate();
echo $time["hours"] . ":" . $time["minutes"] . ":" . $time["seconds"];


echo "<br>";




$amit=1;
while ($amit<10 && $amit++){
    echo $amit;
} 
echo "<br>";

$hy=1;
while ($hy <10 && $hy++){
    echo $hy;
}
echo "<br>";

$hello = 1;
if($hello < 2){
    echo "sucess";
}
else {
    echo "faild";
}



