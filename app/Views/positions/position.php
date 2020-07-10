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
                            <a href="" class="btn btn-warning btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createPosition">
                            <i class="material-icons float-left" data-toggle="tooltip" title="Create Position!" data-placement="left">add</i>&nbsp;Create
                            </a>
                        </div>
    
                        <table class="table table-borderless table-hover">
                            <tr>
                                <th>Positions</th>
                            </tr>
                            <tr>
                                <td>IT Admin</td>
                            </tr>
                            <tr>
                                <td>WEP Coordinator</td>
                            </tr>
                            <tr>
                                <td>WEP Trainer</td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position!" data-placement="left">edit</i></a>
                                    <a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected position?');">delete</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>IT Admin</td>
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
	<div class="modal fade" id="createPosition">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Position</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="/" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Position name">
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
	<div class="modal fade" id="updatePosition">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Position</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="/" method="post">
				<div class="form-group">
					<input type="text" class="form-control" value="Edit Position">
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