<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="stylesheet" href="/createadmin.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <script src="/superadmin.js"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <title>Admin | Co-ordinator : Create</title>
</head>

<body id="body-pd">
    @include('Admin/header')
    <!--Container Main start-->
    <!-- <form>
        <div class="create">
            <div class="form-group">
                <label for="exampleInputEmail1">Admin Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">ConfirmPassword</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
              <label for="">Department</label>
              <select name="Department" class="form-control">
                <option>Default select</option>
                <option>Default select</option>
                <option>Default select</option>
              </select>
            </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Admin Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
      </form> -->
      <div class="container">

        <h2 style="margin-top:2em;text-align:center">Create Co-ordinator</h2>
    <div class="create">
        <div class="m-4">
            <form action="{{ route('coordinator.list') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Co-ordinator Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="Co-ordinator" class="form-control" id="inputEmail"
                            placeholder="Co-ordinator name" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="Email" class="form-control" id="inputEmail" placeholder="Email"
                            required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="Password" class="form-control" id="inputEmail"
                            placeholder="Password" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="Cpassword" class="form-control" id="inputPassword"
                            placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Department</label>
                    <div class="col-sm-10">
                        <input type="text" name="Department" class="form-control" id="inputPassword"
                            placeholder="Department" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contact Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="Contactnumber" class="form-control" id="inputPassword"
                            placeholder="Contact Number" required>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-sm-10 offset-sm-2 button">
                        <button  type="submit" id="submitButton"  class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>
