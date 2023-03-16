<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/11f84bb94c.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="form-box">
            <h1>Login</h1>

            <form action="{{ route('student.next') }}" method="POST">
                @csrf
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-id-card-clip"></i>
                        <input type="text" name="Enrollment" id="" placeholder="Enrollment / E-mail">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="Password" id="" placeholder="Password">
                    </div>

                    <div class="input-field ">
                        <p>Role:</p>
                        <div class="radio width">
                            <input type="radio" id="Sadmin" name="choice" value="Sadmin">
                            <label class="label" for="Sadmin">SuperAdmin</label>
                            <input type="radio" id="Student" name="choice" value="Student">
                            <label class="label" for="Student">Student</label>
                            <input type="radio" id="Admin" name="choice" value="Admin">
                            <label class="label" for="Admin">Admin</label>

                        </div>
                    </div>
                    <span style="color: red">
                        {!! session()->get('error') !!}


                    </span>
                    <p>Forget password? <a href="#">Click here!</a></p>
                    <p>Not Registered Yet? <a href="/signup">Register</a></p>

                    <div class="btn-form">
                        <button class="btn">Login</button>
                    </div>

                </div>
            </form>
        </div>
    </div>






</body>

</html>
