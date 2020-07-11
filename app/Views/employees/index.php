<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">

    
    <!-- button search -->

    <div class="col-11">
        <div class="input-group mb-3">
            <input type="text" id="search" class="form-control" placeholder="Search">
            <div class="input-group-append"></div>
        </div><br>
    </div>

    <div class="col"></div>
    <!-- button create Employee -->
    <div class="text-right">
         <a href="" class="btn btn-primary btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createEmployee" style="margin-right:105px;">
			<i class="material-icons float-left" data-toggle="tooltip" title="Add Employee!" data-placement="left">add</i>&nbsp;Create
		</a>
    </div>
    <!-- Text on Employee -->
     <h4 class="font-weight-bold ml-2">List  Employee</h4><br>
     <!-- table Employee -->
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
                <!-- Icon delete and edit -->
				<td>
					<a href="" data-toggle="modal" data-target="#updateEmployee"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Employee!" data-placement="left">edit</i></a>
					<a href="" data-toggle="tooltip" title="Delete Employee!" data-placement="right" class="delete" onclick="return confirm('Are you sure you want to delete this Empoyee?');"><i class="material-icons text-danger" style="margin-left:-6px;">delete</i></a>
				</td>
            </tr>
                    
			<tr>
                <td>jack</td>
                <td>Thomas</td>
                <td>Training/Education</td>
                <td>IT Admin</td>
                <td>25/05/2005</td>
				<td>
                    <a href="" data-toggle="modal" data-target="#updateEmployee"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Employee!" data-placement="left">edit</i></a>
					<a href="" data-toggle="tooltip" title="Delete Employee!" data-placement="right" class="delete" onclick="return confirm('Are you sure you want to delete this Empoyee?');"><i class="material-icons text-danger" style="margin-left:-6px;">delete</i></a>
				</td>
            </tr>
                    
			<tr>
                <td>jack</td>
                <td>Thomas</td>
                <td>Training/Education</td>
                <td>IT Admin</td>
                <td>25/05/2005</td>
				<td>
                    <a href="" data-toggle="modal" data-target="#updateEmployee"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Employee!" data-placement="left">edit</i></a>
					<a href="" data-toggle="tooltip" title="Delete Employee!" data-placement="right" class="delete" onclick="return confirm('Are you sure you want to delete this Empoyee?');"><i class="material-icons text-danger" style="margin-left:-6px;">delete</i></a>
				</td>
			</tr>
					
		</table>
			<div class="col-2"></div>
</div>

<!-- ========================================START Model CREATE================================================ -->
	<!-- The Modal -->
<div class="modal fade" id="createEmployee">
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
                            <option selected>Department</option>
                            <option>Training/Education</option>
                            <option>Exteral relation team</option>
                            <option>Admin and finance team</option>
                            <option>Selection team</option>
                        </select>
                    </div>
                    <!-- Position -->
			    	<div class="form-group">
                        <select class="form-control" placeholder="Position">
                            <option selected>Position</option>
                            <option>IT Admin</option>
                            <option>WEP Coordinator</option>
                        </select>
                    </div>

                    <!-- input first startdate -->
                    <div class="form-group">
                        <input class="form-control" type="date" data-date=""  data-date-format="DD-YY-MM"
                        name="startdate"  class="form-control" placeholder="start date" required>
                    </div>
                
                    <!-- profile -->
                    <div class="form-group">
                        <input type="file" class="form-control" placeholder="Enter profile"  name="profile">
                    </div>

                    <a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <!-- input submit -->
                     <input type="submit" value="CREATE" class="btn text-primary">
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- =================================END MODEL CREATE==================================================== -->

  <!-- ========================================START Model UPDATE================================================ -->
	<!-- The Modal -->
<div class="modal fade" id="updateEmployee">
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
                    <!-- input First name -->
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                        <!-- input Last name -->
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last name">
                    </div>
                    <!-- Department -->
                    <div class="form-group">
                        <select class="form-control" placeholder="Department">
                            <option selected>Department</option>
                            <option>Training/Education</option>
                            <option>Exteral relation team</option>
                            <option>Admin and finance team</option>
                            <option>Selection team</option>
                        </select>
                    </div>
                    <!-- Position -->
                    <div class="form-group">
                        <select class="form-control" placeholder="Position">
                            <option selected>Position</option>
                            <option>IT Admin</option>
                            <option>WEP Coordinator</option>
                        </select>
                    </div>
                    
                    <!-- input first startdate -->
                    <div class="form-group">
                        <input class="form-control" type="date" data-date=""  data-date-format="DD-YY-MM"
                        name="startdate"  class="form-control" placeholder="start date" required>
                    </div>
                    
                    <!-- profile -->
                    <div class="form-group">
                        <input type="file" class="form-control" placeholder="Enter profile"  name="profile">
                    </div>

                    <a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <input type="submit" value="UPDATE" class="btn text-info">
                 
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- =================================END MODEL UPDATE==================================================== -->
<?= $this->endSection() ?>

