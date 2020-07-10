<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card-body">
                    <form action="">
                      <div class="input-group mb-3">
                      <input type="text" class="form-control" id="search" placeholder="Search">
                      <div class="input-group-append">
                      </div>
                </div><br>
                    <div class="text-right">
                        <a href="" class="btn btn-warning btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createDepartment">
                        <i class="material-icons float-left" data-toggle="tooltip" title="Create Department!" data-placement="left">add</i>&nbsp;Create
                        </a>
                    </div>
    
                    <table class="table table-borderless table-hover">
                      <tr>
                        <th>Departments</th>
                        <td>
                          <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Department!"  data-placement="left">edit</i></a>
                          <a href="" data-toggle="tooltip" title="Delete Department!" data-placement="right"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected departments?');">delete</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Training and education team</td>
                        <td>
                          <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Department!"  data-placement="left">edit</i></a>
                          <a href="" data-toggle="tooltip" title="Delete Department!" data-placement="right"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected departments?');">delete</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>External relation team</td>
                        <td>
                          <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Department!"  data-placement="left">edit</i></a>
                          <a href="" data-toggle="tooltip" title="Delete Department!" data-placement="right"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected departments?');">delete</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Admin and finance team</td>
                        <td>
                          <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Department!"  data-placement="left">edit</i></a>
                          <a href="" data-toggle="tooltip" title="Delete Department!" data-placement="right"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected departments?');">delete</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Selection team</td>
                        <td>
                          <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Department!"  data-placement="left">edit</i></a>
                          <a href="" data-toggle="tooltip" title="Delete Department!" data-placement="right"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected departments?');">delete</i></a>
                        </td>
                      </tr>
				            </table>
                  </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

<!-- ===========================================START MODEL CREATE ================================== -->
	<!-- The Modal -->
	<div class="modal fade" id="createDepartment">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="/" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Department name">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="CREATE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =================================END MODEL CREATE==================================================== -->

   <!-- ========================================START Model UPDATE================================================ -->
	<!-- The Modal -->
	<div class="modal fade" id="updateDepartment">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="/" method="post">
				<div class="form-group">
					<input type="text" class="form-control" value="Edit Department">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="UPDATE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =================================END MODEL UPDATE==================================================== -->

<?= $this->endSection() ?>