<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
	<div class="row justify-content-center align-items-center text-center p-2">
		<div class="m-1 col-sm-8 col-md-6 col-lg-4 shadow-sm  bg-white border rounded">
			<div class=" pb-5">
				<img class="rounded mx-auto d-block" src="images/logins.png" alt="" width=150px height=150px>
				<p class="text-center text-uppercase mt-3">Login account</p>
				<form class="form text-center" action="#" method="POST">
					<div class="form-group input-group-md">
						<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
						<!--<div class="invalid-feedback">
							 Errors in email during form validation, also add .is-invalid class to the input fields
						</div> -->
					</div>
					<div class="form-group input-group-md">
						<input type="password" class="form-control" id="password" placeholder="Password">
						<!--<div class="invalid-feedback">
							 Errors in password during form validation, also add .is-invalid class to the input fields
						</div> -->
					</div>
					<button class="btn btn-lg btn-block btn-primary mt-4" type="submit">
                        Login 
                    </button>
				</form>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>