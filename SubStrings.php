<html>
 <head>
  <title>MaximumUniqueSubstringg.php</title>
 </head>
 <body>
 <?php
	class MaximumUniqueSubstring
	{
		public function findMaximumUniqueSubstring($str) 
		{ 
			$answerSubsstring = ""; $set = "";$ans = 0; $j = 0; 
			$n = strlen($str); 
			while ($j < $n ) 
			{ 
				if (strpos($set, $str[$j]) === false) 
					{ 
						$set .= $str[$j++];
						if ($ans < strlen($set))
						{
							$answerSubsstring = $set;
							$ans = strlen($set);
						}
					} 
				else 
					{
						$set = substr($set, strpos($set, $str[$j]) + 1);
						$set .= $str[$j++];
					}
			} 
			return $answerSubsstring; 
		} 
	}
 	$obj = new MaximumUniqueSubstring; 
	echo $obj->findMaximumUniqueSubstring("qwterfaderqwsbgFAJds");
	?>
	 </body>
</html>