<!DOCTYPE html>
<html lang="en">
<head>
  <title>Consta Cloud Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Student Mark Sheet</h2>
 
  <form action="save" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Name" name="student_name">
                <span >@error('student_name'){{$message}}@enderror</span>

      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Roll Number" name="roll_no">
      </div>
      
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 1" name="sub1">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 2" name="sub2">
      </div>
      
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 3" name="sub3">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 4" name="sub4">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 5" name="sub5">
      </div>


      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 1" name="sub1_score">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 2" name="sub2_score">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 3" name="sub3_score">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 4" name="sub4_score">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 5" name="sub5_score">
      </div>
      <div class="col-md-4">
        <input type="file" class="form-control" placeholder="Enter Student Subject Score 5" name="student_photo">
      </div>
      <div class="col-md-4">
        <select name="student_class" class="form-control">
          <option value=0>Select Class</option>
           @for($i=1; $i<=10;$i++){
              <option value="{{$i}}">{{$i}}</option>
           }
           @endfor
        </select>

      </div>

      </div>
            <button type="submit" class="btn btn-primary">Submit</button>

    </div>

  </form>
</div>

</body>
</html>
