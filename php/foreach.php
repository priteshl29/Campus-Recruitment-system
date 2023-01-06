<?php

$student_one=array("Maths"=>95,"Physics"=>90,
                     "Chem"=>85,"English"=>89,"Computer");

// echo "looping using foreach:<br>";
// foreach($student_one as $subject => $marks){
//         echo "student one got ".$marks."in".$subject."<br>";

//     }

    // looping an array usding for
echo " \nLopping using for:<br>";
$subject=array_keys($student_one);
$marks=count($student_one);

for($i=0;$i<$marks;$i++){
        echo "<br>".$subject[$i]."".$student_one[$subject[$i]]."<br>";
}