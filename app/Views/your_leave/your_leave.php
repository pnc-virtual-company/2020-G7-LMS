
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container">
<div class="input-group mb-4 mt-5">
    <input type="text" class="form-control" placeholder="Search" id="search">
  </div>
</div>
<div class="container">
<button type="button" class=" btn bg-warning text-white float-right btn-lg" data-toggle="modal" data-target="#exampleModal"
            data-whatever="">Request a Leave</button>
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create a Request</h5>
                    </div>
                    <div class="container mt-5">
                       <form action="" method="POST">
                      
                    
                            <div class="form-group row">
                                <label class="col-4" for="startdate" >Start Date</label>
                                <input class="col-5" type="date" data-date=""  data-date-format="DD-YY-MM" name="startdate"  class="form-control"
                                    placeholder="start date" required>
                
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="enddate">End Date</label>

                                <input class="col-5" type="date" data-date="" data-date-format="DD-MM-YY" name="enddate" class="form-control"

                                    placeholder="end date" required>
                              
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="date">Duration</label>
                                <input class="col-5" type="text" name="duration" class="form-control"
                                    placeholder="Duration...." required>
                            </div>
                            <div class="form-group row">
                                <label class="col-5" for="leaveType">Leave Types</label>
                                <div class="col-6" class="input-group">
                                <select class="form-control-sm" id="leaveType">
                                   
                                    <option class="0">select leave type...</option>
                                    <option value="1">Paid leave</option>
                                    <option value="2">Sick leave</option>
                                    <option value="3">Un paid leave</option>
                                    <option value="4">Wedding leave</option>
                                    <option value="5">Maternity leave</option>
                                    
                                   
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="date">Comment</label>
					            <textarea name="" class="col-5" id="" rows="2" cols="20"></textarea>
				
                            </div>
                    </div>
                    <div class="modal-footer">
                       <button type="submit" class="btn bg" data-dismiss="modal">DISCARD</button>
                       <button type="button" class="btn btn text-warning" data-dismiss="modal">SUBMIT</button>

                    </div>
                </form>
                </div>
            </div>
        </div>
</div>       
    <div class="container mt-5">
    <h3>Your leave requests</h3>
        <table id="request" class="table table-borderless" style="width:100%">
            <thead class="text-center">
                <tr>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Duration</th> 
                    <th>Type</th>
                    <th>Status</th>
                </tr>
       
                <tr>
		
			<td>10/06/2005 </td>
			<td>15/06/2005</td>
			<td>1 day</td>
			<td>Vacation</td>
			<td class="badge badge-info">Requested</td>
            <td class="form"><a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Department!"  data-placement="left">edit</i></a>
            <a href="" data-toggle="tooltip" title="Delete Department!" data-placement="right"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected departments?');">delete</i></a></td>
		</tr>
		<tr>
			
			<td>01/06/2020 </td>
			<td>02/06/2005</td>
			<td>2 days</td>
			<td>Training</td>
			<td class="badge badge-danger">Canceled</td>
        </tr>
        <br>
		<tr>
			
			<td>01/08/2019 </td>
			<td>02/08/2020</td>
			<td>0.5 day</td>
			<td>Vacation</td>
			<td class="badge badge-danger">Rejected</button></td>
        </tr>
        <br>
		<tr>
			
			<td>11/11/2020</td>
			<td>11/11/2018</td>
			<td>1 day</td>
			<td>Vacation</td>
			<td class="badge badge-success">Accepted</button></td>
		</tr>
		
            </thead> 
        </table>
    </div>

       <!-- ========================================START Model UPDATE================================================ -->
	<!-- The Modal -->
	<div class="modal fade" id="updateDepartment">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Leave</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="/" method="post">
				<div class="form-group">
					<input type="text" class="form-control" value="Edit Leave">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="UPDATE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =================================END MODEL UPDATE==================================================== -->
    <?= $this->endSection() ?>