<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Friend request</title>
    <link rel="stylesheet" href="/friendrequest.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
</head>
<body>
  @include('Student.studentheader')
    <nav class="navbar1 navbar-light bg-white">
        <form class="form-inline1">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-4 my-sm-0 button" type="submit">Search</button>
        </form>
      </nav>
      
      <div class="table">
          <table class="table table-striped" >
              <thead>
                <tr>
                  
                  <th scope="col">Sr no.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Enrollment</th>
                  <th scope="col">Department</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
   
                </tr>
              </thead>
              <tbody>
                @if($friend)

                @foreach($friend as $f)

                <tr>
                  <th scope="row">{{$j}}</th>
                  <td>{{$f['name']}}</td>
                  <td>{{$f['enrollment']}}</td>
                  <td>{{$f['department']}}</td>
                  <td><button class="btn btn-primary ">Accept</button></td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                <p hidden>{{$j++}}</p>
                @endforeach
                @endif
              </tbody>
              
            </table>
      </div>
</body>
</html>