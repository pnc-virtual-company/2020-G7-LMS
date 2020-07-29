<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <div class="input-group mb-3">
        <input type="text" class="form-control" id="search" onkeyup="myFunction()" placeholder="Search">
        </div>
            <br>

                <!-- alert message success if user correctly information-->
                <?php if(session()->get('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" >
                        <button onclick="myFunctions()" type="button" class="close" data-dismiss="alert">&times;</button>
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

            <div class="text-right">
                <a href="" class="btn btn-primary btn-sm text-white font-weight-bolder" data-toggle="modal"
                    data-target="#createPosition">
                    <i class="material-icons float-left" data-toggle="tooltip" title="Create Position!"
                        data-placement="left">add</i>&nbsp;Create
                </a>
            </div>
            <br>
            <table class="table table-hover " id="myTable">
                <thead class="bg-info text-white">
                    <tr>
                        <th>Positions</th>
                        <th class="hide">ID</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($positionData as $position): ?>
                    <tr class = "edit_hover_class">
                        <td><i class="material-icons float-left">people</i> &nbsp;&nbsp; <?= $position['po_name'] ?>
                        <td class="hide"><?= $position['po_id'] ?></td>
                        </td>
                        <td class="text-right">
                            <button type="button" class="not-btn edit-btn-position"><i
                                    class="material-icons text-info">edit</i></button>
                            <a href="position/remove/<?= $position['po_id']?>" data-toggle="modal"
                                data-target="#deletePosition<?= $position['po_id']?>" data-toggle="tooltip"
                                title="remove Employee!" data-placement="right" class="delete"><i
                                    class="material-icons text-danger">delete</i></a>
                        
                    </div>
                </td>
            </tr>
        <!-- The Modal delete -->
        <div class="modal fade" id="deletePosition<?= $position['po_id']?>" tabindex="-1" role="dialog">
            <div class="modal-dialog mt-3">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <h4 class="modal-title mt-3" style="margin-left:30px;"><b>Remove Items ?</b></h4>
                    <!-- Modal body -->
                    <form action="position/remove/<?= $position['po_id']?>" method="post">
                        <div class="modal-body mt-3">
                            <p style="margin-left:50px;">Are you sure you want to remove the selected
                                positions?</p>
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

<?= $this->include('positions/createPositionModal') ?>
<?= $this->include('positions/editPositionModal') ?>

<?= $this->endSection() ?>