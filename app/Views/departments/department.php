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
                <a href="" class="btn btn-primary btn-sm text-white font-weight-bolder" data-toggle="modal"
                    data-target="#createDepartment">
                    <i class="material-icons float-left" data-toggle="tooltip" title="Create Department!"
                        data-placement="left">add</i>&nbsp;Create
                </a>
                </a>
            </div>
            <br>
            <table class="table table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="hide">ID</th>
                        <th>Positions</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($departmentData as $department): ?>
                    <tr>
                        <td class="hide"><?= $department['de_id'] ?></td>
                        <td><i class="material-icons float-left">people</i> &nbsp;&nbsp; <?= $department['de_name'] ?>
                        </td>
                        <td class="text-right">
                            <div class='edit_hover_class row'>
                                <button type="button" class="not-btn edit-btn-department"><i
                                        class="material-icons text-info">edit</i></button>
                                <a href="department/remove/<?= $department['de_id']?>" data-toggle="modal"
                                    data-target="#deleteDepartment<?= $department['de_id']?>" data-toggle="tooltip"
                                    title="remove department!" data-placement="right" class="delete"><i
                                        class="material-icons text-danger">delete</i></a>
                            </div>
        </div>
        </td>
        </tr>
        <!-- The Modal delete -->
        <div class="modal fade" id="deleteDepartment<?= $department['de_id']?>" tabindex="-1" role="dialog">
            <div class="modal-dialog mt-3">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <h4 class="modal-title mt-3" style="margin-left:30px;"><b>Remove Items ?</b></h4>
                    <!-- Modal body -->
                    <form action="department/remove/<?= $department['de_id']?>" method="post">
                        <div class="modal-body mt-3">
                            <p style="margin-left:50px;">Are you sure you want to remove the selected
                            departments?</p>
                            <a data-dismiss="modal" class="closeModal" style="margin-left:53.8%;">DON'T
                                REMOVE</a>
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
    </div>
    <div class="col-3"></div>
</div>
</div>

<?= $this->include('departments/createDepartmentModal') ?>
<?= $this->include('departments/editDepartmentModal') ?>

<?= $this->endSection() ?>