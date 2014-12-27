<?php
	//addition(nu1+nu2);
/*
	if (addition) {
     $addition = true;
	  echo "I can add up!";
     $add = $nu1 + $nu2;
    } else {
     $addition = false;
	  echo"bad numbers to add up";
    }
    */
        /*
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
    if($_POST['add_submit']){
$total=true;
echo"Can add up";
echo $total=$num1+$num2;
}else{
	$total=false;
	echo"Not possible error";
}
$an=array($num2);
if($an)
{
    empty($an);
    echo "Enter";
}else{
    echo $total=$num1+$an;
}
*/
       //session_start();
       $num1 = $_POST['num1'];
       $_SESSION['num1']=$_POST['num1'];
        $num2 = $_POST['num2'];
        $_SESSION['num2'] = $_POST['num2'];
    if($_POST['add_submit']){
$total=true;
echo $total=$num1 + $num2;
}else{
 echo" false";   
}


?>