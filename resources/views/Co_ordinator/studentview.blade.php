<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>Co-ordinator| Student View</title>
</head>
@include('sweetalert::alert')   
@include('Co_ordinator/co_header')
<body id="body-pd">
   
    <!--Container Main start-->
    {{-- <nav class="navbar navbar-light bg-white">
        <form class="input-group  ">
            <input class="form-control " name="search" value="{{ $search }}" type="search"
                placeholder="Search by Name or Enrollment" aria-label="Search">
            <button class="btn btn-outline-success my-4 my-sm-0 button" type="submit">Search</button>
        </form>
    </nav> --}}
    <div class="container">

        <h2 style="margin-top:2em;text-align:center">Student View</h2>
    <div class="table">
        <table class="table table-striped" id="Co_or-Tabel">
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
                        <td scope="row">{{ $i }}</td>
                        <td>{{ $s['name'] }}</td>
                        <td>{{ $s['enrollment'] }}</td>
                        <td>{{ $s['email'] }}</td>
                        <td>{{ $s['Gender'] }}</td>
                        <td>{{ $s['Course'] }}</td>
                        <td>{{ $s['semester'] }}</td>
                        <td>{{ $s['status'] }}</td>
                        <td><a onclick="return confirmation(event)" href="{{ route('delete.cstudent', ['id' => $s['student_id']]) }}"  ><i
                             class="fa-solid fa-trash icon fa-lg " style="margin-left:1.1em"></i></a></td>
                    </tr>
                    <p hidden> {{ $i++ }}</p>
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
$("#Co_or-Tabel").dataTable();
});

$("a").click(function(e)

{
    e.preventDefault();
})


function confirmation(event)
{
    // return false;
    // event.preventDefault();
    var url=event.currentTarget.getAttribute('href');
    console.log(url);
    swal({
        title: "Are you sure?",
        text: "Once deleted, You will not be able to recover the data",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        closeOnConfirm:false
    })
    .then((willDelete) => {
        if (willDelete) {
            window.location=url;
           
            swal("Student data has been deleted!", {
                icon: "success",
                
            });
        } else {
            // swal("Your imaginary file is safe!");
            event.preventDefault();
        }
    })
}

</script>
</body>

</html>
