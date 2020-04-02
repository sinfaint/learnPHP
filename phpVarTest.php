<?php
class phpVarTest{
    var $testVar;
    
    //construct
    function __construct($var=NULL){
        $this->testVar = $var;
    }
    
    //show var_dump
    function showVarDump(){
        return var_dump($this->testVar);
    }
}

$varTest_PosInt = new phpVarTest(12345);
$varTest_NegInt = new phpVarTest(-54321);
$varTest_Float = new phpVarTest(12.345);
$varTest_String = new phpVarTest("this is str");
$varTest_Bool = new phpVarTest(true);
$varTest_NULL = new phpVarTest();
$varTest_array = new phpVarTest(array(0x12, 34.56, "string", false, array("array in array")));

$varTest_PosInt->showVarDump();
$varTest_NegInt->showVarDump();
$varTest_Float->showVarDump();
$varTest_String->showVarDump();
$varTest_Bool->showVarDump();
$varTest_NULL->showVarDump();
$varTest_array->showVarDump();
?>