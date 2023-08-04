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

    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="/htmlcode/css/superadmindashboard.css"> --}}
    <title>Co-ordinator | Certificate Request</title>
</head>

<body id="body-pd">
    @include('Co_ordinator/co_header')

    {{-- <div class="input-group">
        <input name="search_coordinator" id="search_coordinator" type="search" class="form-control rounded"
            placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <button name="btn_coordinator" id="btn_coordinator" type="button"
            class="btn btn-outline-success">search</button>
    </div> --}}

    <div class="table">
        <table class="table table-striped" id="Co_or-Tabel">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Cretificate Type</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Level</th>
                    <th scope="col">File</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach($certificate as $c)
                <tr>
                    <td scope="row">{{$i}}</td>
                    <td>{{$c['certificate_name']}}</td>
                    <td>{{$c['enrollment']}}</td>
                    <td>{{$c['type']}}</td>
                    <td>{{$c['event']}}</td>
                    <td>{{$c['level']}}</td>
                    <td> <a href="/co-ordinator/viewpdf/{{$c['path']}}">{{$c['path']}}</a> </iframe></td>
                    <td><a href="{{ route('approve.ccertificate', ['id' => $c['certificate_id']]) }}"><i class="fa-solid fa-check fa-lg"></i></i></a></td>
                    <td><a href="{{ route('delete.ccertificate', ['id' => $c['certificate_id']]) }}"><i class="fa-solid fa-trash icon fa-lg "></i></a></td>
                    
                    
                </tr>
                <p hidden>{{$i++}}</p>
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
