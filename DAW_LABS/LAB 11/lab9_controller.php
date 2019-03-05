<?php
    function bmi($mass, $height) {
        return $mass / pow($height, 2);    
    }

    function classification($bmi) {
        if ($bmi < 18.5) {
            return "underweight";
        } else if ($bmi < 25) {
            return "normal";
        } else if ($bmi < 30) {
            return "overweight";
        } 
        return "obese";                 
    }

    if (isSet($_POST['mass']) && isSet($_POST['height'])) {
        $bmi = bmi($_POST['mass'], $_POST['height']);
        $classification = classification($bmi);
        include('lab9_bmiView.php');
    }
        
    if (isSet($_GET['bmi'])) {
        $bmi = $_GET['bmi'];
        $classification = classification($bmi);
        include('lab9_classView.php');
    }
?>
