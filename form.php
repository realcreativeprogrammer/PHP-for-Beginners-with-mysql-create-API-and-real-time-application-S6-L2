<?php
include './conn.php';
if(isset($_POST['submit'])){
    //  echo $_POST['email'];
    $email= input($_POST['email']);
    // echo $email;
    $sql='INSERT INTO `user`(`email`,`password`) VALUES (?,?)';
    $exc=$pdo->prepare($sql);
    $exc->execute(array($email,'pass'));
    echo 'data is added';
}
function input($value){
    $newvalue=trim($value);
    $newvalue=htmlspecialchars($newvalue);
    $newvalue=stripslashes($newvalue);
    return $newvalue;
}
?>