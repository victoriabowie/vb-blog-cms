<!-- Part 9 -->
<?php
    ini_set('display_errors',1);

    $firstName = "Jennifer";                  // String type variable
    $lastName = "Smith";                       // String type variable
    $age = 42;                               // Integer type variable
    $married = true;                         // Boolean type variable
    $childrenNames = array("Nick","Judy","Nicole");   // Array type variable

    function getFullName($firstName, $lastName) {
        return  $firstName . " " . $lastName;         // Concatenation Operator
    }
    $fullName = getFullName($firstName, $lastName);   // Using variables

    function getIsSettled($age, $married) {
        $dogYears = $age/7;                          // Arithmetic Operator
        $isAdult = $dogYears > 4;                    // Comparison operator
        $isSettled = $isAdult and $married;          // Integer type variable
        return $isSettled;
    }
    
    $isSettled = getIsSettled($age, $married);       // Using variables

    if ($isSettled) {
        echo $fullName . " is settled.";
    } else {
        echo $fullName . " is not settled.";
    }

    foreach($childrenNames as $childName) {
        echo "<li>" . $childName . "</li>";
    }

?>
