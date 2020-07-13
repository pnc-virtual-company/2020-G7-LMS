<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container">
<div class="col-11 mt-5">
        <div class="input-group mb-3">
            <input type="text" id="search" class="form-control inputSearch" placeholder="Search">
            <div class="input-group-append"></div>
        </div><br>
    </div>
    </div>
      <div class="text-right">
          <a href="" class="btn btn-primary btn-sm text-white font-weight-bolder"  data-toggle="modal" data-target="#createRequest" style="margin-right:15%;">
            <i class="material-icons float-left" data-toggle="tooltip" title="Add Employee!" data-placement="left">add</i>&nbsp;Request a Leave
         </a>
      </div>
  <div class="container">
  <h3 class="ml-2"><b>Your Leave Requests</b></h3>
  <table id="request" class="table table-borderless" style="width:100%">
    <thead>
      <tr>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Duration</th>
        <th>Type</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <td>10/06/2005 </td>
      <td>15/06/2005</td>
      <td>1 day</td>
      <td>Vacation</td>
      <td><span class="badge badge-info">Requested</span></td>
      <td>
        <a href="" data-toggle="modal" data-target="#updateRequest"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
        <a href="" data-toggle="tooltip" class="delete" data-placement="right" onclick="return confirm('Are you sure you want to delete this your request?');"><i class="material-icons text-danger">delete</i></a>
      </td>
    </tbody>
    <tbody>
      <td>10/06/2005 </td>
      <td>15/06/2005</td>
      <td>0.5 day</td>
      <td>Training</td>
      <td><span class="badge badge-danger">Cancelled</span></td>
      <td>
        <a href="" data-toggle="modal" data-target="#updateRequest"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
        <a href="" data-toggle="tooltip" class="delete" data-placement="right" onclick="return confirm('Are you sure you want to delete this your request?');"><i class="material-icons text-danger">delete</i></a>
      </td>
    </tbody>
    <tbody>
      <td>10/06/2005 </td>
      <td>15/06/2005</td>
      <td>2 days</td>
      <td>Vacation</td>
      <td><span class="badge badge-danger">Rejected</span></td>
      <td>
        <a href="" data-toggle="modal" data-target="#updateRequest"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
        <a href="" data-toggle="tooltip" class="delete" data-placement="right" onclick="return confirm('Are you sure you want to delete this your request?');"><i class="material-icons text-danger">delete</i></a>
      </td>
    </tbody>
    <tbody>
      <td>10/06/2005 </td>
      <td>15/06/2005</td>
      <td>1 day</td>
      <td>Vacation</td>
      <td><span class="badge badge-success">Accepted</span></td>
      <td>
        <a href="" data-toggle="modal" data-target="#updateRequest"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
        <a href="" data-toggle="tooltip" class="delete" data-placement="right" onclick="return confirm('Are you sure you want to delete this your request?');"><i class="material-icons text-danger">delete</i></a>
      </td>
    </tbody>
  </table>
  </form>
</div>
<!-- ========================================START Model CREATE================================================ -->
<!-- The Modal -->
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
        <form action="/" method="post">
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
          <input type="submit" value="SUBMIT" class="btn text-warning">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- =================================END MODEL CREATE==================================================== -->
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
<?= $this->endSection() ?>