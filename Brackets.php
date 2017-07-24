<html>
 <head>
  <title>Brackets.php</title>
 </head>
 <body>
 <?php
	class Brackets
    {
        function isBracketSequenceCorrect($str)
        {
            if (strlen($str) % 2 != 0) return false;			
	   while( strlen($str = str_replace(array('{}','()','[]') , '' , $str)) > 
			  strlen($str = str_replace(array('{}','()','[]') , '' , $str))	); 
				return strlen($str) == 0;
        }
    }
/* 	$obj = new Brackets; 
	echo $obj->isBracketSequenceCorrect('[([){}[]]')?'true':'false'; */
	?>
	 </body>
</html>