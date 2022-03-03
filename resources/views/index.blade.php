<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
        $('#example').DataTable();
        } );
	</script>
	<title>Student List Display</title>
</head>
<body>
<div class="pull-right">
                <a class="btn btn-success" href="create_student"> Create New Students</a>
</div>
@if($students->count() != 0)

        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Student Name</th>
                <th>Roll No.</th>
                <th>Subject 1</th>
                <th>Subject 2</th>
                <th>Subject 3</th>
                <th>Subject 4</th>
                <th>Subject 5</th>
                <th>Subject 1 Score</th>
                <th>Subject 2 Score</th>
                <th>Subject 3 Score</th>
                <th>Subject 4 Score</th>
                <th>Subject 5 Score</th>
                <th>Photo</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($students as $sdata) 
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{$sdata->student_name}}</td>
                <td>{{$sdata->roll_no}}</td>
                <td>{{$sdata->sub1}}</td>
                <td>{{$sdata->sub2}}</td>
                <td>{{$sdata->sub3}}</td>
                <td>{{$sdata->sub4}}</td>
                <td>{{$sdata->sub5}}</td>
                <td>{{$sdata->sub1_score}}</td>
                <td>{{$sdata->sub2_score}}</td>
                <td>{{$sdata->sub3_score}}</td>
                <td>{{$sdata->sub4_score}}</td>
                <td>{{$sdata->sub5_score}}</td>
                <td><img src="/student_profile/{{ $sdata->image }}" width="100px"></td>
                <td>{{$sdata->student_class}}</td>

            </tr>
            @endforeach
         </tbody>
        
    </table>
   
    @endif

</body>
</html>