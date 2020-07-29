<!-- ========================================START Model UPDATE================================================ -->
<!-- The Modal -->
<div class="modal fade" id="updatePosition">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Position</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-right">
        <form action="<?= base_url('position/update') ?>" method="post">
          <input type="hidden" name="p_id" id="p_id">
          <div class="form-group">
            <input type="text" class="form-control" value="Edit Position" id="position" name="po_name">
          </div>
          <a data-dismiss="modal" class="closeModal">DISCARD</a>
          &nbsp;
          <input type="submit" value="UPDATE" class="createBtn text-warning">
      </div>
      </form>
    </div>
  </div>
</div>
</div>
  <!-- =================================END MODEL UPDATE==================================================== -->