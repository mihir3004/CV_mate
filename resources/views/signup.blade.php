<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    <script src="https://kit.fontawesome.com/11f84bb94c.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="form-box">
            <h1>Sign-up</h1>

            <form action="{{ route('student.create') }}" method="POST">
                @csrf
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-id-card-clip"></i>
                        <input type="text" name="Enrollment" id="" placeholder="Enrollment">
                    </div>
                    <span style="color: red">
                        @error('Enrollment')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="Name" id="" placeholder="Name">
                    </div>
                    <span style="color: red">
                        @error('Name')
                            {{ $message }}
                        @enderror
                    </span>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="" placeholder="Email">
                    </div>
                    <span style="color: red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="input-field">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <input type="text" name="Contactnumber" id="" placeholder="Contact number">
                    </div>
                    <span style="color: red">
                        @error('Contactnumber')
                            {{ $message }}
                        @enderror
                    </span>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="" placeholder="Password">
                    </div>
                    <span style="color: red">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password_confirmation" id=""
                            placeholder="Confirm password">
                    </div>
                    <span style="color: red">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </span>
                    <div class="input-field">


                        {{-- <label for="Department">Department:</label> --}}
                        <i class="fa-solid fa-building"></i>
                        <select name="Department" id="">
                            <option selected hidden>Choose department</option>
                            <option value="Computer">Computer Engineering</option>
                            <option value="IT">Information Technology</option>
                            <option value="EC">Electronics and Communication</option>
                            <option value="EE">Electrical Engineering </option>
                            <option value="Chemical">Chemical Engineering </option>
                            <option value="Civil">Civil Engineering </option>
                            <option value="power">Power Electronics </option>
                            <option value="Mechanical">Mechanical Engineering</option>
                            <option value="EI">Electronics and Instrumentation Engineering</option>
                            <option value="IC"> Instrumentation and Control </option>
                        </select>

                    </div>
                    <span style="color: red">
                        @error('Department')
                            {{ $message }}
                        @enderror
                    </span>

                    <p>Already Have an Account ? <a href="{{ route('student.login') }}">Login</a></p>
                    {!! session()->get('error1') !!}
                    {!! session()->get('error2') !!}
                    <div class="btn-form">
                        <button class="btn">Register</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</body>

</html>
