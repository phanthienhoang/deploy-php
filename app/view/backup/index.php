<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

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
            <form enctype="multipart/form-data">
            <span>sql files</span>
            <input type="file" name="fileSql" id="fileSql">
            <a href="javascript:;" onclick="insertSQL();" class="btn btn-primary">insert</a>
            </form>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script >

function insertSQL()
{ 
  var formData = new FormData;
  formData.append('fileSql' ,$('#fileSql')[0].files[0]);
  $('#exampleModal').modal('show');
  $.ajax({
      url:'admin/uploadFileSql',
      method:'POST',
      data: formData,
      dataType:'text',
      contentType: false, 
      processData: false,
      success: function(data){
        $('#exampleModal').modal('hide');
        toastr.success('Thành công');
    }, error: () => {
      $('#exampleModal').modal('hide');
        toastr.error('Thành công');
    }
  });
}
</script>
</html>