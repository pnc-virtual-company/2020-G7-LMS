
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
    <div class="container mt-5">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<div class="text-right">
					<a href="" class="btn btn-warning btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createPizza">
						<i class="material-icons float-left" data-toggle="tooltip" title="Add Pizza!" data-placement="left">add</i>&nbsp;Create
					</a>
				</div>
                <!-- <hr> -->
                <h4 class="ml-2 mt-5">Employee</h4>
                <br>
				<table class="table table-borderless table-hover">
					<tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Duration</th> 
                        <th>Position</th>
                        <th>Start date</th>
                    </tr>
                    
					<tr>
                        <td>jack</td>
                        <td>Thomas</td>
                        <td>Training/Education</td>
                        <td>IT Admin</td>
                        <td>25/05/2005</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Pizza!" data-placement="right"  onclick="return confirm('Are you sure you want to delete this Empoyee?');"><i class="material-icons text-danger">delete</i></a>
						</td>
                    </tr>
                    
					<tr>
                        <td>jack</td>
                        <td>Thomas</td>
                        <td>Training/Education</td>
                        <td>IT Admin</td>
                        <td>25/05/2005</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Pizza!" data-placement="right"  onclick="return confirm('Are you sure you want to delete this Empoyee?');"><i class="material-icons text-danger">delete</i></a>
						</td>
                    </tr>
                    
					<tr>
                        <td>jack</td>
                        <td>Thomas</td>
                        <td>Training/Education</td>
                        <td>IT Admin</td>
                        <td>25/05/2005</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Pizza!" data-placement="right"  onclick="return confirm('Are you sure you want to delete this Empoyee?');"><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
					
				</table>
			</div>
			<div class="col-2"></div>
		</div>
	</div>


<!-- ========================================START Model CREATE================================================ -->
	<!-- The Modal -->
	<div class="modal fade" id="createPizza">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Employee</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
            <form  action="/" method="post">
                <!-- input first name -->
				<div class="form-group">
                   <input type="text" class="form-control" placeholder="First name">
                </div>
                <!-- input last name -->
				<div class="form-group">
                   <input type="text" class="form-control" placeholder="Last name">
                </div>
                <!-- input Department -->
				<div class="form-group">
                    <select class="form-control" placeholder="Department">
                        <option>IT Admin</option>
                        <option>WEP Coordinator</option>
                        <option>WEP Trainer</option>
                    </select>
                </div>
                    <!-- Position -->
				<div class="form-group">
                    <select class="form-control" placeholder="Position">
                        <option>Education</option>
                        <option>Training</option>
                    </select>
                </div>
                <!-- Sart date -->
				<div class="form-group">
                      <input class="col-5 form-control" id="inputStartDate" type="date" data-date=""  data-date-format="DD-YY-MM" name="startdate"
                      placeholder="start date" required>
                </div>
                
                <!-- profile -->
                <div class="form-group">
                    <input type="file" class="form-control" placeholder="Enter profile"  name="profile">
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
	<div class="modal fade" id="updatePizza">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Empoyee</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
            <form  action="/" method="post">
            <!--  -->
            <div class="form-group">
                   <input type="text" class="form-control" placeholder="First name">
                </div>
                
				<div class="form-group">
                   <input type="text" class="form-control" placeholder="Last name">
                </div>
                
				<div class="form-group">
                    <select class="form-control" placeholder="Department">
                        <option>IT Admin</option>
                        <option>WEP Coordinator</option>
                        <option>WEP Trainer</option>
                    </select>
                </div>

				<div class="form-group">
                    <select class="form-control" placeholder="Department">
                        <option>Education</option>
                        <option>Training</option>
                    </select>
                </div>
                
				<div class="form-group">
                      <input class="col-5" type="date" data-date=""  data-date-format="DD-YY-MM" name="startdate"  class="form-control"
                      placeholder="start date" required>
                </div>
                
                <!-- profile -->
                <div class="form-group">
                    <!-- <label for="profile">Profile:</label> -->
                    <input type="file" class="form-control" placeholder="Enter profile"  name="profile">
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



  <!-- po -->
<?= $this->endSection() ?>

