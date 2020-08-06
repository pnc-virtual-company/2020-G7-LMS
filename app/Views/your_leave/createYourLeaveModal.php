<!-- ========================================START Model CREATE================================================ -->
<!-- The Modal -->
</script>
<div class="modal fade" id="createRequest">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create a Request</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-right">
        <form action="<?= base_url("your_leave/add")?>" method="post">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                <label class="control-label float-left" for="datepicker-start">Start Date:</label>
                <input type="date" id="start_date" name="start_date"  etw-date="" data-date-format=" DD-YY-MM" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label float-left" for="datepicker-start">Time start:</label>
                <select class="form-control"  name = "time_start" id="time_start" onchange="CalculateStartAndEndDate()">
                  <option value="1">Morning</option>
                  <option value="2">Afternoon</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                <label class="control-label float-left" for="datepicker-start">Start Date:</label>
                <input type="date" id="end_date" name="end_date"etw-date="" data-date-format=" DD-YY-MM" class="form-control" onchange="CalculateStartAndEndDate()" >
                <span id="end_error" class="text-danger"style="font-size: 12px;"></span>
              </div>
              
              <div class="form-group" >
                <label class="control-label float-left" for="datepicker-start">Time End:</label>
                <select class="form-control" name = "time_end" id="time_end" onchange="CalculateStartAndEndDate()">
                  <option value="1">Morning</option>
                  <option value="2">Afternoon</option>
                </select>`
              </div>
            </div>
          </div>
          <!-- input duration -->
            <div class="form-group">
                <label class="form">Duration:</label>
                <input type="text" class="textbox" id="duration" name="duration" style="border:0 none;margin-left:210px;outline:none;" onchange="CalculateStartAndEndDate()">
                <span id="message_error" class="text-danger" ></span>
             </div>
          <!-- select leave type -->
          <div class="form-group">
            <select class="form-control" id="leave_type" name = "leave_type">
              <option disabled>select leave type...</option>
              <option >Paid leave</option>
              <option>Sick leave</option>
              <option>Un paid leave</option>
              <option>Wedding leave</option>
              <option>Maternity leave</option>
            </select>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="comment" name = "comment" rows="3" placeholder="Comment"></textarea>
          </div>
          <a data-dismiss="modal" class="btn closeModal">DISCARD</a>
          &nbsp;
          <button type="submit" value="SUBMIT" class="btn text-warning">SUBMIT</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- =================================END MODEL CREATE==================================================== -->

