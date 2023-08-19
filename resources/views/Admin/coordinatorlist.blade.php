<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   {{-- <link rel="stylesheet" href="/coordinaterlist.css"/> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <script src="/superadmin.js"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>

    <title>Admin | Co-ordinator-List</title>
</head>

<body id="body-pd">
    @include('sweetalert::alert')
    {{-- @if(session('error'))

        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading"></h4>
          <p>"Coordinator has been created"</p>
          <p class="mb-0"></p>
        </div>
    @endif --}}

    {{-- <div class="container1">

        <div class="navbar">
    <img class="img" src="/OIP.jpeg" alt="" srcset="">

    <div class="button">
        <!-- <button class="btn">Login</button>
        <button class="btn">sign-up</button> -->
    </div>
    <p class="banner">
        VISHWKARMA GOVERMENT ENGINEERING COLLEGE,
        CHANDKHEDA, AHEMDABAD
    </p>
   
</div> --}}
{{-- </div> --}}
    @include('Admin/header')
    <!--Container Main start-->

<div class="container">

    <h2 style="margin-top:2em;text-align:center">Co-ordinator-List</h2>
    <div class="table">
        <table class="table table-striped" id="AdminTabel">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coordinator as $c)
                    <tr>

                        <th scope="row">{{ $i }}</th>
                        <td>{{ $c['name'] }}</td>
                        <td>{{ $c['email'] }}</td>
                        <td>{{ $c['department'] }}</td>
                        <td>{{ $c['contact_number'] }}</td>
                        <td><a href="{{ route('edit.coordinator', ['id' => $c['co-ordinator_id']]) }}"><i
                                    class="fa-solid fa-pen-to-square fa-lg"></i></a>
                        </td>
                        <td><a href="{{ route('delete.coordinator', ['id' => $c['co-ordinator_id']]) }}"><i
                                    class="fa-solid fa-trash icon fa-lg "></i></a></td>
                    </tr>
                    <p hidden>{{ $i++ }}</p>
                @endforeach
            </tbody>
        </table>
       
    </div>
</div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function{
            let table = new DataTable('#AdminTabel');
        })
    </script> --}}
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
