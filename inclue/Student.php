<?php 

require_once "DBConnection.php";

class Student extends DBConnection
{
    function get_total_all_records(){
        $sql = "SELECT * FROM student";
        $statement = $this->con->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    function createSutdent($arr){
        $sql = "INSERT INTO `student`( `name`, `email`, `phone`) VALUES (?,?,?)";
        $statement = $this->con->prepare($sql);
        $statement->bindParam(1,$arr[0]);
        $statement->bindParam(2,$arr[1]);
        $statement->bindParam(3,$arr[2]);
        return ($statement->execute());
    }
}

?>