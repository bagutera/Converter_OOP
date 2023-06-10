<?php 
	class Uppercase extends ChangeCase
	{
		public function uppercase()
		{
			if ($this->convertTypes == "uppercase")
			{   
				$strConvert3 = strtoupper($this->inputInform);
				echo $strConvert3."<br>";
				
				$strSum3 = (str_word_count($this->inputInform));
				if ($strSum3 == 1)
				{
					echo "In a sentence ".$strSum3." word and ";
				}
				else
				{
					echo "In a sentence ".$strSum3." words and ";
				}
					
				$symbSum3 = (iconv_strlen($this->inputInform));
				if ($symbSum3 == 1)
				{
					echo $symbSum3." symbol."."<br>";
				}
				else
				{
					echo $symbSum3." symbols."."<br>";
				}
					
				return $strConvert3;
			}
		}
	}
	

$case3 = new Uppercase();
$case3->uppercase();
?>