<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/editadmin.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <script src="/superadmin.js"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <title>Admin | Edit Coordinator</title>
</head>

<body id="body-pd">
    @include('Admin/header')
    <!--Container Main start-->

    <div class="create">
        <div class="m-4">
            <form action="{{ route('update.coordinator', ['id' => $coordinator['co-ordinator_id']]) }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Co-ordinator Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Co-ordinator" id="co-ordinator"
                            placeholder="Co-ordinator name" value="{{ $coordinator['name'] }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="Email" id="email"
                            placeholder="Email"value="{{ $coordinator['email'] }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Contact Number</label>
                    <div class="col-sm-10">
                        <input type="Contact Number" class="form-control" id="contact number" name="Contactnumber"
                            placeholder="Contact Number"value="{{ $coordinator['contact_number'] }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Department</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="department" name="Department"
                            placeholder="Department"value="{{ $coordinator['department'] }}" required>
                    </div>

                    <div class="row ">

                        <div class="col-sm-10 offset-sm-2 button">
                            <button type="submit" class="btn btn-primary ">Update</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!--Container Main end-->
</body>

</html>
