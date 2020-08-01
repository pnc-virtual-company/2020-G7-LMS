<!-- ========================================START Model UPDATE================================================ -->
<!-- The Modal -->
<div class="modal fade" id="updateRequest">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Leave Request </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-right">
        <form action="/" method="post">
          <!--  -->
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                <label class="control-label float-left" for="datepicker-start">Start Date:</label>
                <input type="date" data-date="" data-date-format=" DD-YY-MM" class="form-control" id="datepicker-start">
              </div>
              <div class="form-group">
                <select class="form-control">
                  <option class="0">select exactime</option>
                  <option value="1">Morning</option>
                  <option value="2">Afternoon</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                <label class="control-label float-left" for="datepicker-end">End Date:</label>
                <input type="date" data-date="" data-date-format=" DD-YY-MM" class="form-control" id="datepicker-end">
              </div>
              <div class="form-group">
                <select class="form-control">
                  <option class="0">select exactime</option>
                  <option value="1">Morning</option>
                  <option value="2">Afternoon</option>
                </select>
              </div>
            </div>
          </div>
          <!-- input duration -->
          <div class="form-group">
            <label for="" class="float-left"><b>Duration:</b></label>
          </div>
          <!-- select leave type -->
          <div class="form-group">
            <select class="form-control">
              <option class="0">select leave type...</option>
              <option value="1">Paid leave</option>
              <option value="2">Sick leave</option>
              <option value="3">Un paid leave</option>
              <option value="4">Wedding leave</option>
              <option value="5">Maternity leave</option>
            </select>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea3" rows="3" placeholder="Comment">good morning sir !</textarea>
          </div>
          <a data-dismiss="modal" class="btn closeModal">DISCARD</a>
          &nbsp;
          <input type="submit" value="UPDATE" class="btn text-warning">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- =================================END MODEL UPDATE==================================================== -->