<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student | Profile</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/studentprofile.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    @include('sweetalert::alert')
  
    
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>CV MATE</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Let us Manage Your Resume</p>
                {{-- <li class="active"> --}}
                    <li>
                        <a href="{{ route('student.profile') }}">Profile</a>
                    </li>
                    {{-- <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Profile</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{ route('student.profile') }}">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a href="{{ route('student.certificateupload') }}">Certificate Upload</a>
                </li>
                <li>
                    <a href="{{ route('student.projectupload') }}">Project Upload</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">View</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="">Certificate</a>
                        </li>
                        <li>
                            <a href="#">Project</a>
                        </li>
                        <!-- <li>
                            <a href="#">Page 3</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="{{route('send.friendreq')}}">Friend</a>
                </li>
                <li>
                    <a href="{{route('accept.friendreq')}}">Accept Friend</a>
                </li>
                <li>
                    <a href="{{ route('student.leaderboard') }}">Leaderboard</a>
                </li>
                <li>
                    <a href="{{ route('student.skill') }}">Add skill</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="{{route('create.resume')}}" class="download">Generate CV</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('student.uploadimage')}}">Edit Image</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('delete.studentimage')}}">Remove Image</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('change.studentpassword')}}">Change Password</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('student.logout')}}" style="color:red">Sign out</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>


        <!-- Page Content  -->
        
            <!-- <h2>Collapsible Sidebar Using Bootstrap 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

            <h3>Lorem Ipsum Dolor</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
            <section class="section about-section gray-bg" id="about">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6">
                            <div class="about-text go-to">
                                @foreach($student as $s)
                                <h3 class="dark-color">{{$s['name']}}</h3>
                                {{-- <h6 class="theme-color lead">A Lead UX &amp; UI designer based in India</h6>
                                <p>I <mark>Design and Develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p> --}}
                                <div class="about-list">
                                    {{-- <div class="col-md-6"> --}}
                                        <div class="media">
                                            <label>Enrollment no.</label>
                                            <p>{{$s['enrollment']}}</p>
                                        </div>
                                        <div class="media">
                                            <label>Email</label>
                                            <p>{{$s['email']}}</p>
                                        </div>
                                        <div class="media">
                                            <label>Contact Number</label>
                                            <p>{{$s['contact_num']}}</p>
                                        </div>
                                        <div class="media">
                                            <label>Course</label>
                                            <p>{{$s['Course']}}</p>
                                        </div>
                                    {{-- </div> --}}
                                    {{-- <div class="col-md-6"> --}}
                                        <div class="media">
                                            <label>Department</label>
                                            <p>{{$s['department']}}</p>
                                        </div>
                                        <div class="media">
                                            <label>Semester</label>
                                            <p>{{$s['semester']}}</p>
                                        </div>
                                        <div class="media">
                                            <label>Gender</label>
                                            <p>{{$s['Gender']}}</p>
                                        </div>
                                        {{-- <div class="media">
                                            <label>Freelance</label>
                                            <p>Available</p>
                                        </div> --}}
                                    {{-- </div> --}}
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-avata r">
                                <img src="{{asset('/StudentImage/'.$s['photo'])}}" width="300px" height="350px" title="" alt="">
                                <!-- <img src="Dhruv.png" alt="" srcset=""> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="counter">
                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <div class="count-data text-center">
                                    <h6 class="count h2" data-to="500" data-speed="500">{{$count['certificate']}}</h6>
                                    <p class="m-0px font-w-600">Certificates</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="count-data text-center">
                                    <h6 class="count h2" data-to="150" data-speed="150">{{$count['project']}}</h6>
                                    <p class="m-0px font-w-600">Project Completed</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="count-data text-center">
                                    <h6 class="count h2" data-to="850" data-speed="850">{{$point}}</h6>
                                    <p class="m-0px font-w-600">Points</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="count-data text-center">
                                    <h6 class="count h2" data-to="190" data-speed="190">{{$count['friend']}}</h6>
                                    <p class="m-0px font-w-600">Friends</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>