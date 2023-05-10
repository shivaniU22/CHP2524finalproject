@extends('layout')
@section('content')

<?php
$con=mysqli_connect("127.0.0.1","root","","laravel");
function statusCount($status){	
	$con=mysqli_connect("127.0.0.1","root","","laravel");
	$sql = "SELECT COUNT(status) FROM applicants WHERE status = '$status' ORDER BY id desc";
	if($status == 'all')
	{
		$sql = "SELECT COUNT(status) FROM applicants ORDER BY id desc";	
	}
	$query= mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($query))
	{
		if($row>0)
		{
			return $row[0];
		}
		else{
			return 0;
		}	
	}
}
?>

<div class="row push-top" style="padding-top:5px;">
	<div class="col-6 d-flex flex-row">
		<h3 class="mt-2"><a class="text-decoration-none text-dark" href="/dashboard">Admin Dashboard</a></h3>
	</div>
	<div class="col-6 d-flex flex-row-reverse">
		<div class="mt-2">
			@if (Auth::guest()) 
			@else
			{{Auth::user()->name}}'s Profile
			@endif  
		</div>		
	</div>  
</div>

<div class="row px-1 screenMarginx">	
	<div class="col">
		<div class="card rounded-3 mb-4 text-center">			
			<a class="text-decoration-none py-2" href="/dashboard?status=all">
				<div class="px-4">				
					<i class="fa fa-hourglass-start text-dark fSize24"></i>
					<span class="text-dark px-1 fSize24">
						<?php echo statusCount('all'); ?>
					</span>
				</div>
				<div class="fw-bold text-secondary">All Applicants</div>
			</a>			
		</div>
	</div>
	<div class="col">
		<div class="card rounded-3 mb-4 text-center">			
			<a class="text-decoration-none py-2" href="/dashboard?status=To Be Assigned">
				<div class="px-4">
					<i class="fa fa-hourglass-start text-primary fSize24"></i>
					<span class="text-primary px-1 fSize24">
						<?php echo statusCount('To Be Assigned'); ?>
					</span>
				</div>
				<div class="fw-bold text-secondary">To Be Assigned</div>
			</a>			
		</div>
	</div>
	<div class="col">
		<div class="card rounded-3 mb-4 text-center">			
			<a class="text-decoration-none py-2" href="/dashboard?status=Assigned">
				<div class="px-4">
					<i class="fa fa-user text-secondary fSize24"></i>
					<span class="text-secondary px-1 fSize24">
						<?php echo statusCount('Assigned'); ?>
					</span> 
				</div>
				<div class="fw-bold text-secondary">Assigned</div>
			</a>			
		</div>
	</div>
	<div class="col">
		<div class="card rounded-3 mb-4 text-center">
			<a class="text-decoration-none py-2" href="/dashboard?status=Work In Progress">
				<div class="px-4">				
					<i class="fa fa-hourglass-half text-warning fSize24"></i>
					<span class="text-warning px-1 fSize24">
						<?php echo statusCount('Work In Progress'); ?>
					</span>	
				</div>
				<div class="fw-bold text-secondary">Work In Progress</div>
			</a>
		</div>
	</div>
	<div class="col">
		<div class="card rounded-3 mb-4 text-center">
			<a class="text-decoration-none py-2" href="/dashboard?status=Completed">
				<div class="px-4">				
					<i class="fa fa-thumbs-up text-success fSize24"></i>
					<span class="text-success px-1 fSize24">
						<?php echo statusCount('Completed'); ?>
					</span>	
				</div>
				<div class="fw-bold text-secondary">Completed</div>
			</a>
		</div>
	</div>
	<div class="col">
		<div class="card rounded-3 mb-4 text-center">
			<a class="text-decoration-none py-2" href="/dashboard?status=Rejected">
				<div class="px-4">				
					<i class="fa fa-thumbs-down text-danger fSize24"></i>
					<span class="text-danger px-1 fSize24">
						<?php echo statusCount('Rejected'); ?>
					</span>	
				</div>
				<div class="fw-bold text-secondary">Rejected</div>
			</a>
		</div>
	</div>
	<div class="col">
		<div class="card rounded-3 mb-4 text-center">
			<a class="text-decoration-none py-2" href="/dashboard?status=Waiting for more info">
				<div class="px-4">				
					<i class="fa-solid fa-pause text-info fSize24"></i>
					<span class="text-info px-1 fSize24">
						<?php echo statusCount('Waiting for more info'); ?>
					</span>	
				</div>
				<div class="fw-bold text-secondary">Waiting for more info</div>
			</a>
		</div>
	</div>
	<div class="col">
		<div class="card rounded-3 mb-4 text-center">
			<a class="text-decoration-none py-2" href="/dashboard?status=Closed">
				<div class="px-4">				
					<i class="fa-solid fa-folder-closed text-dark fSize24"></i>
					<span class="text-dark px-1 fSize24">
						<?php echo statusCount('Closed'); ?>
					</span> 	
				</div>
				<div class="fw-bold text-secondary">Closed</div>
			</a>
		</div>
	</div>
</div>

<div class="row px-1 screenMarginx">
	<div class="col-12">
		<div style="width: 100%; border: 1px solid #ccc;">
			<div class="table-responsive">
				<table class="float-end" border="0" cellspacing="5" cellpadding="5">
					<tbody><tr>
						<td>From date:</td>
						<td><input type="text" id="min" name="min"></td>
					</tr>
					<tr>
						<td style="text-align:right;">To date:</td>
						<td><input type="text" id="max" name="max"></td>
					</tr>
					</tbody>
				</table>
				<table id="datatablesApplicants" class="table table-striped table-bordered dt-responsive display nowrap">	
				<thead class="table-success">			
					<tr>
            <th>id</th>
            <th>First Name</th>          
            <th>Family Name</th>          
            <th>Date of birth</th>
            <th>Nationality</th> 
            <th>Email</th>          
            <th>Education history</th>          
            <th>Additional information</th>
            <th>Status</th>
            <th>Created on</th>							
            <th></th>				
					</tr>
				</thead>
				<tbody>		
				<?php
        $con=mysqli_connect("127.0.0.1","root","","laravel");
				$param_status ='';							
				$ApplicantsQuery = mysqli_query($con,"SELECT * from Applicants ORDER BY id desc");				
				if(isset($_GET['status']))
				{	
					$param_status = str_replace('%20', ' ', $_GET['status']);
					$ApplicantsQuery = mysqli_query($con,"SELECT * from Applicants WHERE status = '$param_status' ORDER BY id desc");
					if($param_status == 'all')
					{
						$ApplicantsQuery=mysqli_query($con,"SELECT * from Applicants ORDER BY id desc");
					}					
				}
				while($ApplicantsRow=mysqli_fetch_array($ApplicantsQuery))	  
				{?>
				<tr>
        
					<td><?php echo $ApplicantsRow['id'];?></td>			
					<td><?php echo $ApplicantsRow['forename1'];?></td> 
					<td><?php echo $ApplicantsRow['familyname'];?></td>			
					<td><?php echo $ApplicantsRow['dateofbirth'];?></td> 
					<td><?php echo $ApplicantsRow['nationality'];?></td>			
					<td><?php echo $ApplicantsRow['email'];?></td> 
					<td><?php echo $ApplicantsRow['educationhistory'];?></td>						
					<td class="text-wrap"><?php echo $ApplicantsRow['additionalinformation'];?></td>		
          <td><?php echo $ApplicantsRow['status'];?></td>	
					<td><?php echo $ApplicantsRow['created_at'];?></td>					
					<td>
					<a href="/applicants/<?php echo $ApplicantsRow['id'];?>">
						<div class="btn btn-primary btn-xs">Show</div>
					</a>						
					</td>			
				</tr>
				<?php }?>
				</tbody>
				
			</table>
			</div>
		</div>
	</div>
</div>

<link rel='stylesheet' href='https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/datetime/1.2.0/css/dataTables.dateTime.min.css'>
<script src='https://code.jquery.com/jquery-3.5.1.js' crossorigin="anonymous"></script>
<script src='https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js' crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js' crossorigin="anonymous"></script>
<script src='https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js' crossorigin="anonymous"></script>

<script>
    var minDate, maxDate; 
    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date( data[9] );
    
            if (
                ( min === null && max === null ) ||
                ( min === null && date <= max ) ||
                ( min <= date   && max === null ) ||
                ( min <= date   && date <= max )
            ) {
                return true;
            }
            return false;
        }
    );
    $(document).ready(function () {
        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'YYYY-MM-DD'
        });
        maxDate = new DateTime($('#max'), {
            format: 'YYYY-MM-DD'
        });

        // DataTables initialisation
        //var table = $('#datatablesApplicants').DataTable();
        
        //$('#datatablesApplicants').DataTable({  
        var table = $('#datatablesApplicants').DataTable({
            order: [[0, 'desc']],
			"lengthMenu": [[50, 25, 100], [50, 25, 100]],
            //"dom": 'rtip',
            //"bPaginate": true,
            //"bLengthChange": false,
            //"bFilter": true,
            //"bInfo": false,
            //"bAutoWidth": false
            //"oSearch": {"sSearch": "Work In Progress"}                 
            initComplete: function () {
                this.api()
                    .columns([1,2,3,4,5,6])                                              
                    .every(function (index) {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    });
            },
        });
        // Refilter the table
        $('#min, #max').on('change', function () {
            table.draw();
        });
    });
</script>
@endsection
