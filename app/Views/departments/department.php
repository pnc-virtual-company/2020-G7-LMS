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
                      </tr>
                      <tr>
                        <td>Training and education team</td>
                      </tr>
                      <tr>
                        <td>External relation team</td>
                        <td>
                          <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Department!"  data-placement="left">edit</i></a>

                          <a href="" data-toggle="tooltip" title="Delete Department!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Admin and finance team</td>
                      </tr>
                      <tr>
                        <td>Selection team</td>
                      </tr>
				            </table>
                  </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

<?= $this->endSection() ?>