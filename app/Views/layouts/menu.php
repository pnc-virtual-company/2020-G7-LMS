<nav class="navbar navbar-expand-md bg-dark text-white navbar-dark">
    <a href="<?= base_url('your_leave')?>" class="image" id="logo"><img class="navbar-brand" src="images/lms_app.png"
            alt="logo" width="40">Leave Management System</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon">
        </span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="nav navbar-nav ml-auto">
            <a class="nav-link " href="<?= base_url("your_leave")?>">Your leaves</a>
            <?php if(session('role') == 'Admin' || session('role') == 'HR' || session('role') == 'Manager'): ?>
            <a class="nav-link " href="<?= base_url("leave")?>">Leaves</a>
            <?php endif ?>
            <?php if(session('role') == 'Admin' || session('role') == 'HR'): ?>
            <a class="nav-link " href="<?= base_url("employee")?>">Employees</a>
            <a class="nav-link " href="<?= base_url("position")?>">Positions</a>
            <a class="nav-link " href="<?= base_url("department")?>">Departments</a>
            <?php endif ?>
            <li class="dropdown ">
                <a href="#" class="dropdown-toggle text-uppercase text-white nav-link " data-toggle="dropdown"
                    role="button" aria-haspopup="true" aria-expanded="false">
                    <?php $username = strstr(session()->get('email'),'@',true) ?>
                    <?= $username ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#myModal" role="button" data-toggle="modal">Profile</a>
                    <a class="dropdown-item" href="logout">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- Modal HTML -->
<div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>My information</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-3">
                        <strong>
                            <p>Frist name</p>
                        </strong>
                        <strong>
                            <p>Last name</p>
                        </strong>
                        <strong>
                            <p>Departament</p>
                        </strong>
                        <strong>
                            <p>Position</p>
                        </strong>
                        <strong>
                            <p>Start date</p>
                        </strong>
                        <strong>Manager</strong>
                    </div>
                    <div class="col-5">
                        <?php foreach ($userProfile as $profile): ?>
                        <p><?= session()->get('firstname')?></p>
                        <p><?= session()->get('lastname')?></p>
                        <p><?= $profile['de_name']; ?></p>
                        <p><?= $profile['po_name']; ?></p>
                        <p><?= session()->get('start_date')?></p>
                        <p><?= $profile['manager']?></p>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <img src="images/<?= $profile['profile'];?>" class="card-img-top mb-2"
                                style="width: 90px;height:90px" class="mx-auto d-block" id="image" />
                        </div>
                        <div class="form-group">

                            <div class="image-upload text-center">
                                <label for="file-input-create">
                                    <i class="material-icons m-2 text-primary" style="cursor:pointer;">edit</i>
                                </label>
                                <input id="file-input-create" type="file" name="file_image" style="display:none"
                                    autocomplete="picture">
                                <a href=""><i class="material-icons m-2 text-danger" id="removePicture"
                                        style="cursor:pointer;">delete</i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>