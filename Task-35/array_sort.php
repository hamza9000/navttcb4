<?php 
 $students = ["Hamza", "Talha", "Yasir", "Shaheer"];


 //for sorting students
 sort($students);
 print_r($students);

 // for sorting students in ascending order
 asort($students);
 print_r($students);
 
 rsort($numbers);
 print_r($numbers);
 // for sorting students in key-wise (alphabetical order)
 ksort($students);
 print_r($students);

 // for sorting students in reverse-key-wise (reverse alphabetical order)
 krsort($students);
 print_r($students);

 $numbers = [3, 4, 5, 6, 7, 8, 9, 10, 11, 1, 2];
 sort($numbers);
 print_r($numbers);


 asort($numbers);
 print_r($numbers);


    ?>