<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container">
  <div class=" mt-5">
        <div class="input-group mb-3">
            <input type="text" id="search" class="form-control inputSearch" placeholder="Search">
            <div class="input-group-append"></div>
        </div><br>
    </div>
    <div class="text-right">
          <a href="" class="btn btn-primary btn-sm text-white font-weight-bolder"  data-toggle="modal" data-target="#createRequest" style="margin-left:20%;">
            <i class="material-icons float-left" data-toggle="tooltip" title="Add Employee!" data-placement="left">add</i>&nbsp;Request a Leave
         </a>
      </div>
  <div class="container">
  <h3 class="ml-2"><b>Your Leave Requests</b></h3>
  <table id="request" class="table table-borderless table-hover">
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
          <tr class='edit_hover_class'>
            <td><?= $yourLeave['start_date']?></td>
            <td><?= $yourLeave['end_date']?></td>
            <td><?= $yourLeave['duration']?></td>
            <td><?= $yourLeave['leave_type']?></td>
            <td><span class="badge badge-info">Requested</span></td>
            <td >  
              <button type="button" class="not-btn edit-btn-employee"><i class="material-icons text-info">edit</i></button>
                <a href="your_leave/remove/<?= $yourLeave['le_id']?>" data-toggle="modal" data-target="#removeYourLeave<?= $yourLeave['le_id']?>" data-toggle="tooltip" title="Delete YourLeave!" data-placement="right" class="delete"><i class="material-icons text-danger">delete</i></a>
            </td>
          </tr>
          <!-- The Modal delete -->
            <div class="modal fade"  id="removeYourLeave<?= $yourLeave['le_id']?>" tabindex="-1" role="dialog">
                <div class="modal-dialog mt-3">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <h4 class="modal-title mt-3" style="margin-left:30px;"><b>Remove Items ?</b></h4>
                    <!-- Modal body -->
                    <form action="your_leave/remove/<?= $yourLeave['le_id']?>" method="post">
                    <div class="modal-body mt-3">
                        <p style="margin-left:50px;">Are you sure you want to remove the selected department?</p>
                        <a data-dismiss="modal" class="closeModal" style="margin-left:53.8%;">DON'T REMOVE</a>
                        &nbsp;
                        <input type="submit" value="REMOVE" id="btnDelteYes" class="btn text-warning">
                    </div>
                    </form>
                </div>
                <div class="col-3"></div>
                </div>
         </div>
      <?php endforeach; ?>
  </table>
</div>
</div>
     
<?= $this->include('your_leave/createYourLeaveModal') ?>
 <?= $this->include('your_leave/editYourLeaveModal') ?>
<?= $this->endSection() ?>