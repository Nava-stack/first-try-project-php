<?php

  // echo "Welcome";
  // echo 'Welcome';
  // print ('Hello World');

  //----------Comments

  //Single line comments
  #
  //

  /* Multiline Comments


  */

  $name = "Chummy";
  $lname = "Nava";
  $age = 12;
  $height = 12.43;

  // echo $name;
  // echo "<br>";
  // echo $lname;

  // echo $name." ".$lname;
  // echo "<br>";
  // echo $age + $height;
  // echo "<br>";

  // //Double quotations
  // echo "My name is $name $lname";

  // define("DBName","dbDemo");
  // echo "<br>";
  // echo DBName;

  // $ages = array(23,22,13,15);

  // $ages[] = ""

  // $info = ['MovieName'=>'Leo','Year' => 2023,'Director'=>'Lokesh','Actor'=> 'Vijay'];
  
  // echo $info['MovieName'];



  // $info = [
  //   ['Leo','Lokesh'],
  //   ['Vikram','Lokesh']
  // ];

  // echo $info[0][1];

  // FOR Loop
  // for ($i=0; $i<10 ; $i++) { 
  //   echo $i."<br>";
  // }

  //while
  // $a = 10;
  // while ($a <21) {
  //   echo $a."<br>";
  //   $a++;
  // }

  // DoWhile
  // do {
  //   # code...
  // } while ($a <= 10);

  $marks = ['Vinoth'=> 75,'Raj' =>45,'Aravind' =>63,'Athil' =>83,'Kavin'=>90,'Mujeeb' =>43,'Jevee' => 73];
  $tot = 0;
  $hei_marks = 0;
  $hei_person = "";
  foreach ($marks as $key => $value) {
    $count = count($marks);
    $tot +=$value;
    $avg = $tot/$count;

    if ($value >$hei_marks) {
      $hei_marks = $value;
      $hei_person = $key;
    }
  }
  echo "Average is $avg <br>";
  echo "Heighest Person is $hei_person mark is $hei_marks"


  // print_r($marks);

   

?>