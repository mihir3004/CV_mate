<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/stdRequest.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <script src="/superadmin.js"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>

    <title>Co-Ordinator | Student Request</title>
    <style>
        .form-control{
            width: 50%;
        }
    </style>
</head>

<body id="body-pd">

    @include('Co_ordinator/co_header')

    {{-- <div class="input-group">
        <input name="search_std_req" id="std_req" type="search" class="form-control rounded" placeholder="Search by Name or Enrollment"
            aria-label="Search" aria-describedby="search-addon" />
        <button name="btn_std_req" id="btn_std_req" type="button" class="btn btn-outline-success">Search</button>
    </div> --}}

    <div class="table">
        <table class="table table-striped" id="Co_or-Tabel">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    @foreach ($student as $s)
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $s['name'] }}</td>
                        <td>{{ $s['email'] }}</td>
                        <td>{{ $s['enrollment'] }}</td>
                        <td>{{ $s['semester'] }}</td>
                        <td>{{ $s['contact_num'] }}</td>
                        <td><a href="{{ route('student.approve', ['id' => $s['student_id']]) }}"><i
                                    class="fa-solid fa-check fa-lg"></i></i></a>
                        </td>
                        <td><a href="{{ route('delete.cstudent', ['id' => $s['student_id']]) }}"><i
                                    class="fa-solid fa-trash icon fa-lg "></i></a></td>
                    
                </tr>
                <p hidden>{{ $i++ }}</p>
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
$("#Co_or-Tabel").dataTable();
});
</script>


    <!--Container Main end-->
</body>

</html>
