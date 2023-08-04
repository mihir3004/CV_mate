<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    {{-- <link rel="stylesheet" href="/header.css"> --}}
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('admin.dashboard') }}">CV mate</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('coordinator.list') }}">Co-ordinator list</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('create.coordinator') }}">Create Co-ordinator</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}
              {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{ route('student.leader') }}">Leaderboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('student.view') }}">Student view</a>
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
    

    {{-- <header class="header" id="header">
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
                 
                    <a href="{{ route('coordinator.list') }}" id="new" class="nav_link">
                        <i class="fa-solid fa-users superadmin"></i>
                        <span class="nav_name"> Co-ordinator list</span>
                    </a>
                    <a href="{{ route('create.coordinator') }}" class="nav_link">
                        <i class="fa-solid fa-plus superadmin"></i>
                        <span class="nav_name">Create Co-ordinator</span>
                    </a>
                   
                    <a href="{{ route('student.leader') }}" class="nav_link">
                        <i class="fa-solid fa-ranking-star superadmin"></i>
                        <span class="nav_name">Leaderboard</span>
                    </a>
                    <a href="{{ route('student.view') }}" class="nav_link">
                        <i class="fa-solid fa-user-graduate superadmin"></i>
                        <span class="nav_name">Student View</span>
                    </a>
                   
                </div>
                <!-- </div> -->
                <a href="{{ route('student.logout') }}" class="nav_link">
                    <i class="fa-solid fa-right-from-bracket superadmin"></i>
                    <span class="nav_name">SignOut</span>
    
                </a>
        </nav>
        
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
    
    
         
        </script>
    
    
    </div>
    
    
</body> --}}
</html>
