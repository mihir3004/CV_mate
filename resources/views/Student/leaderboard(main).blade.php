<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Leaderboard</title>
    <link rel="stylesheet" href="/leaderboard(main).css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
</head>
<body>
  @include('Student/studentheader')
    <nav class="navbar navbar-light bg-white"style="margin-top: 1em">
        <form class="form-inline" >
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-4 my-sm-0 button" type="submit">Search</button>
        </form>
      </nav>
      
      <div class="table">
          <table class="table table-striped" >
              <thead>
                <tr>
                  
                  <th scope="col">Rank</th>
                  <th scope="col">Name</th>
                  <th scope="col">Enrollment</th>
                  <th scope="col">Department</th>
                  <th scope="col">Semester</th>
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
</body>
</html>