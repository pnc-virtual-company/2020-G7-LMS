<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">
    <!-- button search -->
    <div class="search">
        <div class="input-group mb-3">
            <input type="text" id="search" class="form-control" placeholder="Search">
            <div class="input-group-append"></div>
        </div><br>
    </div>
    <!-- button create Employee -->
    <div class="text-right">
         <a href="" class="btn btn-primary btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createEmployee" style="margin-right:65px;">
			<i class="material-icons float-left" data-toggle="tooltip" title="Add Employee!" data-placement="left">add</i>&nbsp;Create
		</a>
    </div>
    <!-- Text on Employee -->
     <h4 class="font-weight-bold ml-2">List  Employee</h4><br>
     <!-- table Employee -->
		<table class="table table-borderless table-hover ">
			<tr>
                <th class= "hide">ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Department</th> 
                <th>Position</th>
                <th>Start date</th>
            </tr>
			<?php foreach ($userData as $user): ?>
                <tr>
                    <td class = "hide"><?= $user['id']?></td>
                    <td><?= $user['firstname']?></td>
                    <td><?= $user['lastname']?></td>
                    <td><?= $user['email']?></td>
                    <td><?= $user['de_name']?></td>
                    <td><?= $user['po_name'] ?></td>
                    <td><?= $user['start_date']?></td>
                <td >
                    <!-- Icon delete and edit -->
                    <div class='edit_hover_class row'>
                        <a href="" data-toggle="modal" data-target="#updateEmployee" class="icon-edit"><i class="material-icons text-info btn_update" data-toggle="tooltip" title="Edit Employee!" data-placement="left" style="margin-right: 12px;">edit</i></a>
                        <a href="" data-toggle="modal" data-target="#deleteEmployee" data-toggle="tooltip" title="Delete Employee!" data-placement="right" class="delete"><i class="material-icons text-danger">delete</i></a>
                    </div>
                </td>
            </tr>
          <!-- The Modal delete -->
            <div class="modal fade" id="deleteEmployee" tabindex="-1" role="dialog">
                <div class="modal-dialog mt-3">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <h4 class="modal-title mt-3" style="margin-left:30px;"><b>Remove Items ?</b></h4>
                    <!-- Modal body -->
                    <form action="employee/delete/<?= $user['id']?>" method="post">
                    <div class="modal-body mt-3">
                        <p style="margin-left:50px;">Are you sure you want to remove the selected department?</p>
                        <a data-dismiss="modal" class="closeModal" style="margin-left:53.8%;">DON'T REMOVE</a>
                        &nbsp;
                        <input type="submit" value="REMOVE" id="btnDelteYes" class="btn text-warning">
                    </div>
                    </form>
                </div>
                <div class="col-3"></div>
                </div>
         </div>
          <?php endforeach; ?>
        </tbody>
      </table>
      
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
                <form action="employee/add" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- input First name -->
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <input type="text" class="form-control" placeholder="First name" name="firstname">
                            </div>
                            <!-- input Last name -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last name" name="lastname">
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <!-- input Email -->
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <input type="Email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <!-- input password -->
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" >
                            </div>

                        </div>
                    </div>
                    <!-- input Department -->
                    <div class="form-group">
                        <select class="form-control" name="department">
                            <option  value = "" selected disabled>Department</option>
                            <?php foreach ($departmentData as $department ): ?>
                                <option value="<?= $department['de_id']?>"> <?= $department['de_name'] ?></option>
                            <?php endforeach;?>  
                        </select>
                    </div>
                    <!-- Position -->
                    <div class="form-group">
                        <select class="form-control" name="position">
                            <option  value = "" selected disabled>Position</option>
                            <?php foreach ($positionData as $position ): ?>
                                <option value="<?= $department['de_id']?>"><?= $position['po_name'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="role">
                            <option selected>Role</option>
                            <option>Manager</option>
                            <option>Employee</option>
                            <option>HR</option>
                            <option>Admin</option>
                        </select>
                    </div>
                    <!-- input first startdate -->
                    <div class="form-group">
                        <input class="form-control datetimepicker" type="date" id = "startdate" data-date-format="DD-YY-MM"
                        name="startdate" class="form-control" placeholder="start date" required>
                    </div>

                    <!-- profile -->
                    <div class="form-group">
                        <input type="file" class="form-control-file border" name = "profile">
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
                <div class="row">
                    <div class="col-sm-6">
                            <!-- input First name -->
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                            <!-- input Last name -->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>

                    </div>

                    <div class="col-sm-6">
                            <!-- input Email -->
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <input type="Email" class="form-control" placeholder="Email">
                        </div>
                            <!-- input password -->
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                    </div>
                </div> 

                    <!-- input role -->
                        <div class="form-group">
                            <select class="form-control" placeholder="Department">
                                <option selected>Role</option>
                                <option>Employees</option>
                                <option>HR Officer</option>
                                <option>Admin</option>
                                <option>Manager</option>
                            </select>
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
                        <input type="file" class="form-control-file border">
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

