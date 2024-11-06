<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Register Page - Waste Management System" />
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        :root {
            --primary-color: #145733;
            --secondary-color: #737373;
            --border-color: #bcbcbc;
            --white: #ffffff;
            --black: #000000;
            --transition-speed: 0.3s;
        }

        * {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            min-height: 100vh;
        }

        .register {
            min-height: 100vh;
            display: flex;
            flex-wrap: wrap;
        }

        .register-left {
            flex: 1;
            min-width: 320px;
            padding: 20px;
        }

        .register-right {
            flex: 1;
            min-width: 320px;
        }

        .header h1 {
            font-weight: 600;
            font-size: clamp(24px, 4vw, 32px);
            line-height: 1.5;
            color: var(--black);
            animation: fadeInDown 0.6s ease forwards;
        }

        .header p {
            font-size: clamp(14px, 2vw, 16px);
            line-height: 1.5;
            color: var(--secondary-color);
            margin-bottom: 20px;
            animation: fadeInDown 0.6s ease forwards 0.2s;
        }

        .register-form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }

        .register-form label {
            font-weight: 400;
            font-size: clamp(14px, 2vw, 16px);
            color: var(--primary-color);
            margin-top: 10px;
            display: block;
        }

        .register-form input,
        .register-form select {
            width: 100%;
            background: var(--white);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 10px 15px;
            margin-bottom: 15px;
            font-size: clamp(14px, 2vw, 16px);
        }

        .input-group {
            position: relative;
            width: 100%;
        }

        .input-group-append {
            position: absolute;
            right: 15px;
            top: 40%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .signin-google {
            width: 100%;
            height: 42px;
            background: var(--white);
            border: 1px solid var(--border-color);
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .signin {
            width: 100%;
            height: 42px;
            background: var(--primary-color);
            border-radius: 50px;
            color: var(--white);
            border: none;
            margin-top: 20px;
            font-size: clamp(14px, 2vw, 16px);
        }

        .carousel-item img {
            height: 100vh;
            width: 100%;
            object-fit: cover;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 20px;
            max-width: 80%;
            margin: 0 auto;
            backdrop-filter: blur(5px);
        }

        .carousel-caption h5 {
            font-size: clamp(18px, 3vw, 32px);
            line-height: 1.5;
            color: var(--white);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 992px) {
            .register-right {
                display: none;
            }

            .register-left {
                flex: 1;
                width: 100%;
                max-width: 100%;
            }

            .register-form {
                max-width: 600px;
            }
        }

        @media (max-width: 768px) {
            .register-form {
                padding: 15px;
            }

            .row > [class*='col-'] {
                margin-bottom: 15px;
            }

            .header {
                padding: 0 15px;
            }
        }

        @media (max-width: 576px) {
            .register-left {
                padding: 10px;
            }

            .register-form {
                padding: 10px;
            }

            .row {
                margin: 0;
            }

            .col-12 {
                padding: 0;
            }

            .input-group-append {
                right: 10px;
            }
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <section class="register">
        <div class="register-left d-flex align-items-center justify-content-center">
            <div class="register-form">
                <div class="header text-center mb-4">
                    <h1>WELCOME BACK!</h1>
                </div>

                <form action="{{ url('/storeRegister') }}" method="POST" id="registerForm" class="needs-validation" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <label for="input1">Nama Depan</label>
                            <input type="text" class="form-control" placeholder="Enter your Nama Depan"
                                id="input1" name="nama_depan" required minlength="2" />
                            <div class="invalid-feedback">
                                Please enter your first name (minimum 2 characters)
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="input2">Nama Belakang</label>
                            <input type="text" class="form-control" placeholder="Enter your Nama Belakang"
                                id="input2" name="nama_belakang" required minlength="2" />
                            <div class="invalid-feedback">
                                Please enter your last name (minimum 2 characters)
                            </div>
                        </div>
                    </div>

                    <label for="input3">Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email"
                        id="input3" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                    <div class="invalid-feedback">
                        Please enter a valid email address
                    </div>

                    <label for="input4">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Enter your password"
                            id="input4" name="password" required minlength="8" />
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="togglePasswordVisibility('input4', 'eyeIcon4')">
                                <i class="fas fa-eye" id="eyeIcon4"></i>
                            </span>
                        </div>
                    </div>

                    <label for="input5">Konfirmasi Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Confirm your password"
                            id="input5" name="password_confirmation" required />
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="togglePasswordVisibility('input5', 'eyeIcon5')">
                                <i class="fas fa-eye" id="eyeIcon5"></i>
                            </span>
                        </div>
                    </div>

                    <label for="input6">Role</label>
                    <select class="form-control" id="input6" name="role" required>
                        <option value="ADMIN">Admin</option>
                        <option value="USER">User</option>
                    </select>

                    <div class="text-center mt-4">
                        <span>Do you have an account?
                            <a href="{{ url('/login') }}" class="text-decoration-none">Sign In for now</a>
                        </span>
                    </div>

                    <button class="signin mt-4" type="submit">Sign Up</button>
                </form>
            </div>
        </div>

        <div class="register-right">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/tongSampah4.jpeg') }}" class="d-block w-100" alt="Image 1" />
                        <div class="carousel-caption">
                            <h5>Small actions like disposing waste properly can make a big difference for our environment.</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/sampah_penuh.jpeg') }}" class="d-block w-100" alt="Image 2" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/membuang_sampah.jpeg') }}" class="d-block w-100" alt="Image 3" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePasswordVisibility(inputId, eyeIconId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = document.getElementById(eyeIconId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }
    </script>
</body>
</html>
