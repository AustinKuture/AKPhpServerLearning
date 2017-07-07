<?php
/**
 * Created by PhpStorm.
 * User: Kuture
 * Date: 2017/6/29
 * Time: 13:23
 */
//
//   $userArr = array('name' => 'Kuture','age' => '18','heigh' => '175','weight' => '60Kg');
//
//   echo "<br>".var_dump($userArr)."<br>"."<br>".json_encode($userArr)."<br>";


//   class Emp {
//       public $name = "";
//       public $hobbies  = "";
//       public $birthdate = "";
//   }
//   $e = new Emp();
//   $e->name = "sachin";
//   $e->hobbies  = "sports";
//   $e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
//   $e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));
//
//   echo json_encode($e);


//class Emp {
//
//    public $name = "";
//    public $hobbies = "";
//    public $birthdate = "";
//}
//
//$e = new Emp();
//$e->name = "Kuture";
//$e->hobbies = "Think";
//$e->birthdate = date('m/d/y h:i:s a');
//
//echo json_encode($e);

 $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

   var_dump(json_decode($json));

   var_dump(json_decode($json, true));
































?>