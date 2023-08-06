<div class="content-wrapper">
  <div class="card mt-4">
    <div class="card-header">
      <h2>Edit/Update Locations <a href="<?php echo base_url('admin/locations') ?>"  class="btn btn-info btn-sm float-right">Back</a></h2>
    </div>
    <div class="card-body">
    <form class="database_operation_form" data-url="<?php echo base_url('admin/update_location/'.$location['id']) ?>" >
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" value="<?php echo $location['name'] ?>" required class="form-control" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-primary">Edit/Update Location</button>
          </div>
        </form>
    </div>
  </div>
</div>
