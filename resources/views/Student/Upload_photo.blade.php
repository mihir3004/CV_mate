<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .container{
            margin-top: 5em;
        }
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                {{-- <button type="button" id="sidebarCollapse" class="btn btn-info" onclick="inside()">
                    <i class="fas fa-align-left xyz"></i>
                    <span class="xyz">Toggle Sidebar</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('student.profile')}}"><i class="fa-solid fa-arrow-left"></i>  Go to Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-4 border border-primary">
                <h2 class="mb-5 border-bottom pb-3">Upload Image</h2>
                <form action="{{route('save.studentimage')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image" class="form-control"  >
                    <span style="color: red">
                        @error('image')
                        {{$message}}    
                        @enderror
                    </span>
                    <div class="text-end">
                        <button class="btn btn-primary mt-3 ">Upload</button>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function updatePreview(input, target) {
        let file = input.files[0];
        let reader = new FileReader();
        
        reader.readAsDataURL(file);
        reader.onload = function () {
            let img = document.getElementById(target);
            // can also use "this.result"
            img.src = reader.result;
        }
    }
</script>
</body>
</html>