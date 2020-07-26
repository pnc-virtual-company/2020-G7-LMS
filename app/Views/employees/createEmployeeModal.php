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
                                <input type="text" class="form-control" placeholder="First name" name="firstname" id="inputfirstname">
                            </div>
                            <!-- input Last name -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last name" name="lastname" id="inputlasttname">
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <!-- input Email -->
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <input type="Email" class="form-control" placeholder="Email" name="email" id="inputemail">
                            </div>
                            <!-- input password -->
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" id="inputdepartment" >
                            </div>

                        </div>
                    </div>
                    <!-- input Department -->
                    <div class="form-group">
						<select class="form-control" name="department">
							<option value="" selected disabled>Department...</option>
								<?php foreach($departmentData as $department): ?>
									<option value="<?= $department['de_id'] ?>"><?= $department['de_name'] ?></option>
							    <?php endforeach ?>
						</select>
					</div>
                    <!-- Position -->
                    <div class="form-group">
						<select class="form-control" name="position">
							<option value="" selected disabled>Position...</option>
								<?php foreach($positionData as $position): ?>
									<option value="<?= $position['po_id'] ?>"><?= $position['po_name'] ?></option>
								<?php endforeach ?>
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
                        name="startdate" class="form-control" placeholder="start date">
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
 