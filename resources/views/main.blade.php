<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- ====font===== -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- ======css======= -->
    <link href="{{ asset('mainstyle.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>Dashboard IoT</title>
    <style>
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #f8f9fa;
        }

        /* Container for toggle and title */
        .topbar .left-section {
            display: flex;
            align-items: center;
            gap: 15px; /* Spacing between toggle and title */
        }
        
        .topbar .title h3 {
            margin: 0;
        }
        
        .topbar .right-icons {
            display: flex;
            align-items: center;
            gap: 40px;
            padding-right : 40px !important;
        }
        
        .topbar .notification-icon {
            font-size: 1.5em;
            cursor: pointer;
        }
        
        .topbar .profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }
        
        .topbar .profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }
        
        .topbar .profile-info {
            display: flex;
            flex-direction: column;
        }
        
        .topbar .profile-info .name {
            font-weight: bold;
        }
        
        .topbar .profile-info .email {
            font-size: 0.85em;
            color: grey;
        }

        .toggle {
            cursor: pointer;
            font-size: 1.5em;
        }
    </style>
</head>

<body>

    <!-- ============NAVIGATION SIDEBAR====================== -->
    <div class="container-sidebar">
        <div class="navigation">
            <ul>
                <li class="logo pt-3">
                    <a href="#">
                        <span class="icon">
                        <img src="{{asset('img/dashboardd.png')}}" alt="">
                        </span>
                        <span class="title">DASHBOARD</span>
                    </a>
                </li>

                <li>
                    <a href="/">
                        <span class="icon">
                            <i class="fa-regular fa-file-lines"></i>
                        </span>
                        <span class="title">Configuration</span>
                    </a>
                </li>

                <li>
                    <a href="/visualization">
                        <span class="icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </span>
                        <span class="title">Visualization</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="topbar position-sticky">
            <div class="left-section">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="title align-items-center justify-content-center">
                <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb align-items-center justify-content-center">
                        <li class="breadcrumb-item font-weight-bolder"> <h3>IoT DASHBOARD ></li></h3>
                        <li class="breadcrumb-item active" aria-current="page"><span style="color:grey; font-size:25px">Config</span></li>
                    </ol>
                </nav>
                </div>
            </div>


            <div class="right-icons gap-7 pr-4">
                <i class="fa-solid fa-bell notification-icon"></i>
                <div class="profile">
                    <img src="{{asset('img/customer01.jpg')}}" alt="Profile Picture">
                    <div class="profile-info">
                        <span class="name">Admin</span>
                        <span class="email">lorem@ipsum.com</span>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>

    <script src="{{ asset('script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0sG1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>