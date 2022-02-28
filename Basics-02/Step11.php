<?php
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
echo IsPrime(4)."\n";
echo IsPrime(16)."\n";
echo IsPrime(2)."\n";
echo IsPrime(3)."\n";