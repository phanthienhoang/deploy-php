<?php include "inclue/DBConnection.php";?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new DBConnection;
    $file = $_FILES["fileSql"]["tmp_name"];
    $query = file_get_contents($file);
    $stmt = $db->con->prepare($query);
    return $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->

</head>
<body>
    <div class="container">
        <div class="container-fluid">
              <button hidden type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
  </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="position: static;">
                    <div class="modal-content" style="height: 100px; width: 350px; position: absolute; top: 50%;">
                    <div class="modal-body" style="height: 100px;">
                        <img src="images/200.gif" alt="" style="height: 100%; width: -webkit-fill-available; object-fit: cover;"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" >
            <h1>insert database</h1>
            <form enctype="multipart/form-data" method="POST">
            <span>sql files</span>
            <input type="file" name="fileSql" id="fileSql">
            <button name="submit" type="submit">insert</button>
            </form>
        </div>
    </div>

</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
