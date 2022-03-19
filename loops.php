<?php

    //while
    //while (true) {
    //    //Do somethings
    //}
//loop with $counter
//$counter = 0;
//$loop = true;
//while ($loop){
    //  echo "Counter $counter" . '<br>';
    //  if ($counter >= 10) {
    //      $loop = false;
    //  };
    //  $counter++;
    //}

    // do - while 
    // $counter = 10 ;
    // do{
       // echo "Counter $counter";
    // } while ($counter <10);

    // for
    // for($i = 1; $i < 10; $i++){
       // echo "Counter: $i".'<br>';
    // }

    //foreach
    //$$fruits = ["Banana", "Apple", "Orange"];
    //foreach ($fruits as $i=> $fruit) {
        // echo $i .' '. $fruit. '<br>';
    //}
        
//Iterarte over Associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Game'],
];
foreach ($person as $key => $value ){
    if ($key === 'hobbies') break;
    echo $value . '<br>';
}