<!-- jQuery -->
<script src="/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- <script src="/admin-lte/plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="/admin-lte/plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin-lte/plugins/moment/moment.min.js"></script>
<script src="/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin-lte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin-lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin-lte/dist/js/demo.js"></script>



<!-- DataTables -->
<script src="/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

<!-- AdminLTE App -->


</body>
<script>
  
  function model_fashion(){
    $("#text-admin").empty();
    $("#text-admin").append(
        ` <?php require_once VIEW . 'admin\table-model-fashion.php' ?> `
    );
    getData();
    initCategory();
  }

  function admin_dashboard(){
    $("#text-admin").empty();
    $("#text-admin").append(
        ` <?php include VIEW . 'admin\home-page.php' ?> `
    )
  }

  function getData() {
    $.ajax({
      url: '/admin/apiModelFashion',
      method: 'GET',
      dataType: 'json',
      contentType: 'application/json',
      success : function (data) {
        $("#model-fashions").empty();
        $.each(data, function(index, value){
          $("#model-fashions").append(
            "<tr>"+
              "<td>" + value.name + "</td>" +
              "<td>" + "<img src= '/images/" + value.image +" 'style='width:100px ; height:auto'/>" + "</td>" +
              "<td>" + value.category_name + "</td>" +
              "<td>" + value.views + "</td>" +
              "<td >" + value.height + "</td>" +
              "<td>" + value.bust + "</td>" +
              "<td>" + value.waist + "</td>" +
              "<td>" + value.hips + "</td>" +
              "<td>" + value.shoe + "</td>" +
              "<td>" +
              "<a href='javascript:;' onclick=getDetail(" + value.id + ")><i class='fa fa-edit'></i></a> " +
              "<a href='javascript:;' onclick=deleteModel(" + value.id + ")><i class='fa fa-trash'></i></a>" +
              "</td>" +
            "</tr>"
          )
        });

        $("#table-models").DataTable();
      }
    });
  }

  function getDetail(id) {
    $.ajax({
      url:'/admin/apiModelFashionSingle/'+id,
      method : 'GET',
      dataType : 'json',
      contentType: 'applocation/json',
      success: function(data){
        $('#name').val(data[0].name);
        // $("#Roles : selected").text(data[0].category_id);
        $('#height').val(data[0].height);
        $('#bust').val(data[0].bust);
        $('#waist').val(data[0].waist);
        $('#hips').val(data[0].hips);
        $('#shoe').val(data[0].shoe);
        $('#Id').val(data[0].id);
        $('#modalShowHide').find('.modal-title').text('Update Model Fashion');
        $('#modalShowHide').modal('show');
      }
    })
  }
  function initCategory() {
    $.ajax({
        url: '/admin/apiCategoryModel',
        method: 'GET',
        dataType: 'json',
        contentType: 'application/json',
        success: function (data) {
            $("#Roles").empty();
            $.each(data, function (index, value) {
                $("#Roles").append("<option " + " value=" + value.id + " >" + value.name + "</option>");
            });
        }
    });
};
    
function save(){
  var formData = new FormData();
  if($('#Id').val() == 0){
    formData.append('name', $('#name').val());
    formData.append('category_id', $('#Roles').val());
    formData.append('image', $('#image')[0].files[0]); 
    formData.append('height', $('#height').val());
    formData.append('bust', $('#bust').val());
    formData.append('waist', $('#waist').val());
    formData.append('hips', $('#hips').val());
    formData.append('shoe', $('#shoe').val());

    $.ajax({
        url: '/admin/createModelFashion',
        method: 'POST',
        data: formData ,
        dataType: 'text',
        contentType: false, 
        processData: false,
        success: function (data) {
            $('#modalShowHide').modal('hide');
            toastr.success('Tạo mới thành công ' + $('#name').val());
            getData();
        },
        error:function(){
          console.log("lỗi")
        }
    }); 
  }else{
    var id = $('#Id').val();
    console.log(id);
    formData.append('name', $('#name').val());
    formData.append('category_id', $('#Roles').val());
    formData.append('image', $('#image')[0].files[0]); 
    formData.append('height', $('#height').val());
    formData.append('bust', $('#bust').val());
    formData.append('waist', $('#waist').val());
    formData.append('hips', $('#hips').val());
    formData.append('shoe', $('#shoe').val());
    $.ajax({
      url:'/admin/updateSingle/'+id,
      method:'POST',
      data: formData,
      dataType:'text',
      contentType: false, 
      processData: false,
      success: function(data){
        $('#modalShowHide').modal('hide');
        toastr.success('Thay đổi thành công ' +  $('#name').val());
            getData();
      }
    })
  }
};


function deleteModel(id)
{
  var confirmation = confirm("are you sure you want to remove the item?");

  if(confirmation){
    $.ajax({
      url:'/admin/deleteModel/'+id,
      method:'POST',
      success: function(data){
        toastr.warning('Xóa thành công sản phẩm')
        getData();
      }
    });
  }
}
function modelShow()
{
  $('#modalShowHide').modal('show');
}

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
