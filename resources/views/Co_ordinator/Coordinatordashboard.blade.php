<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <title>Co-ordinator | Dashboard</title>
</head>



<body id="body-pd">
    <!--Container Main start-->
    @include('Co_ordinator/co_header')
    <div class="container" style="margin-top:2em">
        <div class="row">
            <div class="col-lg-4" style="border:2px solid red;text-align:center">
                <h4><i class="fa-solid fa-user"></i>  Projects</h4>
                <h4>{{ $count['project'] }}</h4>
            </div>
            <div class="col-lg-4" style="border:2px solid red;text-align:center">
                <h4><i class="fa-solid fa-building"></i>  Achievement</h4>
                <h4>{{ $count['certificate'] }}</h4>
            </div>
            <div class="col-lg-4" style="border:2px solid red;text-align:center">
                <h4><i class="fa-solid fa-users"></i>  Student</h4>
                <h4>{{ $count['student'] }}</h4>
            </div>
        </div>
    </div>
    <!--Container Main end-->
</body>

</html>
