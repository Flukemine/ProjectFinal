<?php
class UnitTests extends PHPUnit_Framework_TestCase{
    
       
   public function testCheck1(){
    include('testing2(testing).php');
    $answer = con();
    $this->assertTrue($answer);
}
   public function testCheck2(){
    include('newsbook.php');
    $answer = reg();
    $this->assertTrue($answer);
}
  
    
    
   public function testCheckFile(){
         include('LottoHistory.php');
    $this -> assertFileExists("LottoHistory.php");

}
  
     
   public function testCheck3(){
    $answer = add();
    $this->assertTrue($answer);
}
  
    

}
?>