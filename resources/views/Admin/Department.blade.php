<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/htmlcode/css/Department.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <script src="/javascript/superadmin.js"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle">
      <i class="bx bx-menu" id="header-toggle"></i>
    </div>
    <h2 id="logo">CV mate</h2>
    <div class="header_img">
      <img src="https://i.imgur.com/hczKIze.jpg" alt="" />
    </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="/htmlcode/superadmindashboard.html" class="nav_logo">
          <i class="fa-solid fa-user-gear superadmin"></i>
          <span class="nav_logo-name">Admin</span>
        </a>
        <div class="nav_list">
          <a href="/htmlcode/superadmindashboard.html" class="nav_link active">
            <i class="bx bx-grid-alt nav_icon"></i>
            <span class="nav_name">Dashboard</span>
          </a>
          <a href="#" class="nav_link">
            <i class="fa-solid fa-users superadmin"></i>
            <span class="nav_name"> Co-ordinator list</span>
          </a>
          <a href="/htmlcode/createadmin.html" class="nav_link">
            <i class="fa-solid fa-plus superadmin"></i>
            <span class="nav_name">Create Co-ordinator</span>
          </a>
          <a href="#" class="nav_link">
            <i class="fa-solid fa-ranking-star superadmin"></i>
            <span class="nav_name">Leaderboard</span>
          </a>
          <a href="#" class="nav_link">
            <i class="fa-solid fa-user-graduate superadmin"></i>
            <span class="nav_name">Student View</span>
          </a>
          <a href="#" class="nav_link">
            <i class="fa-solid fa-building-user superadmin"></i>
            <span class="nav_name">Department</span>
          </a>
        </div>
        <!-- </div> -->
        <a href="#" class="nav_link">
          <i class="fa-solid fa-right-from-bracket superadmin"></i>
          <span class="nav_name">SignOut</span>
        </a>
    </nav>
  </div>
  <!--Container Main start-->
  <!-- <form>
        <div class="create">
            <div class="form-group">
                <label for="exampleInputEmail1">Admin Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">ConfirmPassword</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
              <label for="">Department</label>
              <select name="Department" class="form-control">
                <option>Default select</option>
                <option>Default select</option>
                <option>Default select</option>
              </select>
            </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Admin Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
      </form> -->
      <div class="create">
  <div class="m-4">
    <form action="/examples/actions/confirmation.php" method="post">
      <div class="row mb-3">
        <p>
       <label for="inputEmail" class="col-sm-2 col-form-label">Department Name</label>
        </p>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail" placeholder="Department Name" required>
        </div>
      </div>

      <div class="row button">
          <button type="submit" class="btn btn-primary ">Add</button>
      </div>
    </form>
  </div>
</div>
  <!--Container Main end-->
</body>

</html>