<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="stylesheet" href="/studentview.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <script src="/superadmin.js"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <style>.fa-trash:hover{
        color: red;
    }
    .fa-trash{
        color: black;
    }
    .form-inline{
        margin-left: 50em;
        display: flex;
    }
    .btn
    {
        margin-left: 1em
    }
    </style>
    <title>Co-ordinator| Student View</title>
</head>

@include('Co_ordinator/co_header')
<body id="body-pd">
   
    <!--Container Main start-->
    <nav class="navbar navbar-light bg-white">
        <form class="input-group  ">
            <input class="form-control " name="search" value="{{ $search }}" type="search"
                placeholder="Search by Name or Enrollment" aria-label="Search">
            <button class="btn btn-outline-success my-4 my-sm-0 button" type="submit">Search</button>
        </form>
    </nav>
    <div class="table">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Course</th>
                    <th scope="col">Semester
                        <select name="semester" type="search" onchange="window.location.href=this.value;">
                            <option value="">{{$semester}}</option>
                            <option value="{{ route('studentc.view', ['semester' =>''])}}">All</option>
                            <option value="{{ route('studentc.view', ['semester' => '1']) }}">1</option>
                            <option value="{{ route('studentc.view', ['semester' => '2'])}}">2</option>
                            <option value="{{ route('studentc.view', ['semester' => '3'])}}">3</option>
                            <option value="{{ route('studentc.view', ['semester' => '4'])}}">4</option>
                            <option value="{{ route('studentc.view', ['semester' => '5'])}}">5</option>
                            <option value="{{ route('studentc.view', ['semester' => '6'])}}">6</option>
                            <option value="{{ route('studentc.view', ['semester' => '7'])}}">7</option>
                            <option value="{{ route('studentc.view', ['semester' => '8'])}}">8</option>
                        </select>
                    </th>
                    <th scope="col">Status</th>
                    <th scope="col">Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $s)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $s['name'] }}</td>
                        <td>{{ $s['enrollment'] }}</td>
                        <td>{{ $s['email'] }}</td>
                        <td>{{ $s['Gender'] }}</td>
                        <td>{{ $s['Course'] }}</td>
                        <td>{{ $s['semester'] }}</td>
                        <td>{{ $s['status'] }}</td>
                        <td><a href="{{ route('delete.cstudent', ['id' => $s['student_id']]) }}"><i
                                    class="fa-solid fa-trash icon fa-lg " style="margin-left:1.1em"></i></a></td>
                    </tr>
                    <p hidden> {{ $i++ }}</p>
                @endforeach
            </tbody>
        </table>
    </div>
    <!--Container Main end-->
</body>

</html>
