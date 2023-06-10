<?php
class FirstCapt extends ChangeCase
{
    public function convert()
    {
        if ($this->convertTypes == "firstCapt") {
            $strConvert = ucwords(strtolower($this->inputInform)); // Convert the first character of each word to uppercase
            return $strConvert;
        }
    }
}

$case1 = new FirstCapt();
$convertedString1 = $case1->convert();
if ($convertedString1 !== null) 
{
    $case1->displayResult($convertedString1);
}
?>