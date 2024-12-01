<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('mainstyle.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dashboard IoT</title>
</head>

<body style="background: #5A6683;">
<section class="vh-100">
    <div class="py-5 h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-white" style="border-radius: 1rem; height:max-content">
                    <div class="card-body p-5">
                        <div class="mb-md-1 mt-md-1 pb-1">
                            <h2 class="fw-bold mb-5 text-uppercase text-center" style="color:var(--blueiot)">Welcome Back!</h2>
                            <form id="formLogin">
                                <div data-mdb-input-init class="form-outline form-white mb-3">
                                    <label class="form-label fw-bold" for="email" style="color:var(--blueiot)">Email</label>
                                    <input type="email" id="emailLogin" name="email" class="form-control form-control-lg" />
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-2">
                                    <label class="form-label fw-bold" for="password" style="color:var(--blueiot)">Password</label>
                                    <input type="password" id="passwordLogin" name="password" class="form-control form-control-lg" />
                                </div>
                                <p class="small pb-lg-2 mb-5 text-end"><a class="text-decoration-none" href="#!">Forgot password?</a></p>
                                <div class="text-center mt-0">
                                    <button class="button-signin text-center px-2 py-2" type="submit" id="loginButton">Sign In</button>
                                </div>
                            </form>
                        </div>

                        <div class="text-center">
                            <p class="mb-0">Don't have an account? <a class="fw-bold text-decoration-none" href="/register" style="color:var(--blueiot)">Sign Up here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
const userEndpoint = 'https://reqres.in/api/login';

function loginUser() {
    const email = document.getElementById('emailLogin').value;
    const password = document.getElementById('passwordLogin').value;

    if (!email || !password) {
        alert('Silakan masukkan email dan password!');
        return;
    }

    console.log('Email:', email, 'Password:', password); // Debugging

    fetch(userEndpoint, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email, password }),
    })
    .then(response => {
        console.log('Response status:', response.status); // Debugging
        return response.json();
    })
    .then(data => {
        console.log('API Response:', data); // Debugging
        if (data.token) {
            alert('Login berhasil!');
            console.log('Token:', data.token);
            window.location.href = '/config'; // Ganti dengan URL halaman tujuan
        } else {
            alert('Login gagal! Periksa email dan password.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat login!');
    });
}

document.getElementById('loginButton').addEventListener('click', (event) => {
    event.preventDefault();
    loginUser();
});



    
</script>

</body>
</html>
