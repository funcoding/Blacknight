<!Doctype html>
<head>
	<title>
		Calculator
	</title>
</head>
<body>
	<form method = "post" action = "">
		<input type = "text" name = "calc" placeholder = "Enter here"/>
		<input type = "submit" name = "submit" value = "submit" />
	</form>
	<?php
	if(isset($_POST['submit'])){
		$text = trim($_POST["calc"]);
		$text = str_replace(" ", "", $text);
		if(preg_match('/(sin|cos|tan|log)[0-9]+/', $text))
		{
			//Extract first 3 characters
			$function = substr($text,0,3);
			$number = substr($text,3);
			$number = deg2rad($number);
			switch($function){
				case "sin":
					$result = sin($number);
				break;

				case "cos":
					$result = cos($number);
				break;

				case "tan":
					$result = tan($number);
				break;

				case "log":
					$result = log10($number);
				break;
			}

			?>
			<h4>Result: <?php echo($result); ?></h4>
			<?php
		}elseif(preg_match('/^[0-9]+(-|\+|\*|\/)[0-9]+$/', $text)){
			
			for($j=0;$j<strlen($text);$j++)
			{
				if(!is_numeric($text[$j]))
				{
					$pos = $j;
				}
			}
			switch($text[$pos]){
				case "+":
					$result = substr($text,0,$pos)+substr($text,$pos+1);
				break;
				case "-":
					$result = substr($text,0,$pos)-substr($text,$pos+1);
				break;
				case "*":
					$result = substr($text,0,$pos)*substr($text,$pos+1);
				break;
				case "/":
					$result = substr($text,0,$pos)/substr($text,$pos+1);
				break;
			}
			?>
			<h4>Result: <?php echo($result); ?></h4>
			<?php
		}else{
			?>
			<h4>Get Lost!</h4>
			<?php
		}
	}
	?>
	<h4>Format</h4>
	<p>Add/Sub/Div/Mul: number sign number  ie 4+4</p>
	<p>Other Function: Function number ie tan45</p>
</body>
</html>