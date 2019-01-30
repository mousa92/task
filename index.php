<?php
function gradingStudents(...$grades){
 

 echo "Sample Input O <br>";
 for ($i=0;$i <= sizeof($grades); $i++){
    
    
	echo $grades[$i];
    echo "<br/>";
}

echo "Sample Output O <br>";
for ($i=0;$i <= sizeof($grades); $i++){
    if ($grades[$i] >= 38){
        if ($grades[$i] % 5 == 3){
            $grades[$i] += 2;
        }
        else if ($grades[$i] % 5 == 4){
            $grades[$i] += 1;
        }
    }
    
    
	echo $grades[$i];
    echo "<br/>";
}    
}

gradingStudents(73,67,38,33); 
 
?>





 



