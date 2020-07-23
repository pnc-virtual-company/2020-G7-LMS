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
                        <a href="employee/delete/<?= $user['id']?>" data-toggle="modal" data-target="#deleteEmployee<?= $user['id']?>" data-toggle="tooltip" title="Delete Employee!" data-placement="right" class="delete"><i class="material-icons text-danger">delete</i></a>
                    </div>
                </td>
            </tr>
          <!-- The Modal delete -->
            <div class="modal fade"  id="deleteEmployee<?= $user['id']?>" tabindex="-1" role="dialog">
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
      


 <?= $this->include('employees/createEmployeeModal') ?>
 <?= $this->include('employees/editEmployeeModal') ?>
<?= $this->endSection() ?>

