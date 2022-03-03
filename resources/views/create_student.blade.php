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
 
  <form action="save" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Name" name="student_name" value="{{old('student_name')}}">
                @error('student_name')
                <span class="alert-danger">{{$message}}</span>
                @enderror

      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Roll Number" name="roll_no" value="{{old('roll_no')}}">
        @error('roll_no')
                <span class="alert-danger">{{$message}}</span>
                @enderror
      </div>
      
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 1" name="sub1" value="{{old('sub1')}}">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 2" name="sub2" value="{{old('sub2')}}">
      </div>
      
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 3" name="sub3" value="{{old('sub3')}}">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 4" name="sub4" value="{{old('sub4')}}">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject 5" name="sub5" value="{{old('sub5')}}">
      </div>


      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 1" name="sub1_score" value="{{old('sub1_score')}}">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 2" name="sub2_score" value="{{old('sub2_score')}}">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 3" name="sub3_score" value="{{old('sub3_score')}}">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 4" name="sub4_score" value="{{old('sub4_score')}}">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Student Subject Score 5" name="sub5_score" value="{{old('sub5_score')}}">
      </div>
      <div class="col-md-4">
        <input type="file" class="form-control" placeholder="Enter Student Subject Score 5" name="image">
        @error('student_image')
                <span class="alert-danger">{{$message}}</span>
                @enderror
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
