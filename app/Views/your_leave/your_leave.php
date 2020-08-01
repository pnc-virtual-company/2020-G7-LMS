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
    <?php foreach($yourLeaveData as $yourLeave): ?>
          <tr>
            <td><?= $yourLeave['start_date']?></td>
            <td><?= $yourLeave['end_date']?></td>
            <td><?= $yourLeave['duration']?></td>
            <td><?= $yourLeave['leave_type']?></td>
            <td><span class="badge badge-info">Requested</span></td>
            <td>
              <a href="" data-toggle="modal" data-target="#updateRequest"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
              <a href="" data-toggle="tooltip" class="delete" data-placement="right" onclick="return confirm('Are you sure you want to delete this your request?');"><i class="material-icons text-danger">delete</i></a>
            </td>
          </tr>
    <?php endforeach?>
  
  </table>
  </form>
</div>
<?= $this->include('your_leave/createYourLeaveModal') ?>
 <?= $this->include('your_leave/editYourLeaveModal') ?>
<?= $this->endSection() ?>