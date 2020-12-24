<?php
// class student {
//   public $id;
//   public $name;
//   public $email;
//   public $mobileNumber;
//   function get_id() {
//     return $this->id;
//   }
//   function get_name() {
//     return $this->name;
//   }  function get_email() {
//     return $this->email;
//   }
//   function get_mobileNumber() {
//     return $this->mobileNumber;
//   }
// }
// $std=new student ();
// $std->id=123443;
// $std->name="sara";
// $std->email="sara@orange.com";
// $std->mobileNumber='0777777777';
// class teacher extends student{
//    public $salary;
//    public $subject=array();
//    function get_salary() {
//     return $this->salary;
//   }
//      function get_subject() {
//     return $this->subject;
//   }
// }
// $subject=
// $tech=new teacher ();
// $tech->id=96432;
// $tech->name="sadi";
// $tech->email="sadi@orange.com";
// $tech->mobileNumber='0777788888';
// $tech->salary=800;
// $tech->subject=array('English', 'Arabic','Math', 'science');
// echo $std->get_id() ."<br>";
// echo $std->get_name()."<br>";
// echo $std->get_email()."<br>";
// echo $std->get_mobileNumber();
// echo '<br>';
// echo '<hr>';
// echo $tech->get_id() ."<br>";
// echo $tech->get_name()."<br>";
// echo $tech->get_email()."<br>";
// echo $tech->get_mobileNumber()."<br>";
// echo $tech->get_salary()."<br>";
// // for ($i=0;$i<1;$i++){
//    print_r(implode(" ",$tech->get_subject()));
// // }
// //
// class X {
//     private $non_static_member = 1;
//     private static $static_member = 2;
//
//     function __construct() {
//         echo $this->non_static_member . ' '
//            . self::$static_member;
//     }
// }
//
// echo "<br>";
//
// new X();
// echo "<br>";
//
// interface a{
//    public function printData();
// }
//
//
// interface b{
//    public function getData();
// }
//
//
// interface c extends a, b{
//    public function addData();
// }
//
//
// class d implements c{
//
//    public function printData(){
//       echo "I am printing";
//    }
//
//    public function getData(){
//       echo "I am reading data";
//    }
//
//    public function addData(){
//       echo "I am adding";
//    }
//
// }
//
// // $inter = new c();
// $myobj = new  d();
// $myobj->printData();
// echo  "<br>";
// $myobj->addData();


abstract class car{
    public $name;
    public $model;
    public $price;
     abstract public function carName($x);
     abstract protected function carModel($y);
     abstract public function carPrice();
}
class Mercedes extends car {
    public $name;
    public $model;
    public function carName($x){
        $this->name= $x;
        echo "This Car is Mercedes" .$x;
    }
    public function carModel($y){
        $this->model= $y;
        echo "This Car is Mercedes ". $y;
    }
    public function carPrice(){
        echo "This Car is Mercedes ";
    }
}
$E200= new Mercedes();
$E200->carName('E200');
echo "<br>";
$E200->carModel('2018');
echo "<br>";
$E200->carPrice('30000');
echo "<br>";
class Toyota extends car {
    public $name;
    public $model;
    public function carName($x){
        $this->name= $x;
        echo "This Car is".$x;
    }
    public function carModel($y){
        echo "This Car is". $name;
    }
    public function carPrice(){
        // echo "This Car is". $name;
    }
}
$Priyus = New Toyota();
$Priyus->carName("Toyota Priyus");


?>
