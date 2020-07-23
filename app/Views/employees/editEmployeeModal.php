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
                <form  action="/" method="post">
                <div class="row">
                    <div class="col-sm-6">
                            <!-- input First name -->
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                            <!-- input Last name -->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>

                    </div>

                    <div class="col-sm-6">
                            <!-- input Email -->
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <input type="Email" class="form-control" placeholder="Email">
                        </div>
                            <!-- input password -->
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                    </div>
                </div> 

                    <!-- input role -->
                        <div class="form-group">
                            <select class="form-control" placeholder="Department">
                                <option selected>Role</option>
                                <option>Employees</option>
                                <option>HR Officer</option>
                                <option>Admin</option>
                                <option>Manager</option>
                            </select>
                        </div>
                        
                    <!-- Department -->
                    <div class="form-group">
                        <select class="form-control" placeholder="Department">
                            <option selected>Department</option>
                            <option>Training/Education</option>
                            <option>Exteral relation team</option>
                            <option>Admin and finance team</option>
                            <option>Selection team</option>
                        </select>
                    </div>

                    <!-- Position -->
                    <div class="form-group">
                        <select class="form-control" placeholder="Position">
                            <option selected>Position</option>
                            <option>IT Admin</option>
                            <option>WEP Coordinator</option>
                        </select>
                    </div>
                    
                    <!-- input first startdate -->
                    <div class="form-group">
                        <input class="form-control" type="date" data-date=""  data-date-format="DD-YY-MM"
                        name="startdate"  class="form-control" placeholder="start date" required>
                    </div>
                    
                    <!-- profile -->
                    <div class="form-group">
                        <input type="file" class="form-control-file border">
                    </div>

                    <a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <input type="submit" value="UPDATE" class="btn text-info">
                 
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- =================================END MODEL UPDATE==================================================== -->