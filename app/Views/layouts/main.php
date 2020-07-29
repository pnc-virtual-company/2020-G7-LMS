<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS App</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css')?>">
    <link rel="shortcut icon" href="<?= base_url('images/lms_app.png')?>" type="image/x-icon" width="500" height="600">
    <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/icon?family=Material+Icons')?>">
    <style>
        .not-btn {
            all: unset;
            outline: none;
            border: none;
        }

        .hide {
            opacity: 0;
        }
    </style>
</head>

<body>
    <?= $this->renderSection('content') ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
     
       $(document).ready(function(){
           $('.edit-btn-employee').on('click',function(){
                $('#updateEmployee').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                return $(this).text();
                }).get();
                
                $('#update_id').val(data[0]);
                $('#firstname').val(data[1]);
                $('#lastname').val(data[2]);
                $('#email').val(data[3]);
                $('#password').val(data[4]);
                $('#role').val(data[5]);
                $('#profile').val(data[6]);
                $('#startdate').val(data[7]);
                $('#department_id:selected').val(data[8]);
                $('#position_id:selected').val(data[9]);
            });
	    })
          // Update position information modal
          $('.edit-btn-position').on('click', function () {
                $('#updatePosition').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#p_id').val(data[1]);
                $('#position').val(data[0].substr(10, data[0].length));
            });
               // Update department information modal
               $('.edit-btn-department').on('click', function () {
                $('#updateDepartment').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#d_id').val(data[1]);
                $('#department').val(data[0].substr(10, data[0].length));
            });
    // input filter search  employee
        function performReset() {
            document.getElementById("inputfirstname").value = "";
            document.getElementById("inputlasttname").value = "";
            document.getElementById("inputemail").value = "";
            document.getElementById("inputdepartment").value = "";
            document.getElementById("position").value = "";
            document.getElementById("startdate").value = "";
 
             filterTable();
        }

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
            if (txtValue.toUpperCase().indexOf(filter) >-1) {
            tr[i].style.display = "";
            } else {
            tr[i].style.display = "none";
            }
        }
    }
}
//filter search department and position
     function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
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


</body>

</html>