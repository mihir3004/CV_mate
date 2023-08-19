<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/superadminleader.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <script src="/superadmin.js"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <title>Admin | LeaderBoard</title>
</head>

<body id="body-pd">
    @include('Admin/header')
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
    {{-- <form class="form-inline">
        <input class="form-control mr-sm-" name="search" value="{{$search}}" type="search"
            placeholder="Search by Name or Enrollment" aria-label="Search">
        <button class="btn btn-outline-success my-4 my-sm-0 button" type="submit">Search</button>
    </form> --}}
    {{-- <div class="top-button mr-1 ">
        <button class="btn btn-primary ">Search</button>
        <button class="btn btn-primary ">Search</button>
        <button class="btn btn-primary ">Search</button>
    </div> --}}

    <div class="container">    
        <h2 style="margin-top:2em;text-align:center">LeaderBoard</h2>
    <div class="table">
        <table class="table table-striped" id='AdminTabel'>
            <thead>
                <tr>

                    <th scope="col">Sr No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Department</th>
                    {{-- <th scope="col"></th> --}}
                    <th scope="col">Semester <select name="Sem">
                            <option value="All">All</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select></th>
                    <th scope="col">Point</th>

                </tr>
            </thead>
            <tbody>
                @foreach($student1 as $s)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$s['name']}}</td>
                    <td>{{$s['enrollment']}}</td>
                    <td>{{$s['department']}}</td>
                    <td>
                        {{$s['semester']}}
                    </td>
                    <td>{{$s['point']}}</td>
                </tr>
                <p hidden>{{$i++}}</p>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <!--Container Main end-->
    <script
    type="text/javascript"
    charset="utf8"
    src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"

></script>

<script
type="text/javascript"
charset="utf8"
src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js">
</script>

<script>
$(function() {
$("#AdminTabel").dataTable();
});
</script>
 




</body>

</html>

