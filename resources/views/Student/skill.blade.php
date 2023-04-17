<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | skill</title>
    <link rel="stylesheet" href="/skill.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
</head>
<body>
@include('Student.studentheader')
    
           

    <div class="banner" style="margin-top: -0em">
        ADD YOUR SKILL
    </div>
    <div class="create">
        <div class="m-4">
          <form action="/examples/actions/confirmation.php" method="post">
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Skill</label>
              <div class="col-sm-10">
                <input type="text" class="form-control name" id="inputName" placeholder="Enter your skill" required>
              </div>
            </div>
      
            <!-- <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Enrollment</label>
              <div class="col-sm-10">
                <input type="text" class="form-control Enrollment" id="inputEnrollment" placeholder="Enrollment" required>
              </div>
            </div>
      
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Certifcate type</label>
              <div class="col-sm-10">
                <input type="text" class="form-control Certifcate" id="inputCertifcate" placeholder="Certifcate type" required>
              </div>
            </div>
      
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Event name</label>
              <div class="col-sm-10">
                <input type="password" class="form-control Event" id="inputEvent" placeholder="Event name" required>
              </div>
            </div> -->
            <!-- <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input type="text-area" class="form-control Description" id="inputDescription" placeholder="Description about you certificate" required>
              </div>
            </div> -->
            <!-- <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Contact Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" placeholder="Contact Number" required>
              </div>
            </div> -->

            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="skill" id="yourskill" cols="30" rows="10"></textarea>
                </div>
              </div>

            <div class="row ">

                <!-- <div class="col-sm-10 offset-sm-2 button">
                  <button type="button" class="btn btn-secondary">upload Certificate</button>
                </div> -->
                <div class="col-sm-12 offset-sm-2 button mt-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
              </div> 
            </form>
          </div>
        </div>
</body>
</html>