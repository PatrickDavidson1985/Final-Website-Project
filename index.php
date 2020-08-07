<?php

//php forms practice 
// Pick any form you've worked on previously.
// Update it to submit using the POST method to a PHP page.
// Generate a PHP array which stores all the data in the page
// Use var_dump or print_r to display the array with the form data.
// create a single array called form data
//assign fname to the index of name inside of form data

if(isset($_POST['fname'])){
    $name = $_POST['fname'];
}
print_r($name)


$formdata = array('fname', 'lname');
echo $formdata;
?>