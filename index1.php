<?php
/**
* 
*/
class PostOffice{

	function mailFiler(){
		$f = fopen("string.txt", "r");
		$content ="";
		if ($f) {
			while (!feof($f)) {
				$content.=fread($f, 100);
				echo $content;
				
			}
			fclose($f);
		}
	}

	function mailRegex(){
		$f = fopen("string.txt", "r");
		$content ="";
		if ($f) {
			while (! feof ($f)){
				$c=fgetc($f);
				
				if (preg_match("^[A-Za-z0-9]+$^" , $c)) {
					echo $c;
				}
 			}
			fclose($f);
		}
	}

	function spiltroad(){
		$f = fopen("road.txt", "r");
		$line ="";
		$stat=0;

		if ($f) {
			while (! feof ($f)){
				$c=fgetc($f);
				//echo $c;
				utf8_decode ($c);
				
				if ($c == "區") {
					echo $c;
					$stat=1;
					continue;
				}
				if ($stat) {
					echo $c;
				}
				if ($c == "路") {
					$stat=0;
				}
 			}
			fclose($f);
		}
	}
}

$po = new PostOffice();
$po->mailFiler();
echo "<br/>";
$po->mailRegex();
echo "<br/>";
$po->spiltroad();



?>