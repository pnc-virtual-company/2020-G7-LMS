<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" id="search" placeholder="Search">
                    </div>
                    <br>
                    <div class="text-right">
                    <a href="" class="btn btn-primary btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createPosition">
                        <i class="material-icons float-left" data-toggle="tooltip" title="Create Position!" data-placement="left">add</i>&nbsp;Create
                        </a>
                        </a>
                    </div>  
                    <br>
                    <table class="table table-hover">
                    <thead class="bg-primary text-white">
                    <tr>
                        <th>Positions</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><i class="material-icons float-left">people</i> &nbsp;&nbsp; WEP Coordinator</td>
                        <td class="text-right">
                        <a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position!"  data-placement="left">edit</i></a>
                            <a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right" class="delete"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected position?');">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="material-icons float-left">people</i> &nbsp;&nbsp; Education </td>
                        <td class="text-right">
                        <a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position!"  data-placement="left">edit</i></a>
                            <a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right" class="delete"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected position?');">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="material-icons float-left">people</i> &nbsp;&nbsp; HR </td>
                        <td class="text-right">
                        <a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position!"  data-placement="left">edit</i></a>
                            <a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right" class="delete"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected position?');">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="material-icons float-left">people</i> &nbsp;&nbsp; IT Admin </td>
                        <td class="text-right">
                        <a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position!"  data-placement="left">edit</i></a>
                            <a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right" class="delete"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected position?');">delete</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
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