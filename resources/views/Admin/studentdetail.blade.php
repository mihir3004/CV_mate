<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student | Detail</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/studentprofile.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
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
    <div>
        
        <h3 class="heading" style="margin-bottom:1em">Certificates</h3>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Event </th>
                    <th scope="col">Type</th>
                    <th scope="col">Level</th>
                    <th>Certificate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($certificate as $c)
                    <th scope="row">{{$i}}</th>
                {{-- <td>{{$c['certificate_name']}}</td> --}}
                {{-- <td>{{$c['enrollment']}}</td> --}}
                <td>{{$c['event']}}</td>
                <td>{{$c['type']}}</td>
                <td>{{$c['level']}}</td>
                <td> <a href="/co-ordinator/viewpdf/{{$c['path']}}">view</a> </iframe></td>
                
                {{-- <td><a href="{{ route('approve.ccertificate', ['id' => $c['certificate_id']]) }}"><i class="fa-solid fa-check fa-lg"></i></i></a> --}}
                    {{-- </td> --}}
                    {{-- <td><a href="{{ route('delete.ccertificate', ['id' => $c['certificate_id']]) }}"><i class="fa-solid fa-trash icon fa-lg "></i></a></td> --}}
                    
                </tr>
                <p hidden>{{$i++}}</p>
            @endforeach
        </tbody>
    </table>
</div>
<div>
    <h3 class="heading" style="margin-top: 2em;margin-bottom:1em">Projects</h3>
    <table class="table">
        <thead class="table-light">
            <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Project Link</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Role</th>
                    <th scope="col">Company name</th>
                    <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <p hidden>{{$i=1}}</p>
            @foreach($project as $p)
            <th scope="row">{{$i}}</th>
            <td>{{$p['project_name']}}</td>
            <td><a href="{{$p['project_link']}}">{{$p['project_link']}}</a></td>
            <td>{{$p['project_duration']}}</td>
            <td>{{$p['role']}}</td>
            <td>{{$p['company_name']}}</td>
            <td>{{$p['description']}}</td>
           
            {{-- <td><a href="{{ route('approve.ccertificate', ['id' => $c['certificate_id']]) }}"><i class="fa-solid fa-check fa-lg"></i></i></a> --}}
                {{-- </td> --}}
                {{-- <td><a href="{{ route('delete.ccertificate', ['id' => $c['certificate_id']]) }}"><i class="fa-solid fa-trash icon fa-lg "></i></a></td> --}}
                
            </tr>
            <p hidden>{{$i++}}</p>
        @endforeach
    </tbody>
</table>

</div>
</section>

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