<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/11f84bb94c.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="form-box">
            <h1>Login</h1>

            <form action="{{ route('student.auth') }}" method="POST">
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

                        <p class="role">Role:</p>
                        <div class="radio width">

                            <input type="radio" id="Admin" name="choice" value="Admin">
                            <label class="label" for="Admin">Admin</label>
                            <input type="radio" id="Co-ordinator" name="choice" value="Co-ordinator">
                            <label class="label" for="Co-ordinator">
                                <pre class="label1">Co-ordinator</pre>
                            </label>
                            <input type="radio" id="Student" name="choice" value="Student">
                            <label class="label" for="Student">Student</label>


                        </div>

                    </div>
                    <span style="color: red">
                        {!! session()->get('error') !!}
                    </span>
                    <p class="label1"><a href="{{ route('forget.password') }}">Forget password?</a></p>


                    <div class="btn-form">
                        <button class="btn">Login</button>
                    </div>
                    <p class="n-register">Not Registered Yet? <a href="/signup">Register</a></p>


                </div>
            </form>
        </div>
    </div>
</body>

</html>
