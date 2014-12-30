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
*/
$num1 = $_POST['num1'];
//echo $num1;
$length=strlen($num1);
//echo "<br>".$length."<br>";
$total=0;
if(strpos($num1, '+'))
{
    //echo "In strpos";
    for($i=0;$i<$length;$i++)
    {
        //echo $num1{$i};
        if(is_numeric($num1{$i}))
        {
                  
            $total=$total + $num1{$i};
           
        }
        if(strpos($num1{$i},'+'))
           {
           // echo "Good";
            //echo "<br>". $i;
           }
    }
            echo "<br>". $total;
}
$strval="";
if(preg_match('/^Sin*/', $num1))
{        
    for($j=0;$j<strlen($num1);$j++)
    {
        if(is_numeric($num1{$j}))
            {                 
                $strval=$strval.$num1{$j};
                //$total1= sin{$num1};           
            }
        }
    echo sin($strval);
    echo "<br>".sinh($strval);
}
$strval="";
if(preg_match('/^Cos*/', $num1))
{        
    for($j=0;$j<strlen($num1);$j++)
    {
        if(is_numeric($num1{$j}))
            {                 
                $strval=$strval.$num1{$j};
                //$total1= sin{$num1};           
            }
        }
    echo cos($strval);
    echo "<br>".cosh($strval);
}
$strval="";
if(preg_match('/^Tan*/', $num1))
{        
    for($j=0;$j<strlen($num1);$j++)
    {
        if(is_numeric($num1{$j}))
            {                 
                $strval=$strval.$num1{$j};
                //$total1= sin{$num1};           
            }
        }
    echo tan($strval);
    echo "<br>".tanh($strval);
}


/*      
$num_array=array();
function stringtoarray($s)
{
    $r=array();
    for($i=0;$i<strlen($s);$i++)
    {
        if(is_numeric($s[$i]) )
        {
            $r[$i]=$s[$i];
            if ()
        }
    }
    return $r; 
}
stringtoarray($num1);
$num_array=stringtoarray($num1);
for($i=0;$i<count($num_array);$i++){
    //echo $num_array[$i];
    var_dump($num_array);
    print_r($num_array);
}
*/
?>

