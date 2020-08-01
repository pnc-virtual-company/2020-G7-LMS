<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS App</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="images/lms_app.png" type="image/x-icon" width="500" height="600">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
        $(document).ready(function () {
            $('.updateEmployee').on('click', function () {
                $tr = $(this).closest('tr');
                var data = $tr.children('td').map(function () {
                    return $(this).text();
                }).get();
                $('#id').val(data[0]);
                $('#firstname').val(data[1]);
                $('#lastname').val(data[2]);
                $('#email').val(data[3]);
                $('#password').val(data[4]);
                $('#department').val(data[5]);
                $('#position').val(data[6]);
                $('#position').val(data[6]);
                $('#start_date').val(data[7]);
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
            
        });
        //search position and department
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
        //culculate date(duration)
        var dateToday = new Date(); 
        function GetDays(){
            var startDate = new Date($("#start_date").val());
            var endDate = new Date($("#end_date").val());
            var timeDifference = endDate.getTime() - startDate.getTime();
            // Get days difference
            var milliSecondsInOneSecond = 1000;
            var secondInOneHour = 3600;
            var hoursInOneDay = 24;
            var daysDiff = timeDifference / (milliSecondsInOneSecond * secondInOneHour * hoursInOneDay);
                return parseInt(daysDiff);
            }
        function cal(){
            if(document.getElementById("end_date")){
                document.getElementById("duration").value=GetDays() + " days";
            }  
    }
    </script>
</body>

</html>