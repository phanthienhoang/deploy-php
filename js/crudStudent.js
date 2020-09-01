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
