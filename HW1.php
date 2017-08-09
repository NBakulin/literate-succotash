<html>
 <head>
  <title>HomeWorkFirst</title>
 </head>
 <body>
 <?php
	class HWFirst
	{
		public function subStringFinder($string) 
		{ 
				$i = strlen($string) - 2; 
				$subString = $string[strlen($string) - 1];
				while (str_replace($subString,'',$string) != '') 
				{ $subString = $string[$i--] . $subString; }
			     return $subString;
		}
		public function subString($str) 
		{ 
				$Strings = explode(" ", $str);
				$subStringFirst = $this->subStringFinder($Strings[0]);				
				$subStringSecond = $this->subStringFinder($Strings[1]);
				$subStringThird = $this->subStringFinder($Strings[2]);			
				return ($subStringFirst == $subStringSecond && $subStringSecond == $subStringThird) ? $subStringFirst : ''; 
		} 
	}
 	$obj = new HWFirst; 
	echo $obj->subString("a a a");
	?>
	 </body>
</html>