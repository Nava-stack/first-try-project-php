<?php

  // function sayHi(){
  //   echo "Hi Buddy..!";
  // }
  // sayHi();

  function sayHi($name,$age){
    echo "Welcome to $name and age is $age";
  }

  sayHi("Esoft",24);


  function add($n1,$n2){
    return $n1+$n2;
  }
  
  $total = add(23,40);
  echo add(75,100);
?>