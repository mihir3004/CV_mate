<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/studentview.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <script src="/superadmin.js"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <title>Admin | Student View</title>
</head>
@include('Admin/header')
<body id="body-pd">
   
    {{-- <!--Container Main start-->
    <nav class="navbar navbar-light bg-white">
        {{-- <form class="form-inline">
            <input class="form-control mr-sm-" name="search" value="{{ $search }}" type="search"
                placeholder="Search by Name or Enrollment" aria-label="Search">
            <button class="btn btn-outline-success my-4 my-sm-0 button" type="submit">Search</button>
        </form> --}}
    {{-- </nav> --}}
    <div class="table">
        <table class="table table-striped" id="AdminTabel">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Semester
                        <select name="semester" type="search">
                            <option value="All">All</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
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
                        <td>{{ $s['department'] }}</td>
                        <td>{{ $s['semester'] }}</td>
                        <td>{{ $s['status'] }}</td>
                        <td><a href="{{ route('student.detail', ['id' => $s['student_id']]) }}">View</a></td>
                        <td><a href="{{ route('delete.student', ['id' => $s['student_id']]) }}"><i
                                    class="fa-solid fa-trash icon fa-lg " style="margin-left:1.1em"></i></a></td>
                    </tr>
                    <p hidden> {{ $i++ }}</p>
                @endforeach
            </tbody>
        </table>
    </div>

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
    <!--Container Main end-->
</body>

</html>
