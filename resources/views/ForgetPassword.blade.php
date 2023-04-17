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
            <h1>Change Password</h1>

            <form action="{{ route('student.auth') }}" method="POST">
                @csrf
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-id-card-clip"></i>
                        <input type="text" name="enrollment" id="" placeholder="Enter Your Enrollment">
                    </div>
                    <div class="input-group">
                        <div class="input-field">
                            <i class="fa-solid fa-id-card-clip"></i>
                            <input type="email" name="email" id="" placeholder="Enter Your Email">
                        </div>

                        {{-- <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="" name="" id="" placeholder="New Password">
                    </div>

                    <div class="input-field ">

                        <p class="role">Role:</p>
                        <div class="radio width">

                            <input type="radio" id="Admin" name="choice" value="Admin">
                            <label class="label" for="Admin">Admin</label>
                            <input type="radio" id="Co-ordinator" name="choice" value="Co-ordinator">
                            <label class="label" for="Co-ordinator">
                                <pre style="font-family: sans-sarif">Co-ordinator</pre>
                            </label>
                            <input type="radio" id="Student" name="choice" value="Student">
                            <label class="label" for="Student">Student</label>


                        </div> --}}

                    </div>
                    {{-- <span style="color: red">
                    {!! session()->get('error') !!}
                </span>
                <p><a href="#">Forget password?</a></p>
 --}}

                    <div class="btn-form">
                        <button class="btn">Send</button>
                    </div>
                    {{-- <p class="n-register"> <a href="/login">Login</a></p> --}}
                    <a href="/login">Login</a>

                </div>
            </form>
        </div>
    </div>
</body>

</html>
