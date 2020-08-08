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
        function CalculateStartAndEndDate() {
            var getStartDate = document.getElementById('start_date').value;
            var getEndDate = document.getElementById('end_date').value;
            var startPeriod = document.getElementById('time_start').value;
            var endPeriod = document.getElementById('time_end').value;
            
            var startDate = new Date(getStartDate);
            var endDate = new Date(getEndDate);
            var getDateTime = endDate.getTime() - startDate.getTime();
            // Get days difference
            var milliSecondsInOneSecond = 1000;
            var secondInOneHour = 3600;
            var hoursInOneDay = 24;
            var days = getDateTime/(milliSecondsInOneSecond *secondInOneHour * hoursInOneDay);
            var period = 0;
            if(startPeriod == 1) {
                if(endPeriod == 1){
                period = 0.5;
                }else{
                period = 1;
                }
            }else {
            if(endPeriod == 1){
            period = 0;
            }else{
            period = 0.5;
            }
            }
            if(startDate > endDate){
            $('#message_error').html('<div class="alert alert-danger"><strong>Error! </strong>End date cannot be before start date.</div>');
            }else if(startDate == endDate && startPeriod == 2 && endPeriod == 1){
            $('#message_error').html('<div class="alert alert-danger"><strong>Error! </strong>Start date and end date cannot be selected in the past.</div>');
            }else{
            document.getElementById("duration").value = (days + period)+" days";
            $('#message_error').html('');
            }
            return false;
            }
        