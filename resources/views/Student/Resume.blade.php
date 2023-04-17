<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Responsive Resume UI Design in HTML and CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Resume.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
   
        @foreach($student as $s)
    <div class="resume_wrapper">
        <div class="resume_left">
            <div class="resume_image">
                <img src="{{asset('/StudentImage/'.$s['photo'])}}" alt="Resume_image">
            </div>
            <div class="resume_bottom">
                <div class="resume_item resume_namerole">
                    <div class="name">{{$s['name']}}</div>
                    <div class="role">DEVLOPER</div>
                </div>
                <div class="resume_item resume_profile">
                    <div class="resume_title">Profile</div>
                    
                    <div class="resume_info">
                        Course:{{$s['Course']}}<br />
                        <div class="resume_info">
                        Department:{{$s['department']}}<br />
                        <div class="resume_info">
                        Gender:{{$s['Gender']}}
                    </div> 
                    <hr style="color:red">
                <div class="resume_item resume_contact">
                    <div class="resume_title">Contact</div>
                    <div class="resume_info">
                        <div class="resume_subtitle">Phone</div>
                        <div class="resume_subinfo">{{$s['contact_num']}}</div>
                    </div>
                    <div class="resume_info">
                        <div class="resume_subtitle">Email</div>
                        <div class="resume_subinfo">{{$s['email']}}</div>
                    </div>
                </div>
                <div class="resume_item resume_skills">
                    <div class="resume_title">Certificate</div>
                    <div class="resume_info">
                        @foreach ($certificate as $c)
                            
                        <div class="skills_list">
                            <div class="skills_left">{{$c['certificate_name']}}</div>
                            
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach 
    <a href="{{route('download.pdf')}}"> <button >Download</button></a>  
</body>

</html>
