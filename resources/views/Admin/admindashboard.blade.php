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
    <!--Container Main start-->
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            const sideBarItems = document.getElementById("side_bar_list")
            $('a').click(function() {
                console.log("inn")
                console.log(sideBarItems);
                // $(this).addClass('active').siblings().removeClass('active')
                // alert("hello");
                $('#new').addClass('active');
                // event.preventDefault();

            })
        });
    </script> --}}



    <div class="height-30 bg-white dashboardbbox">
        <h4></h4>
        <div class="container">

            <div class="b1">
                <h4 class="b1letter">Co-ordinator</h4>
                <i class="fa-solid fa-user fa-3x"></i>
                <h4 class="b1count">{{ $count['department'] }}</h4>
            </div>
            <div class="b2">
                <h4 class="b2letter">Department</h4>
                <i class="fa-solid fa-building fa-3x"></i>
                <h4 class="b2count">{{ $count['department'] }}</h4>
            </div>
            <div class="b3">
                <h4 class="b3letter">Student</h4>
                <i class="fa-solid fa-users fa-3x"></i>
                <h4 class="b3count">{{ $count['student'] }}</h4>
            </div>

        </div>
    </div>
    <div class=" height-30 bg-white container dashboard12">
        <div class="b4">
            <h4 class="b4letter"> Achievment</h4>
            <i class="fa-solid fa-trophy fa-3x"></i>
            <h4 class="b4count">{{ $count['certificate'] }}</h4>
        </div>
        <div class="b5">
            <h4 class="b5letter">Project</h4>
            <i class="fa-solid fa-sheet-plastic fa-3x"></i>
            <h4 class="b5count">{{ $count['project'] }}</h4>
        </div>
    </div>

    <!--Container Main end-->
</body>

</html>
