<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/friend.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <script src="/superadmin.js"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <title>Admin | FriendRequest</title>
</head>

<body id="body-pd">
    @include('Student/studentheader')
    <!--Container Main start-->
    {{-- <nav class="navbar navbar-light bg-white">
        <form class="form-inline"> --}}
    {{-- <button class="btn btn-primary ic1">Search</button>
            <button class="btn btn-primary ic2">Search</button>
            <button class="btn btn-primary  ic3">Search</button> --}}
    {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-4 my-sm-0 button" type="submit">Search</button>
        </form>
    </nav> --}}
    <form class="form-inline">
        <input class="form-control mr-sm-" name="search" value="{{$search}}" type="search"
            placeholder="Search by Name or Enrollment" aria-label="Search">
        <button class="btn btn-outline-success my-4 my-sm-0 button" type="submit">Search</button>
    </form>
    {{-- <div class="top-button mr-1 ">
        <button class="btn btn-primary ">Search</button>
        <button class="btn btn-primary ">Search</button>
        <button class="btn btn-primary ">Search</button>
    </div> --}}


    <div class="table">
        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">Sr No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Department</th>
                    {{-- <th scope="col">Semester <select name="Sem">
                            <option value="All">All</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select></th> --}}
                    <th scope="col">Point</th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($friend as $f)
                <tr>

                    <th scope="row">{{$i}}</th>
                    <td>{{$f['name']}}</td>
                    <td>{{$f['enrollment']}}</td>
                    <td>{{$f['department']}}</td>
                    <td>{{$f['point']}}</td>
                    <td> <a href="{{route('friend.request',['id' => $f['enrollment']])}}"><button class="btn btn-primary">Add Friend</button></a></td>

                </tr>
                <p hidden>{{$i++}}</p>
                @endforeach
            </tbody>
        </table>
    </div>
    <!--Container Main end-->
</body>

</html>
