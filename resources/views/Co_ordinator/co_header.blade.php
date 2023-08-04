





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>{{-- <link rel="stylesheet" href="/header.css"> --}}
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('coordinator.dashboard') }}">CV mate</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('coordinator.dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('coordinator.profile') }}">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Request
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('coordinator.srequest') }}">Student Request</a></li>
                  <li><a class="dropdown-item" href="{{ route('coordinator.crequest') }}">Certificate Request</a></li>
                  <li><a class="dropdown-item" href="{{ route('coordinator.prequest') }}">Project Request</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    View
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('studentc.view') }}">Student View</a></li>
                  <li><a class="dropdown-item" href="{{ route('coordinator.crequest') }}">Certificate View</a></li>
                  <li><a class="dropdown-item" href="{{ route('coordinator.prequest') }}">Project View</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('student.leader') }}">Leaderboard</a>
              </li>
            </ul>
            <div class="d-flex">
              {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
              <a href="{{ route('student.logout') }}">
                <button class="btn btn-outline-danger" type="submit">Sign out</button>
            </a>
              
            </div>
          </div>
        </div>
      </nav>
    

    
</html>












{{-- <link rel="stylesheet" href="/co_header.css">

<header class="header" id="header">
    <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
    </div>
    <h2 id="logo">CV Mates</h2>
    <div class="header_img">
        <img src="/clogo.png" alt=" Nothing" />
    </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav close">
        <div>
            <a href="{{ route('coordinator.dashboard') }}" class="nav_logo">
                <i class="fa-solid fa-user-gear superadmin"></i>
                <span class="nav_logo-name">Co-ordinator</span>
            </a>
            <div class="nav_list">
                <a href="{{ route('coordinator.profile') }}" class="nav_link">
                    
                    <i class="fa-regular fa-id-badge superadmin"></i>
                    <span class="nav_name">Profile</span>
                </a>
                    
                        <div class="sub-btn">
                            <a href="#" class="nav_link active">
                                <i class="bx bx-grid-alt nav_icon"></i>
                                <span class="nav_name">Request</span>
                                
                            </a>
                
                            <i class="fa-solid fa-caret-down arrow "></i>
              </div>
                    <div class="sub-menu ">
                        <a href="{{ route('coordinator.srequest') }}" class="nav_link dropdown">
                            <i class="fa-solid fa-user-graduate superadmin"></i>
                            <span class="nav_name">Student Request</span>
                
                        </a>
                        <a href="{{ route('coordinator.crequest') }}" class="nav_link">
                            <i class="fa-solid fa-certificate superadmin"></i>
                            <span class="nav_name">Certificate Request</span>
                        </a>
                        <a href="{{ route('coordinator.prequest') }}" class="nav_link">
                            <!-- <i class="fa-solid fa-sheet-plastic superadmin"></i> -->
                            <i class="fa-solid fa-file superadmin"></i>
                            <span class="nav_name">Project Request</span>
                        </a>
          </div>
          <div class="sub-btn">
            <a href="#" class="nav_link active1">
                <i class="bx bx-grid-alt nav_icon"></i>
                <span class="nav_name1">View </span>
                
            </a>
            
            <i class="fa-solid fa-caret-down arrow "></i>
</div>
    <div class="sub-menu ">
        <a href="{{ route('studentc.view') }}" class="nav_link dropdown">
            <i class="fa-solid fa-user-graduate superadmin"></i>
            <span class="nav_name">Student View</span>
            
        </a>
        <a href="{{ route('coordinator.crequest') }}" class="nav_link">
            <i class="fa-solid fa-certificate superadmin"></i>
            <span class="nav_name">Certificate View</span>
        </a>
        <a href="{{ route('coordinator.prequest') }}" class="nav_link">
            <!-- <i class="fa-solid fa-sheet-plastic superadmin"></i> -->
            <i class="fa-solid fa-file superadmin"></i>
            <span class="nav_name">Project View</span>
        </a>
</div>
                <a href="#" class="nav_link">
                    <i class="fa-solid fa-ranking-star superadmin"></i>
                    <span class="nav_name">LeaderBoard</span>
                </a>
               </div>
            <a href="{{ route('student.logout') }}" class="nav_link">
                <i class="fa-solid fa-right-from-bracket superadmin"></i>
                <span class="nav_name">SignOut</span>
            </a>
    </nav>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
        })
    })
</script> --}}
