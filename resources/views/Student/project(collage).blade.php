<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main ui | project(internship)</title>
    <link rel="stylesheet" href="/certificateupload.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
</head>
<body>
    <div class="create">
        <div class="m-4">
          <form action="/examples/actions/confirmation.php" method="post">
            <div class="row mb-3">
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
            </div>
      
            <div class="row mb-3">
              <label for="Projectname" class="col-sm-2 col-form-label">Project Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Projectname" id="inputproject" placeholder="Project Name" required>
              </div>
            </div>
      
            <div class="row mb-3">
              <label for="inputProjectlink" class="col-sm-2 col-form-label">Project link</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Projectlink" id="inputProjectlink" placeholder="Project link" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputDuration" class="col-sm-2 col-form-label">Duration</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Duration" id="inputDuration" placeholder="Duration of project" required>
              </div>
            </div>
            <!-- <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Contact Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" placeholder="Contact Number" required>
              </div>
            </div> -->
            <div class="row ">

                <div class="col-sm-10 offset-sm-2 button">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
              </div>
            </form>
          </div>
        </div>
</body>
</html>
</body>
</html>