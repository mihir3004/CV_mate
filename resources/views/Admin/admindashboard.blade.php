<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="stylesheet" href="/superadmin.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    {{-- <link rel="stylesheet" href="/havkvgec.css"> --}}
    <script src="/superadmin.js"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    {{-- <link rel="stylesheet" href="/superadmindashboard.css" /> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
      </style>
    <title>Admin | Dashboard</title>
</head>

 

<body id="body-pd">

    @include('Admin/header')

    <div class="container" style="margin-top:2em">
        <div class="row">
            <div class="col-lg-4" style="border:2px solid red;text-align:center">
                <h4><i class="fa-solid fa-user"></i>  Co-ordinator</h4>
                <h4>{{ $count['department'] }}</h4>
            </div>
            <div class="col-lg-4" style="border:2px solid red;text-align:center">
                <h4><i class="fa-solid fa-building"></i>  Department</h4>
                <h4>{{ $count['department'] }}</h4>
            </div>
            <div class="col-lg-4" style="border:2px solid red;text-align:center">
                <h4><i class="fa-solid fa-users"></i>  Student</h4>
                <h4>{{ $count['student'] }}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" style="border:2px solid red;text-align:center">
                <h4><i class="fa-solid fa-trophy"></i>  Achievment</h4>
                <h4>{{ $count['certificate'] }}</h4>
            </div>
            <div class="col-lg-6" style="border:2px solid red;text-align:center">
                <h4><i class="fa-solid fa-sheet-plastic"></i>  Project</h4>
                <h4>{{ $count['project'] }}</h4>
            </div>
        </div>
    </div>



    <!--Container Main end-->
</body>

</html>
