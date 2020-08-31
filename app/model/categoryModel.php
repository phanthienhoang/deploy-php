<?php
class categoryModel extends DB
{
    public function getAllCategory(){
        $sql = "SELECT * FROM category_models";
        $statement = $this->con->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}