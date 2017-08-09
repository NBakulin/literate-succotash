<html>
 <head>
  <title>HomeWorkSecond</title>
 </head>
 <body>
 <?php
	class HWSecond
	{
		public function museumVisitors($str) 
		{ 
					$times = explode(" ", $str); 
					for ($i = 0; $i < count($times); $i++) 
					{ 
					$times[$i] = explode("-", $times[$i]);
					$times[$i][0] = DateTime::createFromFormat('G:i', $times[$i][0]);
					$times[$i][1] = DateTime::createFromFormat('G:i', $times[$i][1]);
					}					
					$maxCount = 0;
					$maxExitTime = DateTime::createFromFormat('G:i', "00:00");
					$minEntryTime = DateTime::createFromFormat('G:i', "00:00");
					for ($i = 0; $i < count($times); $i++) 
						{ 
							        $count = 0; 
									for ($j = 0; $j < count($times); $j++) 
									{ 
									if ($times[$i][1] > $times[$j][0] && $times[$i][1] <= $times[$j][1]) 
									$count++; 
									} 
							if ($count > $maxCount) 
							{ 
							$maxCount = $count; 
							$maxExitTime = $times[$i][1]; 
							} 
						} 
						for ($i = 0; $i < count($times); $i++)
						{ 
							$int1 = $times[$i][0]->diff($maxExitTime); 
							$int2 = $minEntryTime->diff($maxExitTime); 
							if (($int1->h * 60 + $int1->i < 
							$int2->h * 60 + $int2->i) && 
							$times[$i][0] < $maxExitTime) 
						{ 
							$minEntryTime = $times[$i][0]; 
}
						}
						return ($maxCount != 0) ? $maxCount.' '.$minEntryTime->format('H:i').'-'.$maxExitTime->format('H:i'): ' ';
		} 	
	} 

 	$obj = new HWSecond; 
	echo $obj->museumVisitors("10:20-10:40 9:00-11:15 10:00-12:00");
	?>
	 </body>
</html>