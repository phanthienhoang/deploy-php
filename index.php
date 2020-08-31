<!DOCTYPE html>
<html>
<head>
    <title>Server Side Ajax CURD data table with Bootstrap</title>

    <!-- bootstrap Lib -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- datatable lib -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        .content {
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            padding-bottom: 60px;
        }
    </style>

</head>

<body>
    <div class="content">
        <h1>CRUD PHP Exercises & Pagination with AJAX</h1>
        <div align="right">
            <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success">Add Course</button>
        </div>
        <br>
        <table id="course_table" class="table table-striped">
            <thead bgcolor="#6cd8dc">
                <tr class="table-primary">
                    <th width="10%">ID</th>
                    <th width="30%">Name Students</th>
                    <th width="30%">Email Students</th>
                    <th width="30%">Phone Students</th>
                    <th width="30%">Action</th>
                </tr>
            </thead>
            <tbody id="data-display">
              
            </tbody>
        </table>
    </div>
</body>

</html>
<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="course_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Students</h4>
                </div>
                <div class="modal-body">
                    <label>Enter Name Students</label>
                    <input type="text" name="name" id="name" class="form-control" /><br>
                    <label>Enter Email Students</label>
                    <input type="text" name="email" id="email" class="form-control" /><br>
                    <label>Enter Phone Students</label>
                    <input type="text" name="phone" id="phone" class="form-control" /><br>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="course_id" id="course_id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="button" name="action" id="action" class="btn btn-primary" onclick = "createUpdataSutdent()"; value="Add" />
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#add_button').click(function() {
            $('#course_form')[0].reset();
            $('.modal-title').text("Add Course Details");
            $('#action').val("Add");
            $('#operation').val("Add")
        });

        getData();
    });


    function getData(){
        $.ajax({
            url : 'data_index.php',
            method : 'GET',
            dataType: 'json',
            contentType: 'application/json',
           
            success: function(data){
                $("#data-display").empty();
                $.each(data, function(index, value){
                    $("#data-display").append(
                        `
                        <tr>
                            <td>${value.id}</td>
                            <td>${value.name}</td>
                            <td>${value.email}</td>
                            <td>${value.phone}</td>
                            <td>
                                <a href="javascript:;" onclick ="updateStudent(${value.id})" >Edit</a>
                                <a href="javascript:;" onclick ="deleteStudent(${value.id})" >Delete</a>
                            </td>
                        </tr>

                        `
                    )
                });

                $('#course_table').DataTable();
            }
        });
    }

    function createUpdataSutdent(){
        var formdata = new FormData;
        formdata.append('name' , $('#name').val());
        formdata.append('email' , $('#email').val());
        formdata.append('phone' , $('#phone').val());

        console.log(formdata);
        $.ajax({
            url : 'create.php',
            method : 'POST',
            data: formdata,
            dataType: 'text',
            contentType: false, 
            processData: false,
            success: function(data){
                alert("thanhf cong");
                $("#userModal").modal("hide");
                getData();

            }
        });
    }

    function updateStudent(id){
        alert(id);
          //  cais nay em goi ajax toi file edit nhu tren a
    }
    function deleteStudent(id){
        alert(id);
         //  cais nay em goi ajax toi file delete nhu tren a
    }

    
</script>