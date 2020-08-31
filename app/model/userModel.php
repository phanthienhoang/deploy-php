<?php
class userModel extends DB
{
    public function login($arr){
        $sql = "SELECT * FROM `users` where `email`= ? and `password`= ?";
        $statement = $this->con->prepare($sql);
        $statement->bindParam(1,$arr[0]);
        $statement->bindParam(2,$arr[1]);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $count = $statement->rowCount();
        return [
                   
                    "row" => $row,
                    "count" => $count
                    
                ];
    }
}

?>