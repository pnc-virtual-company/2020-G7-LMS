<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="/action_page.php">
                        <h1 class = "text-center">Login Account</h1>
                        <div class="form-group x">
                            <input type="email" class="form-control" placeholder="Enter email" id="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Next</button>
                    </form>
                </div>
            </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
<?= $this->endSection() ?>