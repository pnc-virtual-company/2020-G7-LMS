<!-- ===========================================START MODEL CREATE ================================== -->
<!-- The Modal -->
<div class="modal fade" id="createDepartment">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Create Department</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-right">
                <form action="<?= base_url('department/create') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Department name" name="department"
                            >
                    </div>
                    <a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <input type="submit" value="CREATE" class="createBtn text-warning">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- =================================END MODEL CREATE==================================================== -->