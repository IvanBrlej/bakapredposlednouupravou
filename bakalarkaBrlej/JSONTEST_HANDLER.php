<?php
session_start();
require 'includes/connection.php';

$questions = json_encode($_POST['questions'], true);

echo "$questions";
echo '<script>';
echo 'console.log('.  $questions  .')';
echo '</script>';
$sql_insert = "INSERT INTO jsonanswer (id, answers)
                    VALUES (NULL, '$questions')";
if(mysqli_query($con, $sql_insert)){
    echo "Item successfully added to the database";
}else{
    echo "ERROR: $sql_insert did not run".mysqli_error($con);
}
?>
