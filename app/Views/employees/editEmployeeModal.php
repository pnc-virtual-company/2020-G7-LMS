<!-- ========================================START Model UPDATE================================================ -->
    	<!-- The Modal -->
        <div class="modal fade" id="updateEmployee">
    <div class="modal-dialog">
        <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Empoyee</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        
             <!-- Modal body -->
            <div class="modal-body text-right">
                <form  action="<?= base_url("employee/update")?>" method="post">
                <div class="row">
                    <div class="col-sm-6">
                            <!-- input First name -->
                        <input type="hidden" name="user_id" id="update_id">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <input type="text" class="form-control" name = "firstname" id = "firstname">
                        </div>
                            <!-- input Last name -->
                        <div class="form-group">
                            <input type="text" class="form-control" name = "lastname" id = "lastname">
                        </div>

                    </div>

                    <div class="col-sm-6">
                            <!-- input Email -->
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <input type="Email" class="form-control"name = "email" id = "email">
                        </div>
                            <!-- input password -->
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password"name = "password" id = "password">
                        </div>

                    </div>
                </div> 
                        
                    <!-- Department -->
                    <div class=" form-group">
                            <select class="form-control" name="department" id="department_id">

                                <?php foreach ($departmentData as $department ): ?>
                                <option value="<?= $department['de_id']?>"><?= $department['de_name'] ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>

                    <!-- Position -->
                    <div class="form-group">
                            <select class="form-control" name="position" id="position_id">

                                <?php foreach ($positionData as $position ): ?>
                                <option value="<?= $position['po_id']?>"><?= $position['po_name'] ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                     <!-- input role -->
                     <div class="form-group">
                            <select class="form-control"  name = "role">
                                <option>Employees</option>
                                <option>HR Officer</option>
                                <option>Admin</option>
                                <option>Manager</option>
                            </select>
                        </div>
                    <!-- input first startdate -->
                    <div class="form-group">
                            <input class="form-control datetimepicker"  name="startdate" type="date" value="<?= date('Y-m-d');?>"
                                id="startdate" data-date-format="DD-YY-MM" class="form-control">
                        </div>
                    <a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <input type="submit" value="UPDATE" class="btn text-info">
                    <input type="file" class = "hide"id = "profile" name = "profile">
                                    
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- =================================END MODEL UPDATE==================================================== -->