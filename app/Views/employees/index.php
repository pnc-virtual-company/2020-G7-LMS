<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>

<div class="row mt-5">
    <div class="col-sm-12 col-md-12">
        <!-- button search -->
        <div class="container">
            <div class="search">
                <div class="input-group mb-3">
                <input type="text" class="form-control" id="search" onkeyup="myFunction()" placeholder="Search">
        </div><br>
    </div>
        <div class="col-sm-12 col-md-11">
              <!-- alert message success if user correctly information-->
              <?php if(session()->get('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" >
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= session()->get('success') ?>
                </div>
            <?php endif ?>
            <!-- alert message success if user incorrect information-->
            <?php if(session()->get('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Error Message!:   </strong><?= session()->get('error')->listErrors() ?>
                    </div>
            <?php endif ?>
        </div>
            <!-- button create Employee -->
            <div class="text-right">
                <a href="" class="btn btn-primary btn-sm text-white font-weight-bolder" data-toggle="modal"
                    data-target="#createEmployee" style="margin-right:65px;">
                    <i class="material-icons float-left" data-toggle="tooltip" title="Add Employee!"
                        data-placement="left">add</i>&nbsp;Create
                </a>
            </div>
            <!-- Text on Employee -->
            <h4 class="font-weight-bold ml-2">List Employee</h4><br>

            <!-- table Employee -->
            <table class="table table-borderless table-hover " id="myTable">
                <tr>
                    <th class="hide">ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th class="hide">Email</th>
                    <th class="hide">Password</th>
                    <th class="hide">Role</th>
                    <th class="hide">Profile</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Manager</th>
                    <th>Start date</th>
                </tr>
                <?php foreach ($userData as $user): ?>
                <tr class='edit_hover_class'>
                    <td class="hide"><?= $user['id']?></td>
                    <td><?= $user['firstname']?></td>
                    <td><?= $user['lastname']?></td>
                    <td class = "hide"><?= $user['email']?></td>
                    <td class = "hide"><?= $user['password']?></td>
                    <td class = "hide"><?= $user['role']?></td>
                    <td class = "hide"><?= $user['profile']?></td>
                    <td><?= $user['de_name']?></td>
                    <td><?= $user['po_name'] ?></td>
                    <td><?= $user['manager'] ?></td>
                    <td><?= $user['start_date']?></td>
                    <td >  
                        <button type="button" class="not-btn edit-btn-employee"><i class="material-icons text-info">edit</i></button>
                        <a href="employee/delete/<?= $user['id']?>" data-toggle="modal" data-target="#deleteEmployee<?= $user['id']?>" data-toggle="tooltip" title="Delete Employee!" data-placement="right" class="delete"><i class="material-icons text-danger">delete</i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<!-- The Modal delete -->
<?php foreach ($userData as $user): ?>
<div class="modal fade"  id="deleteEmployee<?= $user['id']?>" tabindex="-1" role="dialog">
    <div class="modal-dialog mt-3">
        <div class="modal-content">
            <!-- Modal Header -->
            <h4 class="modal-title mt-3" style="margin-left:30px;"><b>Remove Items ?</b></h4>
            <!-- Modal body -->
            <form action="<?= base_url('employee/delete/'.$user['id'])?>" method="post">
                <div class="modal-body mt-3">
                    <p style="margin-left:50px;">Are you sure you want to remove the selected employee?</p>
                    <a data-dismiss="modal" class="closeModal" style="margin-left:53.8%;">DON'T REMOVE</a>
                        &nbsp;
                    <input type="submit" value="REMOVE" id="btnDelteYes" class="btn text-warning">
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
 <?= $this->include('employees/createEmployeeModal') ?>
 <?= $this->include('employees/editEmployeeModal') ?>
 
 <?= $this->endSection() ?>

