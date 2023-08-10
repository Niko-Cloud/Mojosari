<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="overlay"></div>
    <div class="box">
        <div class="logo">
            <img src="assets/img/logo.png" alt="Logo">
        </div>
        <div class="arrow">
            <a href="/" class="nav-icon fas fa-arrow-left">
            </a>
        </div>
        <div class="title">
            <h1>USER LOGIN</h1>
            <p>Perangkat Desa Mojosari </p>
        </div>
        @error('loginError')
            <div class="alert alert-danger">
                <strong>Error</strong>
                <p>{{ $message }}</p>
            </div>
        @enderror
        <div class="login-form">
            <form action method="POST">
                @csrf
                <div class="content">
                    <div class="input-field">
                        <input type="text" class="form-control" placeholder="email" name="email"
                            autocomplete="nope">
                    </div>
                    @error('email')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="input-field">
                        <input type="password" class="form-control" placeholder="password" name="password"
                            autocomplete="new-password">
                    </div>
                    @error('password')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
                <div class="action">
                    <button type="submit">SIGN IN</button>
                </div>
            </form>
        </div>
        <!-- jQuery -->
        <script src="/lte/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/lte/dist/js/adminlte.min.js"></script>
</body>

<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</html>
