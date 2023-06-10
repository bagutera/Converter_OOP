<?php 
class LowerCase extends ChangeCase
{
    public function lowerCase()
    {
        if ($this->convertTypes == "lowerCase") {	 
            $strConvert2 = strtolower($this->inputInform); // Convert all characters to lowercase
            echo $strConvert2 . "<br>";
            
            $strSum2 = str_word_count($this->inputInform);
            if ($strSum2 == 1) {
                echo "In a sentence " . $strSum2 . " word and ";
            } else {
                echo "In a sentence " . $strSum2 . " words and ";
            }
                
            $symbSum2 = iconv_strlen($this->inputInform);
            if ($symbSum2 == 1) {
                echo $symbSum2 . " symbol." . "<br>";
            } else {
                echo $symbSum2 . " symbols." . "<br>";
            }
                
            return $strConvert2;
        }
    }
}
