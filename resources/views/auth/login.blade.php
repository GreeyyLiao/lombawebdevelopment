<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="icon" type="image/png" href="{{ asset('dist/img/login1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        :root {
            --primary-green: #145733;
            --light-green: #1c7947;
            --lighter-green: #e8f5e9;
            --hover-green: #0d3b22;
            --white: #ffffff;
            --off-white: #f5f5f5;
            --border-green: #2e8b57;
            --text-dark: #333333;
            --text-light: #666666;
        }

        * {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
        }

        .login {
            min-height: 100vh;
            background-color: var(--white);
            position: relative;
        }

        /* Animated Background */
        .animated-bg {
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: 0;
            background: linear-gradient(45deg, rgba(20, 87, 51, 0.05), rgba(28, 121, 71, 0.05));
            overflow: hidden;
        }

        .animated-bg::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            background: repeating-linear-gradient(
                transparent,
                transparent 50px,
                rgba(20, 87, 51, 0.05) 50px,
                rgba(20, 87, 51, 0.05) 100px
            );
            transform: rotate(45deg);
            animation: move-bg 15s linear infinite;
        }

        @keyframes move-bg {
            0% {
                transform: translateX(-50%) translateY(-50%) rotate(45deg);
            }
            100% {
                transform: translateX(0%) translateY(0%) rotate(45deg);
            }
        }

        .login-container {
            position: relative;
            z-index: 1;
        }

        /* Header Styles with Advanced Animation */
        .header {
            opacity: 0;
            transform: translateY(-30px);
            animation: fadeInSlideDown 0.8s ease-out forwards;
        }

        .header h1 {
            font-weight: 600;
            font-size: clamp(24px, 5vw, 32px);
            color: var(--primary-green);
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, var(--primary-green), var(--light-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .header p {
            font-size: clamp(12px, 3vw, 14px);
            color: var(--text-light);
            margin-bottom: 1rem;
            animation: fadeIn 1s ease-out 0.5s forwards;
            opacity: 0;
        }

        /* Form Styles with Advanced Animation */
        .login-form {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInSlideUp 0.8s ease-out 0.3s forwards;
        }

        .form-floating {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-floating > label {
            color: var(--primary-green);
            font-weight: 500;
        }

        .form-floating > .form-control {
            height: 55px;
            border: 2px solid var(--border-green);
            border-radius: 15px;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
        }

        .form-floating > .form-control:focus {
            box-shadow: 0 0 0 3px rgba(20, 87, 51, 0.2);
            border-color: var(--primary-green);
            background: var(--white);
        }

        /* Password Input with Eye Icon */
        .password-field {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-green);
            cursor: pointer;
            padding: 5px;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .password-toggle:hover {
            color: var(--light-green);
        }

        /* Button Styles */
        .signin {
            background: linear-gradient(45deg, var(--primary-green), var(--light-green));
            color: var(--white);
            border: none;
            font-weight: 500;
            height: 50px;
            border-radius: 15px;
            font-size: clamp(14px, 3.5vw, 16px);
            margin-top: 1.5rem;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(20, 87, 51, 0.2);
        }

        .signin:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(20, 87, 51, 0.3);
        }

        .signin::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: -100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .signin:hover::after {
            left: 100%;
        }

        /* Sign up text with animation */
        .signup-text {
            margin-top: 1.5rem;
            font-size: clamp(12px, 3.5vw, 14px);
            opacity: 0;
            animation: fadeIn 0.8s ease-out 1s forwards;
        }

        .signup-text a {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
            position: relative;
        }

        .signup-text a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: var(--primary-green);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .signup-text a:hover::after {
            transform: scaleX(1);
        }

        /* Carousel Styles */
        .login-right {
            position: relative;
            overflow: hidden;
        }

        .carousel-item img {
            height: 100vh;
            object-fit: cover;
            filter: brightness(0.8);
            transform: scale(1.1);
            transition: transform 0.5s ease-out;
        }

        .carousel-item.active img {
            transform: scale(1);
        }

        .carousel-caption {
            background: rgba(20, 87, 51, 0.8);
            padding: 20px;
            border-radius: 15px;
            backdrop-filter: blur(5px);
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.5s ease-out;
        }

        .carousel-item.active .carousel-caption {
            transform: translateY(0);
            opacity: 1;
        }

        /* Animations */
        @keyframes fadeInSlideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInSlideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Responsive Styles */
        @media screen and (max-width: 767px) {
            .login-right {
                display: none;
            }

            .login-left {
                width: 100% !important;
                min-height: 100vh;
                display: flex;
                align-items: center;
                padding: 2rem;
            }

            .login-form {
                max-width: 400px;
                margin: 0 auto;
                width: 100%;
            }

            .header {
                margin-bottom: 2rem;
            }
        }

        @media screen and (min-width: 768px) {
            .login-left,
            .login-right {
                width: 50%;
            }

            .login-form {
                max-width: 450px;
                margin: 0 auto;
            }
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--white);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            animation: fadeOut 0.5s ease-out 1.5s forwards;
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid var(--lighter-green);
            border-top: 5px solid var(--primary-green);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                visibility: hidden;
            }
        }
    </style>
</head>

<body>
    <!-- Loading Animation -->
    <div class="loading-overlay">
        <div class="loader"></div>
    </div>

    <section class="login d-flex">
        <!-- Animated Background -->
        <div class="animated-bg"></div>

        <div class="login-container d-flex w-100">
            <div class="login-left h-100 d-flex align-items-center justify-content-center">
                <form action="{{ url('/storeLogin') }}" method="POST" class="w-100">
                    @csrf
                    <div class="register-form">
                        <div class="header text-center">
                            <h1>WELCOME BACK!</h1>
                            <p>Continue with Google or enter your details</p>
                        </div>
                        <div class="login-form">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="input1" name="email"
                                    placeholder="name@example.com" required>
                                <label for="input1">Email address</label>
                            </div>

                            <div class="form-floating password-field">
                                <input type="password" class="form-control" id="input2" name="password"
                                    placeholder="Password" required>
                                <label for="input2">Password</label>
                                <span class="password-toggle" onclick="togglePasswordVisibility()">
                                    <i class="fas fa-eye" id="eyeIcon"></i>
                                </span>
                            </div>

                            <button type="submit" class="signin btn w-100">
                                Sign In
                            </button>

                            <div class="signup-text text-center">
                                <span>Don't have an account?
                                    <a href="{{ url('/register') }}">Sign up for free</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="login-right h-100">
                <div id="carouselExampleRide" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/sampah_penuh.jpeg') }}" class="d-block w-100" alt="..." />
                            <div class="carousel-caption">
                                <h5>Tindakan kecil seperti membuang sampah pada tempatnya...</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/tongSampah4.jpeg') }}" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/membuang_sampah.jpeg') }}" class="d-block w-100" alt="..." />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("input2");
            const eyeIcon = document.getElementById("eyeIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>
