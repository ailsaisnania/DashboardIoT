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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ======css======= -->
    <link href="{{ asset('mainstyle.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>Dashboard IoT</title>
    <style>
        dialog::backdrop {
            
        }
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
                    <a href="/visualization2">
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
    
                <button id="openModalBtn" style="" type="button" class="btn bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-bell notification-icon"></i>
                </button>


                <div class="profile">
                    <img src="{{asset('img/customer01.jpg')}}" alt="Profile Picture">
                    <div class="profile-info">
                        <span class="name">Admin</span>
                        <span class="email">lorem@ipsum.com</span>
                    </div>
                </div>

            </div>
        </div>

        <div id="modal" class="modal flex container-fluid">

            <div class="modal-content p-xl-4 position-absolute max-w-screen-md container-fluid w-max bg-gray-50" style="width:26%; height:500px;border-radius:40px">
                
                <span id="closeModalBtn" class="close float cursor-pointer font-weight-bold" ></span>
                <h5 class="font-weight-bold">Notifications</h5>

                    <div class="items-notif container-fluid flex flex-row justify-start align-items-center mt-xl-3 mt-md-3 mt-sm-2 p-xl-2 p-md-2 p-sm-1">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/spam.png" alt="spam"/>
                        <div class="items">
                            <h6 id="notifMessage"class=" font-bold">
                            </h6>
                            <p id="notifTime"style="font-size: 15px; color:var(--grey)">
                                
                            </p>
                        </div>
                    </div>

                    <!-- 

                    <div class="items-notif container-fluid flex flex-row justify-start align-items-center mt-xl-3 mt-md-3 mt-sm-2 p-xl-2 p-md-2 p-sm-1">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/spam.png" alt="spam"/>
                        <div class="items">
                            <h6 class=" font-bold">
                                Warning! The fire sensor has exceeded the threshold
                            </h6>
                            <p style="font-size: 15px; color:var(--grey)">
                                yesterday, 00.21
                            </p>
                        </div>
                    </div>

                    <div class="items-notif container-fluid flex flex-row justify-start align-items-center mt-xl-3 mt-md-3 mt-sm-2 p-xl-2 p-md-2 p-sm-1">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/spam.png" alt="spam"/>
                        <div class="items">
                            <h6 class=" font-bold">
                                Warning! The fire sensor has exceeded the threshold
                            </h6>
                            <p style="font-size: 15px; color:var(--grey)">
                                yesterday, 00.21
                            </p>
                        </div>
                    </div>

                    <div class="items-notif container-fluid flex flex-row justify-start align-items-center mt-xl-3 mt-md-3 mt-sm-2 p-xl-2 p-md-2 p-sm-1">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/spam.png" alt="spam"/>
                        <div class="items">
                            <h6 class=" font-bold">
                                Warning! The fire sensor has exceeded the threshold
                            </h6>
                            <p style="font-size: 15px; color:var(--grey)">
                                yesterday, 00.21
                            </p>
                        </div>
                    </div>

                    <div class="items-notif container-fluid flex flex-row justify-start align-items-center mt-xl-3 mt-md-3 mt-sm-2 p-xl-2 p-md-2 p-sm-1">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/spam.png" alt="spam"/>
                        <div class="items">
                            <h6 class=" font-bold">
                                Warning! The fire sensor has exceeded the threshold
                            </h6>
                            <p style="font-size: 15px; color:var(--grey)">
                                yesterday, 00.21
                            </p>
                        </div>
                    </div>

                    <div class="items-notif container-fluid flex flex-row justify-start align-items-center mt-xl-3 mt-md-3 mt-sm-2 p-xl-2 p-md-2 p-sm-1">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/spam.png" alt="spam"/>
                        <div class="items">
                            <h6 class=" font-bold">
                                Warning! The fire sensor has exceeded the threshold
                            </h6>
                            <p style="font-size: 15px; color:var(--grey)">
                                yesterday, 00.21
                            </p>
                        </div>
                    </div>

                    <div class="items-notif container-fluid flex flex-row justify-start align-items-center mt-xl-3 mt-md-3 mt-sm-2 p-xl-2 p-md-2 p-sm-1">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/spam.png" alt="spam"/>
                        <div class="items">
                            <h6 class=" font-bold">
                                Warning! The fire sensor has exceeded the threshold
                            </h6>
                            <p style="font-size: 15px; color:var(--grey)">
                                yesterday, 00.21
                            </p>
                        </div>
                    </div> -->
            </div>
            </div>

        @yield('content')
    </div>

        
    <script>
        // Simulasi data yang datang, misalnya dari sensor
let sensorData = 0; // Nilai data sensor yang berubah
let threshold = 700; // Batas threshold yang ditentukan

// Fungsi untuk memeriksa apakah data telah melebihi threshold
function checkThreshold() {
    if (sensorData > threshold) {
        showNotification();
    }
}

// Fungsi untuk menampilkan notifikasi
function showNotification() {
    const notifMessage = document.getElementById('notifMessage');
    const notifTime = document.getElementById('notifTime');
    
    // Menampilkan pesan dan waktu notifikasi
    notifMessage.innerText = "Warning! The fire sensor has exceeded the threshold";
    notifTime.innerText = new Date().toLocaleString(); // Waktu saat notifikasi muncul

    // Menampilkan modal notifikasi
    const modal = document.querySelector('.modal-content');
    modal.style.display = 'block';
}

// Fungsi untuk menutup modal notifikasi
document.getElementById('closeModalBtn').addEventListener('click', function() {
    const modal = document.querySelector('.modal-content');
    modal.style.display = 'none';
});

// Simulasi perubahan data (misalnya data sensor berubah setiap detik)
setInterval(function() {
    sensorData += Math.floor(Math.random() * 20); // Simulasi perubahan data
    console.log(sensorData); // Menampilkan data untuk debugging
    checkThreshold(); // Memeriksa apakah data melebihi threshold
}, 1000); // Update setiap detik

    </script>
    <script src="{{ asset('script.js') }}"></script>
    <script src="{{ asset('fetch/fetch.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>