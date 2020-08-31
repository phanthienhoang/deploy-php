<?php
class modelFashion extends DB
{ 
    public function getModelAll(){
        // $sql = "SELECT * FROM model_fashions";
        $sql = " SELECT model_fashions. * , category_models.name as category_name
        FROM model_fashions
        INNER JOIN category_models ON model_fashions.category_id = category_models.id";

        $statement = $this->con->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
    public function getModels(){
        $sql = "SELECT * FROM model_fashions LIMIT 7";
        $statement = $this->con->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function getHostModel(){
        $sql = "SELECT * FROM model_fashions GROUP BY views DESC LIMIT 4";
        $statement = $this->con->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function getModelSingle($id){
        $sql = "SELECT model_fashions. * , category_models.name as category_name
        FROM model_fashions
        INNER JOIN category_models ON model_fashions.category_id = category_models.id where model_fashions.id = {$id}" ;
        $statement = $this->con->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function getImageAlbum($id){
        $sql = "SELECT * FROM albums where model_fashion_id = {$id}" ;
        $statement = $this->con->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function createModel($create)
    {
        $sql = "INSERT INTO `model_fashions`(`image`, `name`, `height`, `bust`, `waist`, `hips`, `shoe`, `category_id`) VALUES (?,?,?,?,?,?,?,?)";
        $statement = $this->con->prepare($sql);
        $statement->bindParam(1,$create[0]);
        $statement->bindParam(2,$create[1]);
        $statement->bindParam(3,$create[2]);
        $statement->bindParam(4,$create[3]);
        $statement->bindParam(5,$create[4]);
        $statement->bindParam(6,$create[5]);
        $statement->bindParam(7,$create[6]);
        $statement->bindParam(8,$create[7]);
        return ($statement->execute());
    }

    public function updateModel($arr, $id)
    {
        $sql = "UPDATE `model_fashions` SET `image`= ?,`name`= ?,`height`= ?,`bust`= ?,`waist`= ?,`hips`= ?,`shoe`= ?,`category_id`= ? WHERE `id` = ?";
        $statement = $this->con->prepare($sql);
        $statement->bindParam(1,$arr[0]);
        $statement->bindParam(2,$arr[1]);
        $statement->bindParam(3,$arr[2]);
        $statement->bindParam(4,$arr[3]);
        $statement->bindParam(5,$arr[4]);
        $statement->bindParam(6,$arr[5]);
        $statement->bindParam(7,$arr[6]);
        $statement->bindParam(8,$arr[7]);
        $statement->bindParam(9,$id);
        return $statement->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `model_fashions` WHERE `id` = ?";
        $statement = $this->con->prepare($sql);
        $statement->bindParam(1,$id);
        return $statement->execute();
    }

}