<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Manage Locations <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-info btn-sm float-right">Add New</a></h2>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Viashala</td>
                        <td><input type="checkbox">Active</td>
                        <td><a class="btn btn-danger btn-sm">Delete</a> &nbsp; <a class="btn btn-info btn-sm">Update</a></td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Padmini</td>
                        <td><input type="checkbox">Active</td>
                        <td><a class="btn btn-danger btn-sm">Delete</a> &nbsp; <a class="btn btn-info btn-sm">Update</a></td>
                    </tr>

            </table>


        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Location </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form class="database_operation_form">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" required class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
        <button type="button" class="btn btn-primary">Add Location</button>    
        </div>
    </form>
      </div>
    </div>
  </div>
</div>