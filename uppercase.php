<?php 
class Uppercase extends ChangeCase
{
    public function convert()
    {
        if ($this->convertTypes == "uppercase") {   
            $strConvert = strtoupper($this->inputInform);
            return $strConvert;
        }
    }
}

$case3 = new Uppercase();
$convertedString3 = $case3->convert();
if ($convertedString3 !== null) {
    $case3->displayResult($convertedString3);
}
?>