<?php

    require_once "inclue/Student.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $arr = [$name,$email,$phone];
        $student = new Student();
        $data = $student->createSutdent($arr);
        return $data;
    }
?>