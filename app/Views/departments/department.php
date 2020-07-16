<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <div class="input-group mb-3">
        <input type="text" class="form-control" id="search" onkeyup="myFunction()" placeholder="Search">
      </div>
      <br>
      <div class="text-right">
        <a href="" class="btn btn-primary btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createDepartment">
          <i class="material-icons float-left" data-toggle="tooltip" title="Create Department!" data-placement="left">add</i>&nbsp;Create
        </a>
      </div>
      <br>
      <table class="table table-hover" id="myTable">
        <thead class="bg-primary text-white">
          <tr>
            <th>ID</th>
            <th>Departments</th>
            <th class="text-right">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($departments as $department) :
          ?>
            <tr>
              <td><?= $department['id'] ?></td>
              <td><i class="material-icons float-left">people&nbsp;&nbsp;</i><?= $department['name'] ?></td>
              <td>
                <!-- Icon delete and edit -->
                <div class='edit_hover_class'>
                  <a href="" data-toggle="modal" data-target="#updateDepartment" class="icon-edit"><i class="material-icons text-info editdata" data-toggle="tooltip" title="Edit Department!" data-placement="left" style="margin-right: 12px;">edit</i></a>
                  <a href="department/editeDepartment/<?= $department['id'] ?>" data-toggle="modal" data-target="#deleteDepartment" data-toggle="tooltip" title="Delete Department!" data-placement="right" class="delete"><i class="material-icons text-danger">delete</i></a>
                </div>
              </td>
              <!-- The Modal delete -->
              <div class="modal fade" id="deleteDepartment" tabindex="-1" role="dialog">
                <div class="modal-dialog mt-3">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <h4 class="modal-title mt-3" style="margin-left:30px;"><b>Remove Items ?</b></h4>

                    <!-- Modal body -->
                    <form action="department/delete/<?= $department['id'] ?>" method="post">
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
            </tr>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>


      <!-- The Modal delete -->
      <div class="modal fade" id="deleteDepartment" tabindex="-1" role="dialog">
        <div class="modal-dialog mt-3">
          <div class="modal-content">
            <!-- Modal Header -->
            <h4 class="modal-title mt-3" style="margin-left:30px;"><b>Remove Items ?</b></h4>

            <!-- Modal body -->
            <form action="department/adddepartment/<?= $department['id'] ?>" method="post">
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
              <form action="department/adddepartment" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Department name" name="name">
                </div>
                <a data-dismiss="modal" class="closeModal">DISCARD</a>
                &nbsp;
                <input type="submit" value="CREATE" class="btn text-warning">
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- =================================END MODEL CREATE==================================================== -->

      <!-- ========================================START Model UPDATE================================================ -->
      <!-- The Modal -->
      <div class="modal fade" id="updateDepartment">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Edit Department</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-right">
              <form action="department/updateDepartment" method="post">
                <div class="form-group">
                  <input type="hidden" name="id" id="id">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="" id="name" name="name">
                </div>
                <a data-dismiss="modal" class="closeModal">DISCARD</a>
                &nbsp;
                <input type="submit" value="UPDATE" class="btn text-warning">
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- =================================END MODEL UPDATE==================================================== -->

      <script>
        $(document).ready(function() {
          $('.editdata').on('click', function() {
            $('updateDepartment');
            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function() {
              return $(this).text();
            }).get();

            // console.log(data);

            $('#id').val(data[0]);
            $('#name').val(data[1]);

          });
        });
        $('.deletedata').on('click', function() {
          $('deleteDepartment');
          $tr = $(this).closest('tr');
          var data = $tr.children('td').map(function() {
            return $(this).text();
          }).get();

          // console.log(data);

          $('#id').val(data[0]);
          $('#name').val(data[1]);

        });

        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("search");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
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


      <?= $this->endSection() ?>