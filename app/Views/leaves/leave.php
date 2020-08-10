<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container">
<div class="col-11 mt-5">
        <div class="input-group mb-3">
            <input type="text" id="search" class="form-control" onkeyup="myFunction()" placeholder="Search">
            <div class="input-group-append"></div>
        </div><br>
        <h3>Leave requests submitted to me</h3><br>
    </div>
        <table  class="table table-borderless" style="width:100%" id="myTable">
            <thead>
                <tr>
                    <th>Employee</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Duration</th> 
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach($LeaveData as $leave):?>
                        <?php foreach($userData as $user):?>
                        <?php endforeach ?>
                     <tr>
                        <td><?= $leave['firstname']?></td>
                        <td><?= $leave['start_date']?></td>
                        <td><?= $leave['end_date']?></td>
                        <td><?= $leave['duration']?></td>
                        <td><?= $leave['leave_type']?></td>
                        <td>
                            <div class="row">
                                <a href="<?= base_url('email')?>" onclick="beforeAccept('afterAccept','accept','reject','undo'); return false;" class="btn1 btn btn-primary btn-sm" id="accept">Accept</a>
                                <a href="<?= base_url('email')?>"onclick="beforeReject('afterReject','accept','reject','undo'); return false;"class="btn1 btn btn-outline-primary btn-sm" id="reject">Reject</a>
                                <span class = "float-left" id="afterAccept"style="display: none;" >Accepted</span>
                                <span class = "float-left" id="afterReject"style="display: none;">Rejected</span>
                                <a><i class="material-icons text-danger font-weight-bolder "style="display: none; cursor: pointer;" id="undo"onclick = "undo('accept','reject','afterAccept','afterReject','undo');">replay</i></a>
                            </div>
                        </td>
                    </tr>
               
            <?php endforeach;?>
            </tbody>
          
            </table>
            </div>
        </div>
    </div>
</div>
<script>

<script>
function myFunction() {
var input, filter, table, tr, td, i, txtValue;
input = document.getElementById("search");
filter = input.value.toUpperCase();
table = document.getElementById("myInput");
tr = table.getElementsByTagName("tr");
for (i = 0; i < tr.length; i++) {
td = tr[i].getElementsByTagName("td")[0];
if (td) {
txtValue = td.textContent || td.innerText;
if (txtValue.toUpperCase().indexOf(filter) > -1) {
tr[i].style.display = "";
} else {
tr[i].style.display = "none";
}
}
}
}

</script>
</script>
<?= $this->endSection() ?>