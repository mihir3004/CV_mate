<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/header.css">
</head>
<body>

    {{-- <div class="container1">

                <div class="navbar">
            <img class="img" src="/OIP.jpeg" alt="" srcset="">

            <div class="button">
                <!-- <button class="btn">Login</button>
                <button class="btn">sign-up</button> -->
            </div>
            <p class="banner">
                VISHWKARMA GOVERMENT ENGINEERING COLLEGE,
                CHANDKHEDA, AHEMDABAD
            </p>
           
        </div>
    </div> --}}

    <header class="header" id="header">
        <div class="header_toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>
        <h2 id="logo">CV mate</h2>
        <div class="header_img">
            <img src="/clogo.png" alt=" Nothing" />
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
    
    
        <nav class="nav">
            <div>
                <a id="" href="{{ route('admin.dashboard') }}" class="nav_logo">
                    <i class="fa-solid fa-user-gear superadmin"></i>
                    <span class="nav_logo-name">Admin</span>
                </a>
                <div class="nav_list" id="side_bar_list">
                    {{-- <a href="{{ route('admin.dashboard') }}" class="nav_link active">
                         <i class="bx bx-grid-alt nav_icon"></i>
                         <span class="nav_name">Dashboard</span>
                     </a> --}}
                    <a href="{{ route('coordinator.list') }}" id="new" class="nav_link">
                        <i class="fa-solid fa-users superadmin"></i>
                        <span class="nav_name"> Co-ordinator list</span>
                    </a>
                    <a href="{{ route('create.coordinator') }}" class="nav_link">
                        <i class="fa-solid fa-plus superadmin"></i>
                        <span class="nav_name">Create Co-ordinator</span>
                    </a>
                    {{-- <a href="{{ route('edit.coordinator') }}" class="nav_link">
                        <i class="fa-solid fa-pen superadmin"></i>
                        <span class="nav_name">Edit Co-ordinator</span>
                    </a> --}}
                    <a href="{{ route('student.leader') }}" class="nav_link">
                        <i class="fa-solid fa-ranking-star superadmin"></i>
                        <span class="nav_name">Leaderboard</span>
                    </a>
                    <a href="{{ route('student.view') }}" class="nav_link">
                        <i class="fa-solid fa-user-graduate superadmin"></i>
                        <span class="nav_name">Student View</span>
                    </a>
                    {{-- <a href="{{ route('admin.next') }}" class="nav_link">
                         <i class="fa-solid fa-building-user superadmin"></i>
                         <span class="nav_name">Department</span>
                     </a> --}}
                </div>
                <!-- </div> -->
                <a href="{{ route('student.logout') }}" class="nav_link">
                    <i class="fa-solid fa-right-from-bracket superadmin"></i>
                    <span class="nav_name">SignOut</span>
    
                </a>
        </nav>
        {{-- {{-- <script type="text/javascript">
            $(document).on('click', 'a nav_link', function() {
                $(this).addClass('nav_link active').siblings().removeClass('active')
            }) --}}
    
        <script type="text/javascript">
            // $(document).ready(function() {
    
            const linkColor = document.querySelectorAll('.nav_link');
            console.log(window.location.pathname);
            //const paths = ["/admin/coordinatorlist", "/admin/adminleader"];
    
            linkColor.forEach(linkTag => {
                const currentMatch = linkTag.href.endsWith(window.location.pathname);
                if (currentMatch) {
                    linkTag.classList.add('active')
                }
            })
    
    
            // $('a').click(function(e) {
            //     console.log("inn", e)
            //     console.log(sideBarItems);
            //     // $(this).addClass('active').siblings().removeClass('active')
            //     alert("hello");
            //     // $('#new').addClass('active');
            //     // event.preventDefault();
    
            // })
            // });
        </script>
    
    
    </div>
    
    
</body>
</html>
