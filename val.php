<html>
    <head>
        <title>Title goes here</title>
    </head>
    <body>
        <form action="val.php" method="post">
            <label>Enter Num1:</label>
            <input type="text" name="num1"><br>
            <input  type="submit" name="add_submit" value="Add">
        </form>

        <?php       
            $num1 = $_POST['num1'];
            /*
            //For Addition
            //echo $num1;
            $length=strlen($num1);
            //echo "<br>".$length."<br>";
            $total=0;

            if(strpos($num1, '+'))
            {
                for($i=0;$i<$length;$i++)
                {
                    if(is_numeric($num1{$i}))
                    { 
                    $number=trim($number);
                    $number=preg_replace('[^0-9\+-\*\/\(\) ]', '', $number);
                       $total = $total + $number;         
                    }
                }
                 echo "<br>". "Result:". $total;
            }
            */
function calculate_string($mathsString)
{
    $mathsString=trim($mathsString);
    $mathsString=preg_replace('[^0-9\+-\*\/\(\)\sin\cos\tan\ ]', '', $mathsString);
    $compute=create_function("","return (" . $mathsString . ");" );
    return 0 + $compute();
}
    $string=$num1;
    echo "<br>".calculate_string($string);
/*
 //For Subtraction 
        $num1 = $_POST['num1'];
        //echo $num1;
        $length=strlen($num1);
        //echo "<br>".$length."<br>";
        $total=0;
        if(strpos($num1, '-'))
        {
            for($i=0;$i<$length;$i++)
            {
                //echo $num1{$i};
                if(is_numeric($num1{$i}))
                {              
                    $total=$num1{$i} - $num1;           
                }
                if(strpos($num1{$i},'-')){}
            }
             echo "<br>". "Result:". $total;
*/
        //}
        $strval="";
        if(preg_match('/^Sin*/', $num1))
        {        
            for($j=0;$j<strlen($num1);$j++)
            {
                if(is_numeric($num1{$j}))
                    {                 
                        $strval=$strval.$num1{$j};          
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
                    }
                }
            echo tan($strval);
            echo "<br>".tanh($strval);
        }
        $strval="";
        if(preg_match('/^Log*/', $num1))
        {        
            for($j=0;$j<strlen($num1);$j++)
            {
                if(is_numeric($num1{$j}))
                    {                 
                        $strval=$strval.$num1{$j};           
                    }
                }
            echo log($strval);
            echo "<br>".log10($strval);
            echo "<br>".log1p($strval);
        }
        ?>
    </body>
</html>
<?php
/*  
//For addition using arrays    
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