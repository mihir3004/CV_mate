<link rel="stylesheet" href="/co_header.css">

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
                    <!-- <i class="bx bx-grid-alt nav_icon"></i> -->
                    <i class="fa-regular fa-id-badge superadmin"></i>
                    <span class="nav_name">Profile</span>
                </a>
                {{-- <a href="/htmlcode/superadmindashboard.html" class="nav_link">
                    <i class="bx bx-grid-alt nav_icon superadmin"></i>
                    <span class="nav_name">DashBoard</span>
                </a> --}}

                <!-- <div class="dropdown-fileld"> -->
                    
                        <div class="sub-btn">
                            <a href="#" class="nav_link active">
                                <i class="bx bx-grid-alt nav_icon"></i>
                                <span class="nav_name">Request</span>
                                
                            </a>
                            <!-- <i class="bx bx-grid-alt nav_icon dropdown"></i> -->
                            <i class="fa-solid fa-caret-down arrow "></i>
                        </div>
                    <div class="sub-menu ">
                        <a href="{{ route('coordinator.srequest') }}" class="nav_link dropdown">
                            <i class="fa-solid fa-user-graduate superadmin"></i>
                            <span class="nav_name">Student Request</span>
                            <!-- <i class="fa-solid fa-caret-down superadmin "></i>
                      <ul class="sub-menu">
                        <li> <a href="#">example1</a></li>
                        <li><a href="#">example2</a></li>
                        <li><a href="#">example3</a></li>
        
                      </ul> -->
                            <!-- </div> -->
        
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
            <!-- <i class="bx bx-grid-alt nav_icon dropdown"></i> -->
            <i class="fa-solid fa-caret-down arrow "></i>
          </div>
    <div class="sub-menu ">
        <a href="{{ route('studentc.view') }}" class="nav_link dropdown">
            <i class="fa-solid fa-user-graduate superadmin"></i>
            <span class="nav_name">Student View</span>
            <!-- <i class="fa-solid fa-caret-down superadmin "></i>
      <ul class="sub-menu">
        <li> <a href="#">example1</a></li>
        <li><a href="#">example2</a></li>
        <li><a href="#">example3</a></li>

      </ul> -->
            <!-- </div> -->

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
                    <!-- <i class="fa-solid fa-user-graduate superadmin"></i> -->
                    <i class="fa-solid fa-ranking-star superadmin"></i>
                    <span class="nav_name">LeaderBoard</span>
                </a>
                <!-- <a href="#" class="nav_link">
              <i class="fa-solid fa-filter superadmin"></i>
              <span class="nav_name">Filter</span>
            </a> -->
            </div>
            <!-- </div> -->
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
        // alert('hello');
    })
    </script>
