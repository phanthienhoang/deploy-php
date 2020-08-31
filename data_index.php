<?php include "inclue/Student.php"?>

<?php 
    $student = new Student();
    $data = $student->get_total_all_records();
    header('Content-type: application/json');
    echo json_encode($data);
?>