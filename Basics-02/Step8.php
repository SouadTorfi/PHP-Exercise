<?php
function is_Power_of_two($n)
{
   if(($n & ($n - 1)) == 0)
    {
		return "$n is power of 2";
    }
   else
    {
		return "$n is not power of 2";
    }
}
echo(is_Power_of_two(4)."\n");
echo(is_Power_of_two(7)."\n");
echo(is_Power_of_two(16)."\n");
?>