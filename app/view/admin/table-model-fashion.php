<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- modal      -->
              <button type="button" class="btn btn-primary card-title " onclick="modelShow()">
                Create Model Fashion
              </button>

              <div class="modal fade" id="modalShowHide" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" >
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" >Model Fashion</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form enctype="multipart/form-data">
                    <input hidden id="Id" name="Id">
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="">name</label>
                        <input type="text" class="form-control" id="name" name='name'aria-describedby="emailHelp" placeholder="Enter name">
                      </div>
                      <!-- <div class="form-group">
                        <label for="">image</label>
                        <input type="file" class="form-control" id="" placeholder="Password">
                      </div> -->
                        <label for="">image</label>
                      <div class="input-group mb-3">

                      <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" accept="image/*" name="image">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                      </div>
                      <!-- </div> -->


                      <div class="form-group">
                        <label for="">category</label>
                        <select name="category_id" id="Roles"  class="form-control">
                          <!-- <option value="">a</option>
                          <option value="">a</option> -->
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">information</label>
                        <div class="row">
                            <div class="col-2">
                            <input type="number" class="form-control" id="height" name="height" placeholder="height">
                            </div>
                            <div class="col-2">
                            <input type="number" class="form-control" id="bust" name="bust" placeholder="bust">
                            </div>  
                            <div class="col-2">
                            <input type="number" class="form-control" id="waist" name="waist" placeholder="waist">
                            </div>  
                            <div class="col-2">
                            <input type="number" class="form-control" id="hips" name="hips" placeholder="hips">
                            </div>
                            <div class="col-2">
                            <input type="number" class="form-control" id="shoe" name="shoe" placeholder="shoe">
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="save();">Save changes</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>

              <!--end Modal -->

              <!-- /.card-header -->
              <div class="card-body">
                <table id="table-models" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>name</th>
                    <th>image</th>
                    <th>category</th>
                    <th>view</th>
                    <th>height</th>
                    <th>bust</th>
                    <th>waist</th>
                    <th>hips</th>
                    <th>shoe</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody id="model-fashions">
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>name</th>
                    <th>image</th>
                    <th>category</th>
                    <th>view</th>
                    <th>height</th>
                    <th>bust</th>
                    <th>waist</th>
                    <th>hips</th>
                    <th>shoe</th>
                    <th>action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>