<nav class="navbar navbar-expand-md bg-dark text-white navbar-dark">
    <a href="your_leave" class="image" id="logo"><img class="navbar-brand" src="images/lms_app.png" alt="logo"
            width="40">Leave Management System</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon">
            <img class="rounded mx-auto d-block" src="images/lms_app.png" alt="" width=150px height=150px>
        </span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="nav navbar-nav ml-auto">
            <a class="nav-link " href="your_leave">Your leaves</a>
            <a class="nav-link " href="leave">Leaves</a>
            <a class="nav-link " href="employee">Employees</a>
            <a class="nav-link " href="position">Positions</a>
            <a class="nav-link " href="department">Departments</a>
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
<div class="bs-example">
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

                        <div class="col-6">
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
                        </div>
                        <div class="col-5 ">
                            <p>Ronan</p>
                            <p>OGOR</p>
                            <p>Training and education</p>
                            <p>WEP Coordinator</p>
                            <p>25/11/2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>