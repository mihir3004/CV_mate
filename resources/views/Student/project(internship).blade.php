<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Project(internship)</title>
    <link rel="stylesheet" href="/certificateupload.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
</head>
<body>
  @include('sweetalert::alert')
  @include('Student/studentheader')
    <div class="create">
        <div class="m-4">
          <form action="{{route('project.upload')}}" method="post">
            @csrf
            {{-- <div class="row mb-3">
              <label for="inputName" class="col-sm-2 col-form-label">Student Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="name" id="inputName" placeholder="Student name" required>
              </div>
            </div>
      
            <div class="row mb-3">
              <label for="inputEnrollmentpi" class="col-sm-2 col-form-label">Enrollment</label>
              <div class="col-sm-10">
                <input type="text" class="form-control Enrollment projectintern" name=" enprojectintern" id="inputEnrollmentpi" placeholder="Enrollment" required>
              </div>
            </div> --}}
            <div class="row mb-3">
              <label for="Projectname" class="col-sm-2 col-form-label">Project Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Projectname" id="inputproject" placeholder="Enter Project Name" required>
              </div>
            </div>

            <div class="row mb-3">
                <label for="Projectname" class="col-sm-2 col-form-label">Company Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="companyname" id="inputcompanyname" placeholder="Enter Company Name">
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="inputDuration" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Role" id="inputDuration" placeholder="Enter Role" required>
                </div>
              </div>
      
      
            <div class="row mb-3">
              <label for="inputProjectlink" class="col-sm-2 col-form-label">Project link</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Projectlink" id="inputProjectlink" placeholder="Enter Project link" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputDuration" class="col-sm-2 col-form-label">Duration</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="duration" id="inputDuration" placeholder="Enter Duration of project" required>
              </div>
            </div>
            <div class="row mb-3">
              
              <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="description" id="inputPassword" placeholder="Enter Description" required>
              </div>
            </div>
            <div class="row ">
<!-- 
                <div class="col-sm-10 offset-sm-2 button">
                    <button type="button" class="btn btn-secondary">upload project</button>
                  </div> -->
                  <div class="col-sm-12 offset-sm-2 button mt-4">
                      <button type="submit" class="btn btn-success">submit</button>
                    </div>>
              </div>
            </form>
          </div>
        </div>
</body>
</html>