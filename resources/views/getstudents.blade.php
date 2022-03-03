<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
	
	<title>Student List Display</title>
</head>
<body>

        <table class="table table-border" style="width:100%">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Student Roll No.</th>
                <th>Student Photo Link</th>
                <th>Class</th>
                <th>Total Score</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($students as $sdata) 
            <tr>
                <td>{{$sdata->student_name}}</td>
                <td>{{$sdata->roll_no}}</td>
<td><a target="_blank" href="/student_profile/{{ $sdata->image }}">Student Photo</td> 
<td>{{$sdata->student_class}}</td>               
    <td>{{$sdata->total_score}}</td>
            </tr>
            @endforeach
         </tbody>
        
    </table>
   

</body>
</html>