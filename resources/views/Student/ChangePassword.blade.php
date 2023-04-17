<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student|certificate upload</title>
    <link rel="stylesheet" href="/certificateupload.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
</head>
<body>
  @include('Student/studentheader')
    <div class="create">
        <div class="m-4">
          <form action="{{route('save.studentpassword')}}" method="post">
            @csrf
            <div class="row mb-3">
              <label for="" class="col-sm-2 col-form-label">Old Password</label>
              <div class="col-sm-10">
                <input type="password" name="oldpassword" class="form-control name" id="inputName" placeholder="Enter Old Password" required>
              </div>
            </div>
      
            <div class="row mb-3">
              <label for="" class="col-sm-2 col-form-label">New Password</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control Enrollment" id="" placeholder="Enter New Password" required>
                @error('password')
            <span style="color: red">{{$message}}</span>
            @enderror
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="" class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
                <input type="password" name="password_confirmation" class="form-control Certifcate" id="" placeholder="Enter Confirm Password" required>
                @error('password_confirmation')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
            
            </div>
           
           
    
            <div class="row ">
                <div class="col-sm-12 offset-sm-2 button mt-4">
                    <button type="submit" class="btn btn-success">Change</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
</body>
</html>