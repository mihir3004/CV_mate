<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <script src="https://kit.fontawesome.com/11f84bb94c.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="form-box">
            <h1 >Sign-up</h1>

            <form action="{{ route('student.create') }}" method="POST">
                @csrf
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-id-card-clip"></i>
                        <input type="text" name="Enrollment" id="" placeholder="Enrollment">
                    </div>
                    

                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="Name" id="" placeholder="Name">
                    </div>
                    
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="" placeholder="Email">
                    </div>
                    

                    <div class="input-field">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <input type="text" name="Contactnumber" id="" placeholder="Contact number">
                    </div>
                    
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="" placeholder="Password">
                    </div>
                    

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password_confirmation" id=""
                            placeholder="Confirm password">
                    </div>
                    
                    <div class="input-field">


                        {{-- <label for="Department">Department:</label> --}}
                        <i class="fa-solid fa-building"></i>
                        <select name="Department" id="">
                            <option selected hidden>Choose department</option>
                            @foreach ($department as $o)
                                <option value="{{ $o->department }}">{{ $o->department }}</option>
                            @endforeach

                            {{-- <option value="IT">Information Technology</option>
                            <option value="EC">Electronics and Communication</option>
                            <option value="EE">Electrical Engineering </option>
                            <option value="Chemical">Chemical Engineering </option>
                            <option value="Civil">Civil Engineering </option>
                            <option value="power">Power Electronics </option>
                            <option value="Mechanical">Mechanical Engineering</option>
                            <option value="EI">Electronics and Instrumentation Engineering</option>
                            <option value="IC"> Instrumentation and Control </option> --}}
                        </select>

                    </div>
                    
                    <div class="input-field">


                        {{-- <label for="Department">Department:</label> --}}
                        <i class="fa-solid fa-book-open"></i>
                        <select name="Semester" id="">
                            <option selected hidden>Choose semester</option>
                            {{-- @foreach ($department as $o)
                                <option value="{{ $o->department }}">{{ $o->department }}</option>
                            @endforeach --}}

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5</option>
                            <option value="6">6 </option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            {{-- <option value="IC"> Instrumentation and Control </option> --}}
                        </select>

                    </div>
                   
                    @if($errors->any())
                    <script>alert("{{ implode('',$errors->all(':message\n'))}}")</script>
                   
                  @endif

                    


                    {!! session()->get('error1') !!}
                    {!! session()->get('error2') !!}
                    <div class="input-field ">

                        <p class="role">Gender:</p>
                        <div class="radio width">

                            <input type="radio" id="Male" name="Gender" value="Male">
                            <label class="label" for="Male"><pre class="label1">   Male  </pre></label>
                            <input type="radio" id="Female" name="Gender" value="Female">
                            <label class="label" for="Female">
                                <pre class="label1">   Female  </pre>
                            </label>
                            <input type="radio" id="Other" name="Gender" value="Other">
                            <label class="label" for="Other"><pre class="label1">   Other  </pre></label>


                        </div>

                    </div>
                    <div class="input-field ">

                        <p class="role">Course:</p>
                        <div class="radio width">

                            <input type="radio" id="BE" name="Course" value="BE">
                            <label  for="BE"><pre class="label1">   BE   </pre></label>
                            <input type="radio" id="ME" name="Course" value="ME">
                            <label  for="ME">
                                <pre class="label1">   ME   </pre>
                            </label>
                            


                        </div>

                    </div>`
                    <div class="btn-form">
                        <button class="btn">Register</button>
                    </div>
                    <p style="margin-left:7em">Already Have an Account ? <a
                            href="{{ route('student.login') }}">Login</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
