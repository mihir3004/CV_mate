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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://kit.fontawesome.com/5014f23600.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5014f23600.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="/htmlcode/css/superadmindashboard.css"> --}}
    <title>Co-Ordinator | Profile</title>
</head>

<body id="body-pd">
    @include('Co_ordinator/co_header')
    <!--Container Main start-->
    <div class="Profile">

        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
            <div class="card p-4 Profile">
                <div class=" image d-flex flex-column justify-content-center align-items-center"> <button
                        class="btn btn-secondary">
                        <img src="/htmlcode/106f796d24fe56272816906e71b08a49.jpg" height="100" width="100" />
                    </button> <span class="name mt-3">
                        @foreach ($coordinator as $c)
                            {{ $c['name'] }}

                    </span>
                    <span class="idd">{{ $c['email'] }}</span>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                        <span class="idd1">{{ $c['department'] }}</span>
                        <!-- <span><i class="fa fa-copy"></i></span>  -->
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                        <span class="number">{{ $count }}
                            <span class="follow">Student count</span></span>
                    </div>
                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Image</button>
                    </div>
                    {{-- <div class="text mt-3">
                        <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital
                            artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span>
                    </div> --}}
                    <!-- <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                     <span><i class="fa fa-twitter"></i></span>
                            <span><i class="fa fa-facebook-f"></i></span>
                             <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span>
                </div> -->
                    <div class=" px-2 rounded mt-4 date "> <span class="join">Joined
                            {{ $c['created_at']->toFormattedDateString() }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Container Main end-->
</body>

</html>
