<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">
    <div class="input-group mb-3">
        <input type="text" id="search" class="form-control" placeholder="Search">
        <div class="input-group-append">
        </div>
    </div>
    <h3>Leave requests submitted to me</h3><br>
        <table id="request" class="table table-borderless" style="width:100%">
            <thead>
                <tr>
                    <!-- <th hidden>ID</th> -->
                    <th>Employee</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Duration</th> 
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                    <td>Hugo Pana</td>
                    <td>25/05/2005</td>
                    <td>25/05/2005</td>
                    <td>1 day</td> 
                    <td>Vacation</td>
                    <td>
                        <button type="button" class="btn1 btn btn-primary btn-sm">Accept</button>
                        <button type="button" class="btn2 btn btn-outline-dark btn-sm">Reject</button>
                    </td>
            </tbody>
            <tbody>
                    <td>Hugo Pana</td>
                    <td>25/05/2005</td>
                    <td>25/05/2005</td>
                    <td>2 day</td> 
                    <td>Training</td>
                    <td>
                    <span class = "float-left">Accepted</span>
                    <a><i class="material-icons text-danger font-weight-bolder ">replay</i></a>
                    </td>
            </tbody>
            <tbody>
                    <td>Hugo Pana</td>
                    <td>25/05/2005</td>
                    <td>25/05/2005</td>
                    <td>0.5 day</td> 
                    <td>Vacation</td>
                    <td>
                        <button type="button" class="btn1 btn btn-primary btn-sm">Accept</button>
                        <button type="button" class="btn2 btn btn-outline-dark btn-sm">Reject</button>
                    </td>
            </tbody>
            <tbody>
                    <td>Hugo Pana</td>
                    <td>25/05/2005</td>
                    <td>25/05/2005</td>
                    <td>1 day</td> 
                    <td>Vacation</td>
                    <td> 
                        <span class = "float-left">Accepted</span>
                        <a><i class="material-icons text-danger font-weight-bolder ">replay</i></a>
                    </td>
            </tbody>
            </table>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>